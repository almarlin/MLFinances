<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Account> $account
 */
?>
<div class="account index content">
    <?= $this->Html->link(__('New Account'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Account') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID_ACCOUNT') ?></th>
                    <th><?= $this->Paginator->sort('BALANCE') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($account as $account): ?>
                <tr>
                    <td><?= $this->Number->format($account->ID_ACCOUNT) ?></td>
                    <td><?= $account->BALANCE === null ? '' : $this->Number->format($account->BALANCE) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $account->ID_ACCOUNT]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $account->ID_ACCOUNT]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $account->ID_ACCOUNT], ['confirm' => __('Are you sure you want to delete # {0}?', $account->ID_ACCOUNT)]) ?>
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
