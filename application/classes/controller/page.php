<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Website{

	protected $titles = array(
		'home' => "Accueil"
	);

	public function action_load()
	{
		$page = $this->request->param('page', 'home');
		
		if (isset($this->titles[$page]))
		{
			$title = $this->titles[$page];
		}
		else
		{
			$title = ucfirst(str_replace('_', ' ', $page));
		}
		
		$this->template->title = $title;
		$this->template->content = View::factory('pages/'.$page)
			->render();
	}
	
} // End Static
?>