<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account $account
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Account'), ['action' => 'edit', $account->ID_ACCOUNT], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Account'), ['action' => 'delete', $account->ID_ACCOUNT], ['confirm' => __('Are you sure you want to delete # {0}?', $account->ID_ACCOUNT), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Account'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Account'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="account view content">
            <h3><?= h($account->ID_ACCOUNT) ?></h3>
            <table>
                <tr>
                    <th><?= __('ID ACCOUNT') ?></th>
                    <td><?= $this->Number->format($account->ID_ACCOUNT) ?></td>
                </tr>
                <tr>
                    <th><?= __('BALANCE') ?></th>
                    <td><?= $account->BALANCE === null ? '' : $this->Number->format($account->BALANCE) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Loan') ?></h4>
                <?php if (!empty($account->loan)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('ID LOAN') ?></th>
                            <th><?= __('EXPEDITIONDATE') ?></th>
                            <th><?= __('MONTHLYPAYMENT') ?></th>
                            <th><?= __('TERMS') ?></th>
                            <th><?= __('TOTAL') ?></th>
                            <th><?= __('INTEREST') ?></th>
                            <th><?= __('DUEDATE') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($account->loan as $loan) : ?>
                        <tr>
                            <td><?= h($loan->ID_LOAN) ?></td>
                            <td><?= h($loan->EXPEDITIONDATE) ?></td>
                            <td><?= h($loan->MONTHLYPAYMENT) ?></td>
                            <td><?= h($loan->TERMS) ?></td>
                            <td><?= h($loan->TOTAL) ?></td>
                            <td><?= h($loan->INTEREST) ?></td>
                            <td><?= h($loan->DUEDATE) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Loan', 'action' => 'view', $loan->ID_LOAN]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Loan', 'action' => 'edit', $loan->ID_LOAN]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Loan', 'action' => 'delete', $loan->ID_LOAN], ['confirm' => __('Are you sure you want to delete # {0}?', $loan->ID_LOAN)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Movement') ?></h4>
                <?php if (!empty($account->movement)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('ID MOVEMENT') ?></th>
                            <th><?= __('ID FROMACCOUNT') ?></th>
                            <th><?= __('ID TOACCOUNT') ?></th>
                            <th><?= __('CONCEPT') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($account->movement as $movement) : ?>
                        <tr>
                            <td><?= h($movement->ID_MOVEMENT) ?></td>
                            <td><?= h($movement->ID_FROMACCOUNT) ?></td>
                            <td><?= h($movement->ID_TOACCOUNT) ?></td>
                            <td><?= h($movement->CONCEPT) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Movement', 'action' => 'view', $movement->ID_MOVEMENT]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Movement', 'action' => 'edit', $movement->ID_MOVEMENT]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Movement', 'action' => 'delete', $movement->ID_MOVEMENT], ['confirm' => __('Are you sure you want to delete # {0}?', $movement->ID_MOVEMENT)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related User') ?></h4>
                <?php if (!empty($account->user)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('ID USER') ?></th>
                            <th><?= __('NIF') ?></th>
                            <th><?= __('NAME') ?></th>
                            <th><?= __('SURNAME') ?></th>
                            <th><?= __('AGE') ?></th>
                            <th><?= __('HASH') ?></th>
                            <th><?= __('BAN') ?></th>
                            <th><?= __('ADMIN') ?></th>
                            <th><?= __('PROFILEPHOTO') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($account->user as $user) : ?>
                        <tr>
                            <td><?= h($user->ID_USER) ?></td>
                            <td><?= h($user->NIF) ?></td>
                            <td><?= h($user->NAME) ?></td>
                            <td><?= h($user->SURNAME) ?></td>
                            <td><?= h($user->AGE) ?></td>
                            <td><?= h($user->HASH) ?></td>
                            <td><?= h($user->BAN) ?></td>
                            <td><?= h($user->ADMIN) ?></td>
                            <td><?= h($user->PROFILEPHOTO) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'User', 'action' => 'view', $user->ID_USER]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'User', 'action' => 'edit', $user->ID_USER]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'User', 'action' => 'delete', $user->ID_USER], ['confirm' => __('Are you sure you want to delete # {0}?', $user->ID_USER)]) ?>
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
