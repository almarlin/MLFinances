<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movement $movement
 * @var \Cake\Collection\CollectionInterface|string[] $account
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Movement'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="movement form content">
            <?= $this->Form->create($movement) ?>
            <fieldset>
                <legend><?= __('Add Movement') ?></legend>
                <?php
                    echo $this->Form->control('ID_FROMACCOUNT');
                    echo $this->Form->control('ID_TOACCOUNT');
                    echo $this->Form->control('CONCEPT');
                    echo $this->Form->control('account._ids', ['options' => $account]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
