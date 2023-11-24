<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movement $movement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Movement'), ['action' => 'edit', $movement->ID_MOVEMENT], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Movement'), ['action' => 'delete', $movement->ID_MOVEMENT], ['confirm' => __('Are you sure you want to delete # {0}?', $movement->ID_MOVEMENT), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Movement'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Movement'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="movement view content">
            <h3><?= h($movement->ID_MOVEMENT) ?></h3>
            <table>
                <tr>
                    <th><?= __('CONCEPT') ?></th>
                    <td><?= h($movement->CONCEPT) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID MOVEMENT') ?></th>
                    <td><?= $this->Number->format($movement->ID_MOVEMENT) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID FROMACCOUNT') ?></th>
                    <td><?= $movement->ID_FROMACCOUNT === null ? '' : $this->Number->format($movement->ID_FROMACCOUNT) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID TOACCOUNT') ?></th>
                    <td><?= $movement->ID_TOACCOUNT === null ? '' : $this->Number->format($movement->ID_TOACCOUNT) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Account') ?></h4>
                <?php if (!empty($movement->account)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('ID ACCOUNT') ?></th>
                            <th><?= __('BALANCE') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($movement->account as $account) : ?>
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
