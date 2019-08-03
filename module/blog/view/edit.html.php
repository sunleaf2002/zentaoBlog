<?php
/**
 * The html template file of edit method of blog module of ZenTaoPHP.
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
    <div class='panel-heading'><strong><?php echo $lang->blog->edit;?></strong></div>
    <form method='post'>
      <table class='table table-borderless table-form'>
        <tr>
          <th style='width:80px'><?php echo $lang->blog->title;?></th>  
          <td><?php echo html::input('title', htmlspecialchars_decode($article->title), "class='form-control'");?></td>
        </tr>  
        <tr>
          <th><?php echo $lang->blog->content;?></th>  
          <td>
                <script id="content" name="content" type="text/plain">
                    <?php echo htmlspecialchars_decode($article->content);?>
                </script>
            </td> 
        </tr>
        <tr>
          <th><?php echo $lang->blog->category;?></th>  
          <td> <?php echo html::select('cat_code', $lang->category, $article->cat_code, "class='form-control'");?></td>
        </tr>
         <tr>
          <th style='width:80px'><?php echo $lang->blog->tag;?></th>  
        	 <td> 					        					       
                         <?php  					    
                         $tag_arr=array();
 					       foreach($tags as $key => $value)
 					       {
 					           $tag_arr[$key]= $value->tag; 					         
 					       }
  					       $check_arr=array();
  					       // echo "<script>console.log(".json_encode($selecTagIds).")</script>";
  					       foreach($selectTagIds as $key => $value)
  					       {
  					           $check_arr[$key]= (int)$value->tag_id -1 ;
  					       }
 					       echo html::checkbox('tag_id', $tag_arr,$check_arr);   
 					     //echo "<script>console.log(".json_encode($check_arr).")</script>";
 					       ?>
 					     
			</td>
        </tr>

        <!--<tr>
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
         <script type="text/javascript">
        var ue = UE.getEditor('content');
        ue.setHeight(100);
        ue.setWidth(300);
        </script>
    
<?php include '../../common/view/footer.html.php';?>
