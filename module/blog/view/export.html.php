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
    <div class='panel-heading'><strong><?php echo $lang->blog->exprot;?></strong></div>
    
    <form method='post'>

      <div class="col-md-9"  style="top:50px;">
          <table class='table table-list table-hover'>
            <thead>
            <tr>
              <td width='70'><?php echo $lang->blog->exprot;?></td>
            </tr>
            </thead>
            <tbody>
            <?php foreach($files as $file):?>
              <tr>
                <td><?php echo $file;?></td>
                <td><?php echo  html::a(inlink(substr($file,0,strlen($file)-5)),  $lang->blog->view, "class='btn btn-primary btn-xs'");?></td>
              </tr>
            <?php endforeach;?>
            </tbody>
          </table>
        </div>


      <?php echo html::backButton();
      // echo html::submitButton();
      ?>
    </form>
  </div>
</div>


    

<?php include '../../common/view/footer.html.php';?>
