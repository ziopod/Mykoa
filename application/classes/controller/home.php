<?php defined('SYSPATH') or die ('No direct script access');

class Controller_Home extends Controller_Website
{
	
	function action_index()
	{
 		$this->template->content = Request::factory('runtimes/msgboard/getmsgs/')->execute()->response;
	}
}
?>