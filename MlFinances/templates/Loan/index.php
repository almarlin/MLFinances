<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Loan> $loan
 */
?>
<div class="loan index content">
    <?= $this->Html->link(__('New Loan'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Loan') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID_LOAN') ?></th>
                    <th><?= $this->Paginator->sort('EXPEDITIONDATE') ?></th>
                    <th><?= $this->Paginator->sort('MONTHLYPAYMENT') ?></th>
                    <th><?= $this->Paginator->sort('TERMS') ?></th>
                    <th><?= $this->Paginator->sort('TOTAL') ?></th>
                    <th><?= $this->Paginator->sort('INTEREST') ?></th>
                    <th><?= $this->Paginator->sort('DUEDATE') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($loan as $loan): ?>
                <tr>
                    <td><?= $this->Number->format($loan->ID_LOAN) ?></td>
                    <td><?= h($loan->EXPEDITIONDATE) ?></td>
                    <td><?= $loan->MONTHLYPAYMENT === null ? '' : $this->Number->format($loan->MONTHLYPAYMENT) ?></td>
                    <td><?= $loan->TERMS === null ? '' : $this->Number->format($loan->TERMS) ?></td>
                    <td><?= $loan->TOTAL === null ? '' : $this->Number->format($loan->TOTAL) ?></td>
                    <td><?= $loan->INTEREST === null ? '' : $this->Number->format($loan->INTEREST) ?></td>
                    <td><?= h($loan->DUEDATE) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $loan->ID_LOAN]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $loan->ID_LOAN]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $loan->ID_LOAN], ['confirm' => __('Are you sure you want to delete # {0}?', $loan->ID_LOAN)]) ?>
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
