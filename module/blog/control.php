<?php
/**
 * The control file of blog module of ZenTaoPHP.
 *
 * The author disclaims copyright to this source code.  In place of
 * a legal notice, here is a blessing:
 * 
 *  May you do good and not evil.
 *  May you find forgiveness for yourself and forgive others.
 *  May you share freely, never taking more than you give.
 */
class blog extends control
{
    /**
     * The construct function.
     * 
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->app->loadLang('index');
    }

    /**
     * The index page of blog module.
     * 
     * @access public
     * @return void
     */
    public function index($recTotal = 0, $recPerPage = 20, $pageID = 0)
    {
        $this->app->loadClass('pager');
        $pager = new pager($recTotal, $recPerPage, $pageID);

        //$this->app->loadClass('mac');
        //$mac = new mac(PHP_OS);
        

        $this->view->title    = $this->lang->blog->index;
        //var_dump("1111");
        $this->view->articles = $this->blog->getList($pager);
        //var_dump("2222");
        $this->view->myBlogIndex="所有文章";
        $this->view->tags = $this->blog->getTags();
        $this->view->pager    = $pager;
	//$this->view->mac  = $mac->macAddr;
        $this->display();
    }

    
    /**
     * The index  page by tag of blog module.
     *
     * @access public
     * @return void
     */
    public function indexByTag($tag_id,$recTotal = 0, $recPerPage = 20, $pageID = 0)
    {
        $this->app->loadClass('pager');
        $pager = new pager($recTotal, $recPerPage, $pageID);
        
        $this->view->title    = $this->lang->blog->index;        
        $this->view->articles = $this->blog->getByTag($tag_id,$pager);
        
        $tag_arr = array();
        foreach($this->blog->getTagNameById($tag_id) as $key => $value)
                           {
                               $tag_arr[$key]= $value->tag;        
                           }
        $this->view->myBlogIndex   = $this->lang->blog->tagBy.'  '.$tag_arr[0].'  '.$this->lang->blog->index;
      // echo "<script>console.log(".$this->view->articles[0]->id.")</script>";
       // echo "<script>console.log(". json_encode($this->view->articles).")</script>"; 
        $this->view->tags = $this->blog->getTags();
        $this->view->pager    = $pager;
        $this->display("blog","index");
    }
    /**
     * The index  page by category of blog module.
     *
     * @access public
     * @return void
     */
    public function indexByCategory($cat_code,$recTotal = 0, $recPerPage = 20, $pageID = 0)
    {
        $this->app->loadClass('pager');
        $pager = new pager($recTotal, $recPerPage, $pageID);    
        
        $this->view->title    = $this->lang->blog->index;

        $this->view->articles = $this->blog->getByCategory($cat_code,$pager);
       
        if ($cat_code!=="index"){
            $this->view->myBlogIndex   = $this->lang->blog->catBy.'  '.$this->lang->category["$cat_code"].'  '.$this->lang->blog->index;
        }else{
            $this->view->myBlogIndex=$this->lang->menu->index;
        }
        $this->view->tags = $this->blog->getTags();
        $this->view->pager    = $pager;
        $this->display("blog","index");
    }
    /**
     * Create an article.
     * 
     * @access public
     * @return void
     */
    public function create()
    {
        if(!empty($_POST))
        {
            $blogID = $this->blog->create();            
            if(dao::isError()) die(js::error(dao::getError()) . js::locate('back'));
            die(js::locate(inlink('index')));
            //die(js::locate(inlink('indexByCategory',array("index"))));
        }
        $this->view->title = $this->lang->blog->add;        
        $this->view->tags = $this->blog->getTagNames();    
        $this->display();
    }

   /**
     * Update an article.
     * 
     * @param  int    $id 
     * @access public
     * @return void
     */
    public function edit($id)
    {
        if(!empty($_POST))
        {
            $this->blog->update($id);
            $this->locate(inlink('index'));
            //$this->locate(inlink('indexByCategory',array("index")));
            //var_dump(inlink('index'));
        }
        else
        {
            $this->view->title   = $this->lang->blog->edit;
            $this->view->article = $this->blog->getByID($id);
            $this->view->tags = $this->blog->getTagNames();
           
            $this->view->selectTagIds = $this->blog->getTagNamesByBlogId($id);
          //  $tmp=$this->blog->getTagNamesByBlogId($id);
          //  echo "<script>console.log(".var_dump($tmp).")</script>";
            $this->display();
        }
    }

    /**
     * View an article.
     * 
     * @param  int    $id 
     * @access public
     * @return void
     */
    public function view($id)
    {
        $this->view->title   = $this->lang->blog->view;
        $this->view->article = $this->blog->getByID($id);
        $this->view->selectTagIds = $this->blog->getTagNamesByBlogId($id);
        $this->display();
    }

    /**
     * Delete an article.
     * 
     * @param  int    $id 
     * @access public
     * @return void
     */
    public function delete($id)
    {
        var_dump('1111');
        $this->blog->delete($id);
        $this->locate(inlink('index'));
    }

    /**
     * Export all articles.
     *
     * @access public
     * @return void
     */
    public function export()
    {
        $this->view->title   = $this->lang->blog->export;
        //$this->blog->export();
        $this->view->files = $this->blog->export();

        $this->display();

        //$this->locate(inlink('index'));

    }

}
