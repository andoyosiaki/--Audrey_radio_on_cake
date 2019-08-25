<?php
$this->assign('title',h($youtube->name));
 ?>
<body>
  <div class="container detail_container">
    <div class="detail_text">
      <h2><?php echo h($youtube->name); ?></h2>
      <?php  $id = h($youtube->id); ?>
    </div>
    <div class="article_iframe">
      <iframe width="240" height="315" src="https://www.youtube.com/embed/<?php echo h($youtube->url); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
  <div class="return">
   <?php if($id >= 2): ?>
    <a href="<?= $this->Url->build(['action'=>'view',($youtube->id-1)]); ?>"><i class="fas fa-arrow-left"></i></a>
   <?php endif; ?>
    <a href="/youtubes/index"><i class="fas fa-home"></i></a>
   <?php if($id != $max): ?>
    <a href="<?= $this->Url->build(['action'=>'view',($id + 1)]); ?>"><i class="fas fa-arrow-right"></i></a>
   <?php endif; ?>
  </div>
  <div class="recommend">
    <div class="recommend_title-box">
      <h3 class="recommend_title">おすすめ動画</h3>
    </div>
    <div class="recommend_box1 recommend_sp">
     <?= $this->Html->image("$rand_a.jpg", [
       'url' => ['action' => 'view',$rand_a]
     ]); ?>
    </div>
    <div class="recommend_box1 recommend_sp">
     <?= $this->Html->image("$rand_b.jpg", [
       'url' => ['action' => 'view',$rand_b]
     ]); ?>
    </div>
    <div class="recommend_box1 recommend_sp">
     <?= $this->Html->image("$rand_c.jpg", [
       'url' => ['action' => 'view',$rand_c]
     ]); ?>
    </div>
    <div class="recommend_box3 ">
     <?= $this->Html->image("$rand_d.jpg", [
       'url' => ['action' => 'view',$rand_d]
     ]); ?>
    </div>
    <div class="recommend_box3 ">
     <?= $this->Html->image("$rand_e.jpg", [
       'url' => ['action' => 'view',$rand_e]
     ]); ?>
    </div>
  </div>
</body>
