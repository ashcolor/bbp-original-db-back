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
            <?= $this->Html->link(__('List Musics'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="musics form content">
            <?= $this->Form->create($music) ?>
            <fieldset>
                <legend><?= __('Add Music') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('artist');
                    echo $this->Form->control('contributor');
                    echo $this->Form->control('published', ['empty' => true]);
                    echo $this->Form->control('genre');
                    echo $this->Form->control('remarks');
                    echo $this->Form->control('url');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
