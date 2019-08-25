<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Youtube $youtube
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Youtubes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="youtubes form large-9 medium-8 columns content">
    <?= $this->Form->create('youtubes',['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Youtube') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('url');
            echo $this->form->file('UploadData.img_name',['type'=>'file']);
        ?>

    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
