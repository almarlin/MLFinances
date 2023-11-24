<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Movement> $movement
 */
?>
<div class="movement index content">
    <?= $this->Html->link(__('New Movement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Movement') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID_MOVEMENT') ?></th>
                    <th><?= $this->Paginator->sort('ID_FROMACCOUNT') ?></th>
                    <th><?= $this->Paginator->sort('ID_TOACCOUNT') ?></th>
                    <th><?= $this->Paginator->sort('CONCEPT') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movement as $movement): ?>
                <tr>
                    <td><?= $this->Number->format($movement->ID_MOVEMENT) ?></td>
                    <td><?= $movement->ID_FROMACCOUNT === null ? '' : $this->Number->format($movement->ID_FROMACCOUNT) ?></td>
                    <td><?= $movement->ID_TOACCOUNT === null ? '' : $this->Number->format($movement->ID_TOACCOUNT) ?></td>
                    <td><?= h($movement->CONCEPT) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $movement->ID_MOVEMENT]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movement->ID_MOVEMENT]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movement->ID_MOVEMENT], ['confirm' => __('Are you sure you want to delete # {0}?', $movement->ID_MOVEMENT)]) ?>
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
