<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account $account
 * @var string[]|\Cake\Collection\CollectionInterface $loan
 * @var string[]|\Cake\Collection\CollectionInterface $movement
 * @var string[]|\Cake\Collection\CollectionInterface $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $account->ID_ACCOUNT],
                ['confirm' => __('Are you sure you want to delete # {0}?', $account->ID_ACCOUNT), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Account'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="account form content">
            <?= $this->Form->create($account) ?>
            <fieldset>
                <legend><?= __('Edit Account') ?></legend>
                <?php
                    echo $this->Form->control('BALANCE');
                    echo $this->Form->control('loan._ids', ['options' => $loan]);
                    echo $this->Form->control('movement._ids', ['options' => $movement]);
                    echo $this->Form->control('user._ids', ['options' => $user]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
