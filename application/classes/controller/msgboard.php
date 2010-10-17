<?php defined('SYSPATH') or die('No direct script access.');
/**
 * MsgBoard. Is a Simple Message Board application for Kohana
 *
 * @package    MsgBoard
 * @category   Interface
 * @author     Ziopod | ziopod@gmail.com
 * @copyright  (c) 2010 Ziopod
 * @license    http://creativecommons.org/licenses/by-sa/2.0/
 */
 
class Controller_MsgBoard extends Controller
{
	/**
	 * Test de compatibilité des méthodes avec les requêtes
	 */
	 
 	function action_index()
 	{
 		$this->request->response = Request::factory('msgboard/getmsgs/')->execute()->response;
 	}
 	
 	/**
 	* Show the lasts messages
 	*
 	* @param   integer  Number of messages to show
 	* @return  array    Messages
 	*/
 	
 	function action_getmsgs($limit = 10)
 	{
 		$mb_model = new Model_MsgBoard();
 		$msgboard['msgs'] = $mb_model->getLastMsg($limit);
		$this->request->response = View::factory('msgboard/getmsg', $msgboard); 	
 	}
}

?>