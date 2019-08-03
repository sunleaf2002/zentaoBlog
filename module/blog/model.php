<?php
/**
 * The model file of blog module of ZenTaoPHP.
 *
 * The author disclaims copyright to this source code.  In place of
 * a legal notice, here is a blessing:
 * 
 *  May you do good and not evil.
 *  May you find forgiveness for yourself and forgive others.
 *  May you share freely, never taking more than you give.
 */
?>
<?php
class blogModel extends model
{
    /**
     * Get article lists.
     * 
     * @access public
     * @return array
     */
    public function getList($pager = null)
    {
        return $this->dao->select('*')->from('v_blog')->orderBy('id desc')->page($pager)->fetchAll();
        //$sql_str="select * from v_blog  order by create_time desc";
        //return $this->dao->query($sql_str);
    }

    /**
     * Get an article.
     * 
     * @param  int    $id 
     * @access public
     * @return object
     */
    public function getById($id)
    {
        return $this->dao->findById($id)->from('v_blog')->fetch();
    }

    /**
     * Create an article.
     * 
     * @access public
     * @return void
     */
    public function create()
    {
        //开始一个事务
        //$article = fixer::input('post')->remove('tag_id')->add('date', date('Y-m-d H:i:s'))->get();
        //$article = fixer::input('post')->specialchars('title, content,cat_code,tag_id')->remove('tag_id')->add('date', date('Y-m-d H:i:s'))->get();
//$article = fixer::input('post')->specialchars('title, cat_code,tag_id')->remove('tag_id')->add('date', date('Y-m-d H:i:s'))->get();
$article = fixer::input('post')->specialchars('title, cat_code,tag_id')->remove('tag_id')->get();
$article->content=htmlspecialchars($_POST['content']);
        $this->dao->begin();
        $this->dao->insert('blog')->data($article)->autoCheck()->batchCheck('title,content,cat_code', 'notempty')->exec();
        
        $lastBlogId=$this->dao->lastInsertID();

        $tag_ids=fixer::input('post')->specialchars('title, content,cat_code,tag_id')->get('tag_id') ;       
        foreach (  $tag_ids as $eachTag){
            $data          = new stdclass();
            $data->blog_id=$lastBlogId;
            $data->tag_id=(int)$eachTag+1;  
           // $data->date=date('Y-m-d H:i:s');
           // echo  "<script>alert('".$data->tag_id."')</script>";
            $this->dao->insert('blog_tag_relation')->data($data)->autoCheck()->batchCheck('blog_id,tag_id', 'notempty')->exec();    
        }
        
        $this->dao->commit();
        return $lastBlogId;
    }

    /**
     * Update an article.
     * 
     * @param  int    $articleID 
     * @access public
     * @return void
     */
    public function update($articleID)
    {
        //开始一个事务
        //$article = fixer::input('post')->remove('tag_id')->get();

        //$article->content = html_entity_decode($article->content);
        //var_dump($article);

       // $article = fixer::input('post')->specialchars('title, content,cat_code,tag_id')->remove('tag_id')->get();
        $article = fixer::input('post')->specialchars('title, cat_code,tag_id')->remove('tag_id')->get();
        $article->content = htmlspecialchars($_POST['content']);
        $article->update_time = date('Y-m-d H:i:s');
        $this->dao->begin();
        $this->dao->update('blog')->data($article)->where('id')->eq($articleID)->exec();
        
        $this->dao->delete()->from('blog_tag_relation')->where('blog_id')->eq($articleID)->exec();
        $tag_ids=fixer::input('post')->specialchars('title, content,cat_code,tag_id')->get('tag_id') ;
        foreach (  $tag_ids as $eachTag){
            $data          = new stdclass();
            $data->blog_id=$articleID;
            $data->tag_id=(int)$eachTag+1;
          //  $data->date=date('Y-m-d H:i:s');
            // echo  "<script>alert('".$data->tag_id."')</script>";
            $this->dao->insert('blog_tag_relation')->data($data)->autoCheck()->batchCheck('blog_id,tag_id', 'notempty')->exec();
        }
        $this->dao->commit();
    }

    /**
     * Delete an article.
     * 
     * @param  int     $id 
     * @param  null    $table 
     * @access public
     * @return void
     */
    public function delete($id, $table = null)
    {
        $this->dao->begin();
        //true del
        //$this->dao->delete()->from('blog')->where('id')->eq($id)->exec();
        //$this->dao->delete()->from('blog_tag_relation')->where('blog_id')->eq($id)->exec();
        //update instead for del
        $article->is_delete = 1;
        $this->dao->update('blog')->data($article)->where('id')->eq($id)->exec();
        $this->dao->commit();
    }
    
    /**
     * Get all tags.
     *
     * @access public
     * @return array
     */
    public function getTags()
    {
        return $this->dao->select('*')->from('blog_tag')->orderBy('id')->fetchAll();
    }
    
    /**
     * Get all tags name.
     *
     * @access public
     * @return array
     */
    public function getTagNames()
    {
        return $this->dao->select('id,tag')->from('blog_tag')->orderBy('id')->fetchAll();
    }
    /**
     * Get a tags name by tag_id.
     *
     * @access public
     * @return array
     */
    public function getTagNameById($id)
    {
        return $this->dao->select('tag')->from('blog_tag')->where('id')->eq($id)->fetchAll();
    }
    /**
     * Get tags name by blog_id.
     *
     * @access public
     * @return array
     */
    public function getTagNamesByBlogId($blog_id)
    {
        //$sql_str="select tag_id from blog_tag_relation  where blog_id=".$blog_id." order by id";
        return $this->dao->select('tag_id')->from('blog_tag_relation')->where('blog_id')->eq($blog_id)->orderBy('id')->fetchAll();
        //return $this->dao->query($sql_str);
    }
    /**
     * Get articles by tag.
     *
     * @access public
     * @return array
     */
   
    public function getByTag($tag_id,$pager = null)
    {
       //$sql_str="select * from v_blog_by_tag  where tag_id=".$tag_id." order by create_time desc";
        //return $this->dao->query($sql_str);
        return $this->dao->select('*')->from('v_blog_by_tag')->where('tag_id')->eq($tag_id)->orderBy('id desc')->page($pager)->fetchAll();
                
    }
    /**
     * Get articles by category.
     *
     * @access public
     * @return array
     */
    
    public function getByCategory($cat_code,$pager = null)
    {
        /*if ($cat_code=="blog"||$cat_code=="index"){
            $sql_str="select * from v_blog   order by create_time desc";
        }else{
            $sql_str="select * from v_blog  where cat_code='".$cat_code."' order by create_time desc";
        }
        return $this->dao->query($sql_str);*/
        if ($cat_code=="blog"||$cat_code=="index"){
           
            return $this->dao->select('*')->from('v_blog')->orderBy('id desc')->page($pager)->fetchAll();
        }else{
            return $this->dao->select('*')->from('v_blog')->where('cat_code')->eq($cat_code)->orderBy('id desc')->page($pager)->fetchAll();
        }

        
    }
    public function export()
    {
        $blogs = $this->dao->select('*')->from('v_blog')->orderBy('id desc')->fetchAll();
            /* Cycle the boog records to export to html files. */
        $file_array=array();
         $html_header="<!Doctype html>
            <html lang=\"zh_cn\">
                <head>
                    <meta charset=\"utf-8\"/> 
                </head>
            <body>
            ";
        $html_footer="</body>
                        </html>";
            foreach ($blogs as $blog) {
                file_put_contents("/var/www/html/zentaophp31/blog-".$blog->id.".html",$html_header.htmlspecialchars_decode($blog->content).$html_footer);
                array_push($file_array,$blog->id.".html");
            }
        return $file_array;
    }



}

