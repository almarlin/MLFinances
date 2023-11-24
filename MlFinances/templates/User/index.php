<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $user
 */
?>
<div class="user index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID_USER') ?></th>
                    <th><?= $this->Paginator->sort('NIF') ?></th>
                    <th><?= $this->Paginator->sort('NAME') ?></th>
                    <th><?= $this->Paginator->sort('SURNAME') ?></th>
                    <th><?= $this->Paginator->sort('AGE') ?></th>
                    <th><?= $this->Paginator->sort('HASH') ?></th>
                    <th><?= $this->Paginator->sort('BAN') ?></th>
                    <th><?= $this->Paginator->sort('ADMIN') ?></th>
                    <th><?= $this->Paginator->sort('PROFILEPHOTO') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->ID_USER) ?></td>
                    <td><?= $user->NIF === null ? '' : $this->Number->format($user->NIF) ?></td>
                    <td><?= h($user->NAME) ?></td>
                    <td><?= h($user->SURNAME) ?></td>
                    <td><?= $user->AGE === null ? '' : $this->Number->format($user->AGE) ?></td>
                    <td><?= h($user->HASH) ?></td>
                    <td><?= h($user->BAN) ?></td>
                    <td><?= h($user->ADMIN) ?></td>
                    <td><?= h($user->PROFILEPHOTO) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->ID_USER]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->ID_USER]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->ID_USER], ['confirm' => __('Are you sure you want to delete # {0}?', $user->ID_USER)]) ?>
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
