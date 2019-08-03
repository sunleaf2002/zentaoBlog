<?php
/**
 * The html template file of add method of blog module of ZenTaoPHP.
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
  <div class='panel'>
    <div class='panel-heading'><strong><?php echo $lang->blog->add;?></strong></div>
    
    <form method='post'>
      <table class='table table-borderless table-form' align='center'>
        <tr>
          <th style='width:80px'><?php echo $lang->blog->title;?></th>  
          <td><?php echo html::input('title', '', "class=form-control");?></td>
        </tr>
       <tr>
          <th><?php echo $lang->blog->content;?></th>  
          <!--    <td><?php echo html::textarea('content', '', "class='form-control' cols='50' rows='10'");?></td>-->        
        
            <td>
                <script id="content" name="content" type="text/plain">
            
                </script>
            </td>
        </tr>
        <tr>
          <th style='width:80px'><?php echo $lang->blog->category;?></th>  
          <td> <?php 
         // var_dump( $lang->category);
          echo html::select('cat_code', $lang->category, 'dev', "class='form-control'");?></td>
        </tr>
        <tr>
          <th style='width:80px'><?php echo $lang->blog->tag;?></th>  
        	 <td> 					        					       
                         <?php 
 					     //必须将输出转为数组，手工转 
                         $tag_arr=array();
 					       foreach($tags as $key => $value)
 					       {
 					           $tag_arr[$key]= $value->tag;
 					           //$i=$i+1;
 					       }
    			        echo html::checkbox('tag_id', $tag_arr);
     					    echo "<script>console.log(".json_encode($tags).")</script>";
 					       ?>
           </td>
        </tr>
        <!--
        <tr>
            <th><?php echo $lang->blog->files;?></th>
            <td colspan='2'><?php echo html::file("blogfile");?></td>
          </tr>
        -->
        <!-- <tr >
            <th></th><th></th><th></th>
            <td><?php echo html::backButton();?></td> 
            <td><?php echo html::submitButton();  ?></td>
            <td>      </td>
        </tr>  -->
      </table>
      <?php echo html::backButton();
       echo html::submitButton();  ?>
    </form>
  </div>
</div>

   <!-- <script id="content"  type="text/plain">
        这里写你的初始化内容
    </script>-->
    <script type="text/javascript">
        var ue = UE.getEditor('content');
        ue.setHeight(100);
        ue.setWidth(300);
    </script>
    

<?php include '../../common/view/footer.html.php';?>
