<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $account
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List User'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="user form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('NIF');
                    echo $this->Form->control('NAME');
                    echo $this->Form->control('SURNAME');
                    echo $this->Form->control('AGE');
                    echo $this->Form->control('HASH');
                    echo $this->Form->control('BAN');
                    echo $this->Form->control('ADMIN');
                    echo $this->Form->control('PROFILEPHOTO');
                    echo $this->Form->control('account._ids', ['options' => $account]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
