<?php defined('SYSPATH') or die ('No direct script access');

class Controller_Admin_Dashboard extends Controller_Admin
{
	public function action_index()
	{
		$this->template->title = 'Dashboard';
		$this->template->content = View::factory('admin/dashboard')
			->render();
	}
	
}?>