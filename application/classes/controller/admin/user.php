<?php defined('SYSPATH') or die ('No direct script access');

class Controller_Admin_User extends Controller_Admin
{

	public function action_register()
	{
		if (Auth::instance()->logged_in())
		{
			Request::instance()->redirect('account/myaccount');
		}
		
		$content = $this->template->content = View::factory('register');
		
		if ($_POST)
		{
			$user = ORM::factory('user');
			
			if ($user->values($_POST)->check())
			{
				$user->save();
				// Add role
				$user->add('roles', Model_Role(array('name' => 'login')));
				// Sign the user in
				Auth::instance()->login($user->username, $_POST['password']);
				// Redirect
				Request::instance()->redirect('account/myaccount');
			}
			
		}
	}
	
	public function action_login()
	{
		if (Auth::instance()->logged_in())
		{
			Request::instance()->redirect('account/myaccount');
		}
		
		$content = $this->template->content = View::factory('login');
		
		if ($_POST)
		{
			if (ORM::factory('user')->login($_POST))
			{
				Request::instance()->redirect('account/myaccount');
			}
			else
			{
				$content->errors = $_POST->errors('login');
			}
		}
		
 /* 		$this->template->content = View::factory('auth/login')
  			->bind('user', $user)
  			->bind('errors', $errors);
 */ 	}
	
	public function action_logout()
	{
		Auth::instance()->logout();
		Request::instance()->redirect('account/myaccount');
	}

}