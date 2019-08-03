<?php
/**
 * The html template file of index method of index module of zentaoPHP.
 *
 * The author disclaims copyright to this source code.  In place of
 * a legal notice, here is a blessing:
 * 
 *  May you do good and not evil.
 *  May you find forgiveness for yourself and forgive others.
 *  May you share freely, never taking more than you give.
 */
?>
<?php include '../../common/view/header.html.php';?>
<div class='container'>
  <div class="hero-unit">
    <p>
      <?php echo $lang->intro;  ?>
    </p>
   <p><?php echo html::a( $this->createLink('blog', 'indexByCategory', 'cat_code=index'), $lang->more);?></p>
  </div>

  <div class="row">
    <div class="col-md-3">
      <div class="panel alert">
      <h4> <i class='icon icon-code'> </i><?php echo $lang->slogan->first;?> </h4>
      <h5><?php echo $lang->slogantext->first;?> </h5>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel alert">
      <h4>  <i class='icon icon-rocket'> </i> <?php echo $lang->slogan->second;?></h4>
      <h5><?php echo $lang->slogantext->second;?></h5>
      </div>
   </div>
    <div class="col-md-3">
      <div class="panel alert">
      <h4>  <i class='icon icon-list'> </i> <?php echo $lang->slogan->third;?></h4>
      <h5><?php echo $lang->slogantext->third;?></h5>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel alert">
      <h4>  <i class='icon icon-thumbs-o-up'> </i><?php echo $lang->slogan->fourth;?></h4>
      <h5><?php echo $lang->slogantext->fourth;?></h5>
      </div>
    </div>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
