<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Musics Controller
 *
 * @property \App\Model\Table\MusicsTable $Musics
 * @method \App\Model\Entity\Music[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MusicsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $musics = $this->paginate($this->Musics);

        $this->set(compact('musics'));
    }

    /**
     * View method
     *
     * @param string|null $id Music id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $music = $this->Musics->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('music'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $music = $this->Musics->newEmptyEntity();
        if ($this->request->is('post')) {
            $music = $this->Musics->patchEntity($music, $this->request->getData());
            if ($this->Musics->save($music)) {
                $this->Flash->success(__('The music has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The music could not be saved. Please, try again.'));
        }
        $this->set(compact('music'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Music id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $music = $this->Musics->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $music = $this->Musics->patchEntity($music, $this->request->getData());
            if ($this->Musics->save($music)) {
                $this->Flash->success(__('The music has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The music could not be saved. Please, try again.'));
        }
        $this->set(compact('music'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Music id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $music = $this->Musics->get($id);
        if ($this->Musics->delete($music)) {
            $this->Flash->success(__('The music has been deleted.'));
        } else {
            $this->Flash->error(__('The music could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function export(){
        $req = $this->getRequest()->getData();

        $query = $this->Musics->find();

        $fp = fopen('php://temp/maxmemory:' . (1024 * 1024 * $query->count()), 'w+');

        $schema = $this->Musics->getSchema();
        $columns = $schema->columns();
        $comments = [];
        foreach($columns as $column) {
            $column_data = $schema->getColumn($column);
            $comments[] = $column_data['comment'];
        }
        fputcsv($fp, $comments);

        foreach ($query as $q) {
            $music = $q->jsonSerialize();
            fputcsv($fp, $music);
        }

        rewind($fp);
        $csv = stream_get_contents($fp);
        fclose($fp);
        $csv = mb_convert_encoding($csv, 'SJIS-win', 'utf8');

        $this->autoRender = false;
        $response = $this->response;
        $response = $response->withStringBody($csv);
        $response = $response->withDownload('music_' . date('Ymd') . '.csv');
        return $response;

    }
}
