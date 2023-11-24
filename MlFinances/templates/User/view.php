<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->ID_USER], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->ID_USER], ['confirm' => __('Are you sure you want to delete # {0}?', $user->ID_USER), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="user view content">
            <h3><?= h($user->ID_USER) ?></h3>
            <table>
                <tr>
                    <th><?= __('NAME') ?></th>
                    <td><?= h($user->NAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('SURNAME') ?></th>
                    <td><?= h($user->SURNAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('HASH') ?></th>
                    <td><?= h($user->HASH) ?></td>
                </tr>
                <tr>
                    <th><?= __('PROFILEPHOTO') ?></th>
                    <td><?= h($user->PROFILEPHOTO) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID USER') ?></th>
                    <td><?= $this->Number->format($user->ID_USER) ?></td>
                </tr>
                <tr>
                    <th><?= __('NIF') ?></th>
                    <td><?= $user->NIF === null ? '' : $this->Number->format($user->NIF) ?></td>
                </tr>
                <tr>
                    <th><?= __('AGE') ?></th>
                    <td><?= $user->AGE === null ? '' : $this->Number->format($user->AGE) ?></td>
                </tr>
                <tr>
                    <th><?= __('BAN') ?></th>
                    <td><?= $user->BAN ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('ADMIN') ?></th>
                    <td><?= $user->ADMIN ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Account') ?></h4>
                <?php if (!empty($user->account)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('ID ACCOUNT') ?></th>
                            <th><?= __('BALANCE') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->account as $account) : ?>
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
