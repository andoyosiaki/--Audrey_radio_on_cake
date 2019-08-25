<div class="users form">
  <?= $this->Flash->render('auth') ?>
  <?= $this->Form->create() ?>
  <fieldset>
    <legend>管理人専用</legend>
    <?= $this->Form->input('username') ?>
    <?= $this->Form->input('password') ?>
  </fieldset>
  <?= $this->Form->button(__('送信')); ?>
  <?= $this->Form->end()  ?>
</div>
