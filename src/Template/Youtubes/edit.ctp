<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Youtube $youtube
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $youtube->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $youtube->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Youtubes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="youtubes form large-9 medium-8 columns content">
    <?= $this->Form->create($youtube) ?>
    <fieldset>
        <legend><?= __('Edit Youtube') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
