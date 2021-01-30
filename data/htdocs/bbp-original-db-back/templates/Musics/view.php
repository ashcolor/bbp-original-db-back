<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Music $music
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Music'), ['action' => 'edit', $music->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Music'), ['action' => 'delete', $music->id], ['confirm' => __('Are you sure you want to delete # {0}?', $music->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Musics'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Music'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="musics view content">
            <h3><?= h($music->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($music->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Artist') ?></th>
                    <td><?= h($music->artist) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contributor') ?></th>
                    <td><?= h($music->contributor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Genre') ?></th>
                    <td><?= h($music->genre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remarks') ?></th>
                    <td><?= h($music->remarks) ?></td>
                </tr>
                <tr>
                    <th><?= __('Url') ?></th>
                    <td><?= h($music->url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($music->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Published') ?></th>
                    <td><?= h($music->published) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($music->updated) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
