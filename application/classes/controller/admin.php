<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller {
     
        private  $template= null;

        public function before()
        {
            $this->template = View::factory('media/themes/admin/template/index');
            $this->template->csspath ='media/themes/admin/';
            $this->template->logo = URL::site().'media/images/logo.gif';
            $this->template->css=array(
                    array('css'=>URL::site().'media/themes/admin/css/ui/jquery-ui.css','media'=>'screen'),
                    array('css'=>URL::site().'media/themes/admin/css/layout.css','media'=>'screen'),
                    array('css'=>URL::site().'media/themes/admin/css/ui.tabs.css','media'=>'screen'),
            );
      
             $this->template->script=array(
                    array('script'=>URL::site().'media/themes/admin/js/stuff.js'),
                    array('script'=>URL::site().'media/vendor/jquery/jquery-1.4.2.min.js'),
                    array('script'=>URL::site().'media/vendor/jquery/ui/ui.tree.js'),
            );

            $this->template->navigation = array(
                    array('url'=>URL::site().'admin/home','nav'=>'信息面板'),
                    array('url'=>URL::site().'admin/modules','nav'=>'模块管理'),
                    array('url'=>URL::site().'admin/users','nav'=>'用户管理'),
                    array('url'=>URL::site().'admin/settings','nav'=>'设置'),
            );

            $this->template->dialog='';
            $this->template->post_list_as_div = '';
            $this->template->login = 'admin | <a href="/">浏览网站</a> | <a href="/admin/logout">注销</a>';
            $this->template->smart_title =  cms::factory()->smart_title();
            $this->template->mainmenu_as_ul = cms::factory()->mainmenu_as_ul();          
               
        }
        
	public function action_index()
	{  
                parent::before();
                $this->template-> Modules = '';
                $this->template->sidebar='';
                $this->template->content= '';
                parent::after();
	}

        public function action_modules()
	{
                parent::before();
                $this->template-> Modules = '模块管理<span style="padding-left:15px;font-size:12px;">功能说明：查看或添加网站模块</small>';
                $this->template->sidebar=View::factory('media/themes/admin/template/modules/sidebar');
                $this->template->sidebar->sidebarul = array(
                    array('url'=>URL::site().'admin/modules/view','sidebar'=>'查看模块'),
                    array('url'=>URL::site().'admin/modules/add','sidebar'=>'添加模块'),
                );
                if ($this->request->param('id')==='view')
                    $this->template->content = View::factory('media/themes/admin/template/modules/view');
                else if ($this->request->param('id')==='add')
                    $this->template->content= View::factory('media/themes/admin/template/modules/add');
                else
                    $this->template->content='';

                
                parent::after();
	}



        public function after()
	{
		$this->request->response = $this->template;
	}

} // End Welcome
