<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Music[]|\Cake\Collection\CollectionInterface $musics
 */
?>
<div class="musics index content">
    <?= $this->Html->link(__('New Music'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Musics') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('artist') ?></th>
                    <th><?= $this->Paginator->sort('contributor') ?></th>
                    <th><?= $this->Paginator->sort('published') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th><?= $this->Paginator->sort('genre') ?></th>
                    <th><?= $this->Paginator->sort('remarks') ?></th>
                    <th><?= $this->Paginator->sort('url') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($musics as $music): ?>
                <tr>
                    <td><?= $this->Number->format($music->id) ?></td>
                    <td><?= h($music->title) ?></td>
                    <td><?= h($music->artist) ?></td>
                    <td><?= h($music->contributor) ?></td>
                    <td><?= h($music->published) ?></td>
                    <td><?= h($music->updated) ?></td>
                    <td><?= h($music->genre) ?></td>
                    <td><?= h($music->remarks) ?></td>
                    <td><?= h($music->url) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $music->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $music->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $music->id], ['confirm' => __('Are you sure you want to delete # {0}?', $music->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
