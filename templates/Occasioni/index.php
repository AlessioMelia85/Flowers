<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Occasioni[]|\Cake\Collection\CollectionInterface $occasioni
 */
?>
<div class="occasioni index content">
    <?= $this->Html->link(__('New Occasioni'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Occasioni') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('flower_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($occasioni as $occasioni): ?>
                <tr>
                    <td><?= $this->Number->format($occasioni->id) ?></td>
                    <td><?= h($occasioni->nome) ?></td>
                    <td><?= $occasioni->has('flower') ? $this->Html->link($occasioni->flower->id, ['controller' => 'Flowers', 'action' => 'view', $occasioni->flower->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $occasioni->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $occasioni->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $occasioni->id], ['confirm' => __('Are you sure you want to delete # {0}?', $occasioni->id)]) ?>
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
