<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Musics Model
 *
 * @method \App\Model\Entity\Music newEmptyEntity()
 * @method \App\Model\Entity\Music newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Music[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Music get($primaryKey, $options = [])
 * @method \App\Model\Entity\Music findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Music patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Music[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Music|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Music saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Music[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Music[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Music[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Music[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MusicsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('musics');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 100)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('artist')
            ->maxLength('artist', 100)
            ->allowEmptyString('artist');

        $validator
            ->scalar('contributor')
            ->maxLength('contributor', 20)
            ->requirePresence('contributor', 'create')
            ->notEmptyString('contributor');

        $validator
            ->date('published')
            ->allowEmptyDate('published');

        $validator
            ->scalar('genre')
            ->maxLength('genre', 10)
            ->allowEmptyString('genre');

        $validator
            ->scalar('remarks')
            ->maxLength('remarks', 1000)
            ->allowEmptyString('remarks');

        $validator
            ->scalar('url')
            ->maxLength('url', 100)
            ->allowEmptyString('url');

        return $validator;
    }
}
