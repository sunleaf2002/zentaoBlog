<?php
/**
 * The html template file of index method of blog module of ZenTaoPHP.
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


 <div class="container-fluid">
        <div class="row">
            <div class="col-md-1" style="top:50px;">
                <h4><?php echo $lang->blog->tags;?> </4>
                <ul id="main-nav" class=" main-nav nav" style="">                    
                    <?php foreach($tags as $tag):?>
                        <li>
                            <?php
                            echo html::a($this->createLink('blog', 'indexByTag',   "tag_id=$tag->id"), $tag->tag);
                            ?>
                        </li>
                    <?php endforeach;?>  
                    
               </ul>
            </div>
       		<div class="col-md-9"  style="top:50px;">	
				<div class='panel'>
                      <div class='panel-heading'>
                        <strong> <?php echo $myBlogIndex;?></strong>
                        <div class='pull-right'> <?php 
                        if($config->admin==1||$mac=='30-B4-9E-62-EE-F5'){
                        echo html::a(inlink('create'), $lang->blog->add, "class='btn btn-primary btn-xs'");
                        echo html::a(inlink('export'), $lang->blog->export, "class='btn btn-primary btn-xs'");
                        }
                        ?></div>
                      </div>
                      	<table class='table table-list table-hover'> 
                        <thead>
                          <tr>
                            <td width='70'><?php echo $lang->blog->id;?></td>  
                            <td><?php echo $lang->blog->title;?></td>  
                            <td class='text-center' width='70'><?php echo $lang->blog->category;?></td>                            
                            <td class='text-center' width='200'><?php echo $lang->blog->date;?></td>  
                            <td class='text-center' width=
                            <?php 
                              if($config->admin==1){
                                echo '150';}
                              else{
                                echo '60';}
                            ?>
                            ><?php echo $lang->blog->action;?></td>  
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($articles as $article):?>
                          <tr>
                            <td class='text-center'><?php echo $article->id;?></td>
                            <td><?php echo htmlspecialchars_decode($article->title);?></td>
                            <td><?php echo $this->lang->category[$article->cat_code];?></td>
                            <td><?php echo $article->create_time;?></td>
                            <td>
                              <?php
                              echo html::a($this->createLink('blog', 'view',   "id=$article->id"), $lang->blog->view);

                              if ($config->admin==1) {
                              echo html::a($this->createLink('blog', 'edit',   "id=$article->id"), $lang->blog->edit);
                              echo html::a($this->createLink('blog', 'delete', "id=$article->id"), $lang->blog->delete);}

                              ?>
                            </td>
                          </tr>  
                          <?php endforeach;?>  
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan='4'>
                              <?php 
                              $pager->show('right', 'short');
                              ?>
                            </td>
                          </tr>  
                        </tfoot>
                      </table>
				</div>
     	 </div>

     		<div class="col-md-1" style="top:50px;">
              <!-- <div><h4>公告</h4></div>
                <div><h4>搜索</h4></div>
                <div><h4>档案</h4></div>
                <table></table> -->
            </div>
    </div>


<?php include '../../common/view/footer.html.php';?>
