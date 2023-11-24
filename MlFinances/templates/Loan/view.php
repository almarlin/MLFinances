<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Loan $loan
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Loan'), ['action' => 'edit', $loan->ID_LOAN], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Loan'), ['action' => 'delete', $loan->ID_LOAN], ['confirm' => __('Are you sure you want to delete # {0}?', $loan->ID_LOAN), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Loan'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Loan'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="loan view content">
            <h3><?= h($loan->ID_LOAN) ?></h3>
            <table>
                <tr>
                    <th><?= __('ID LOAN') ?></th>
                    <td><?= $this->Number->format($loan->ID_LOAN) ?></td>
                </tr>
                <tr>
                    <th><?= __('MONTHLYPAYMENT') ?></th>
                    <td><?= $loan->MONTHLYPAYMENT === null ? '' : $this->Number->format($loan->MONTHLYPAYMENT) ?></td>
                </tr>
                <tr>
                    <th><?= __('TERMS') ?></th>
                    <td><?= $loan->TERMS === null ? '' : $this->Number->format($loan->TERMS) ?></td>
                </tr>
                <tr>
                    <th><?= __('TOTAL') ?></th>
                    <td><?= $loan->TOTAL === null ? '' : $this->Number->format($loan->TOTAL) ?></td>
                </tr>
                <tr>
                    <th><?= __('INTEREST') ?></th>
                    <td><?= $loan->INTEREST === null ? '' : $this->Number->format($loan->INTEREST) ?></td>
                </tr>
                <tr>
                    <th><?= __('EXPEDITIONDATE') ?></th>
                    <td><?= h($loan->EXPEDITIONDATE) ?></td>
                </tr>
                <tr>
                    <th><?= __('DUEDATE') ?></th>
                    <td><?= h($loan->DUEDATE) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Account') ?></h4>
                <?php if (!empty($loan->account)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('ID ACCOUNT') ?></th>
                            <th><?= __('BALANCE') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($loan->account as $account) : ?>
                        <tr>
                            <td><?= h($account->ID_ACCOUNT) ?></td>
                            <td><?= h($account->BALANCE) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Account', 'action' => 'view', $account->ID_ACCOUNT]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Account', 'action' => 'edit', $account->ID_ACCOUNT]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Account', 'action' => 'delete', $account->ID_ACCOUNT], ['confirm' => __('Are you sure you want to delete # {0}?', $account->ID_ACCOUNT)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
