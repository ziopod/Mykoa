<?php defined('SYSPATH') or die ('No direct script access');

abstract class Controller_Admin extends Controller_Template
{
	protected $_user; // Currently logged in user
	public $template = 'templates/admin';
	protected $title = array(
		'dashboard' => 'Tableau de bord'
	);
	public $auth_required = array('login', 'admin');
	public $secure_actions = array();	
	
	public function before()
	{
		parent::before();
		
		// Authentification
		$this->session = Session::instance();
		$action_name = Request::instance()->action;
		
		if (
			   (Auth::instance()->logged_in($this->auth_required) === FALSE)
			|| (array_key_exists($action_name, $this->secure_actions) && Auth::instance()->logged_in($this->secure_actions[$action_name]) === FALSE)
			)
		{
			if (Auth::instance()->loged_in())
			{
//				Request::instance()->redirect('account/noacces');
				echo 'no access';
			}
			else
			{
				Request::instance()->redirect('user/login');
			}
		}
		
				
		if ($this->auto_render)
		{
			$this->template->content = '';
			$this->template->styles = array();
			$this->template->scripts = array();
			echo "—contrôle de l'authentification—";
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
		}
		
		parent::after();
//		cookie::delete('message');
	}
}?>