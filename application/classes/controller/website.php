<?php defined('SYSPATH') or die ('No direct script access');

abstract class Controller_Website extends Controller_Template
{
	public $template = 'templates/default';
	protected $titles = array(
		'home' => "Accueil"
	);
	
		
	public function before()
	{
		parent::before();
		
		if ($this->auto_render)
		{
			$this->template->content = '';
			$this->template->styles = array();
			$this->template->scripts = array();
		}
	}
	
	public function after()
	{
		if ($this->auto_render)
		{
			// Ajout des styles et des scripts
			$styles = array(
				'media/css/style.css' => 'screen'
			);
			$scripts = array(
				'media/js/mootool.js'
			);
			$this->template->styles = array_merge($this->template->styles, $styles);
			$this->template->scripts = array_merge($this->template->scripts, $scripts);
			
			// Ajout du du titre de la page /!\ ne fonctionne pas!!
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
		}

		parent::after();
	}
	
}
?>