<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AnimalItem $animalItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Animal Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="animalItems form large-9 medium-8 columns content">
    <?= $this->Form->create($animalItem) ?>
    <fieldset>
        <legend><?= __('Add Animal Item') ?></legend>
        <?php
           // echo $this->Form->control('farm_id', ['options' => $farms]);
           //echo $this->Form->control('animal_id', ['options' => $animals]);
            echo $this->Form->control('animal_tag',['type'=>'text']);
            echo $this->Form->control('item_id', ['options' => $items]);
            echo $this->Form->control('quantity');
           // echo $this->Form->control('date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
