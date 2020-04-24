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
            <?= $this->Html->link(__('Edit Occasioni'), ['action' => 'edit', $occasioni->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Occasioni'), ['action' => 'delete', $occasioni->id], ['confirm' => __('Are you sure you want to delete # {0}?', $occasioni->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Occasioni'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Occasioni'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="occasioni view content">
            <h3><?= h($occasioni->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($occasioni->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Flower') ?></th>
                    <td><?= $occasioni->has('flower') ? $this->Html->link($occasioni->flower->id, ['controller' => 'Flowers', 'action' => 'view', $occasioni->flower->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($occasioni->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descrizione') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($occasioni->descrizione)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
