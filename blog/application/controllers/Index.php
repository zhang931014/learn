<?php
/**
 * User: lidc
 * 首页
 */
class Controller_Index extends Blog_Web
{
    protected $layout = 'index';
    protected $article;
    protected $size = 10;


    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        $this->article = new Model_Article();
    }

    public function IndexAction()
    {
        $page = $this->_request->getQuery('page');
        $p = isset($page) ? $page :1;
        $list = $this->article->artListAll('',$p,$this->size);
        $pages = new Component_SubPages(10, $list['count'], $p, 10, "?page=", 'front');
        $this->assign('page', $pages);
        $this->assign('list', $list['list']);
        $this -> display("index/index");
    }

    /**
     *慢生活首页
     * */
    public function LifeAction()
    {
        $this->display('index/life');
    }

    public function LoginAction()
    {
        $this->display('index/login');
    }

    /**
     * 留言板
     * */
    public function BookAction()
    {
        $this->display('index/book');
    }


    /**
     *学无止境
     * */
    public function KnowledgeAction()
    {
        $this->display('index/knowledge');
    }

    /**
     *关于我
     * */
    public function  AboutAction()
    {
        $this->display('index/about');
    }

    public function yzmAction()
    {
        getCodeChar(4, 60, 20);
    }

}