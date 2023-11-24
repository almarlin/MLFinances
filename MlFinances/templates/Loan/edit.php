<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Loan $loan
 * @var string[]|\Cake\Collection\CollectionInterface $account
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $loan->ID_LOAN],
                ['confirm' => __('Are you sure you want to delete # {0}?', $loan->ID_LOAN), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Loan'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="loan form content">
            <?= $this->Form->create($loan) ?>
            <fieldset>
                <legend><?= __('Edit Loan') ?></legend>
                <?php
                    echo $this->Form->control('EXPEDITIONDATE', ['empty' => true]);
                    echo $this->Form->control('MONTHLYPAYMENT');
                    echo $this->Form->control('TERMS');
                    echo $this->Form->control('TOTAL');
                    echo $this->Form->control('INTEREST');
                    echo $this->Form->control('DUEDATE', ['empty' => true]);
                    echo $this->Form->control('account._ids', ['options' => $account]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
