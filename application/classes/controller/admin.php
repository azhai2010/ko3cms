<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller {
     
        private  $template= null;

        public function before()
        {
            $this->template = View::factory('media/themes/admin/mods/index');
            $this->template->csspath ='media/themes/admin/';
            $this->template->post_list_as_div = '';
            $this->template->smart_title =  cms::factory()->smart_title();
            $this->template->mainmenu_as_ul = cms::factory()->mainmenu_as_ul();          
               
        }
        
	public function action_index()
	{  
                parent::before();
                $this->template->context= '999222ok';
                parent::after();
	}

        public function after()
	{
		$this->request->response = $this->template;
	}

} // End Welcome
