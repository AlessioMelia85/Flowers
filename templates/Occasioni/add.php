<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Occasioni $occasioni
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Occasioni'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="occasioni form content">
            <?= $this->Form->create($occasioni) ?>
            <fieldset>
                <legend><?= __('Add Occasioni') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('descrizione');
                    echo $this->Form->control('flower_id', ['options' => $flowers]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
