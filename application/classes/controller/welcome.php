<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {
     
        private  $template= null;


        protected function capture($kohana_view_filename)
	{
		// Import the view variables to local namespace
		//extract($kohana_view_data, EXTR_SKIP);
		// Capture the view output
		ob_start();

		try
		{
			// Load the view within the current scope
			include $kohana_view_filename;
		}
		catch (Exception $e)
		{
			// Delete the output buffer
			ob_end_clean();

			// Re-throw the exception
			throw $e;
		}

		// Get the captured output and close the buffer
		return ob_get_clean();
	}
     
	public function action_index()
	{ 
                $this->template = View::factory('themes/'.THEMES.'/index');
                $this->template->csspath =  './application/views/themes/'.THEMES.'/';
                $this->template->post_list_as_div = '';
                $this->template->smart_title =  cms::factory()->smart_title();
                $this->template->mainmenu_as_ul = cms::factory()->mainmenu_as_ul();
		$this->request->response = $this->template;
	}

} // End Welcome
