<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Codebench — A benchmarking module.
 *
 * @package    Kohana
 * @author     Kohana Team
 * @copyright  (c) 2009 Kohana Team
 * @license    http://kohanaphp.com/license.html
 */
abstract class Kohana_Cms {

	/**
	 * @var  string  Some optional explanatory comments about the benchmark file.
	 *               HTML allowed. URLs will be converted to links automatically.
	 */
	public $description = '';

	public static function factory()
        {
            return new Cms();
        }

        //保存到html
        public static function save_html($uri, $content)
        {
          if ($uri == '/') {
            file_put_contents(DOCROOT . 'index.html', $content);
          } else {
            $file = DOCROOT. $uri . '.html';
            $directory = dirname($file);
            if (!is_dir($directory)) {
                mkdir($directory, 0777, True);
            }
            file_put_contents($file, $content);
          }
        }

        
        public static function smart_title()
        {
            return 'this is my CMS';
        }

        public function mainmenu_as_ul()
        {
            return array(
                       array('name'=>'首页','url'=>'/'),
                       array('name'=>'共湖','url'=>'#2'),
                );
        }

	/**
	 * Constructor.
	 *
	 * @return  void
	 */
	public function __construct()
	{
		// Set the maximum execution time

	}



	
}
