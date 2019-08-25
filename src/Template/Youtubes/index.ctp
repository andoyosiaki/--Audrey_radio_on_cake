<?php
$this->assign('title','オードリーラジオまとめ');
 ?>
 <article class="article_box">
   <?php foreach($youtubes as $youtube): ?>
     <div class="article_inner-box">
       <span>No<?= h($youtube->id); ?>.</span>
       <div class="article-title_box">
         <h2><a href="<?= $this->Url->build(['action'=>'view',$youtube->id]); ?>"><?= h($youtube->name);?></a></h2>
       </div>
        <div class="article_inner-picture">
        <?= $this->Html->image("$youtube->id.jpg", [
          "alt" => "$youtube->name",
          'url' => ['action' => 'view',$youtube->id]
        ]); ?>
        </div>
     </div>
   <?php endforeach; ?>
 </article>

 <div class="paginate">
   <?= $this->Paginator->first('<<'); ?>
   <?= $this->Paginator->prev('<') ?>
   <?= $this->Paginator->numbers() ?>
   <?= $this->Paginator->next('>') ?>
   <?= $this->Paginator->last('>>') ?>
 </div>

 <div class="paginate_sp">
   <?= $this->Paginator->first('<<') ?>
   <?= $this->Paginator->prev('<') ?>
   <?= $this->Paginator->next('>') ?>
   <?= $this->Paginator->last('>>') ?>
 </div>
