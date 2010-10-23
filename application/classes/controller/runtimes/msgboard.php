<?php defined('SYSPATH') or die('No direct script access.');
/**
 * MsgBoard. Is a Simple Message Board application for Kohana
 * A place for "bavarder : babiller, bagouler, baratiner, bavasser, baver, blaguer, bonimenter, broder, cailleter, cancaner, caqueter, causer, clabauder, coasser, colporter, commérer, converser, débiner, débiter, déblatérer, dégoiser, deviser, dire, discourir, discuter, échanger, jaboter, jabouiner, jacasser, jacter, jaser, jaspiller, jaspiner, lantiponner, palabrer, papoter, parler, parloter, potiner, publier, raconter, répandre, s'abandonner, s'entretenir, tailler une bavette, verbiager."
 * @package    MsgBoard
 * @category   Interface
 * @author     Ziopod | ziopod@gmail.com
 * @copyright  (c) 2010 Ziopod
 * @license    http://creativecommons.org/licenses/by-sa/2.0/
 */
 
class Controller_Runtimes_MsgBoard extends Controller
{
 	
 	/**
 	* Show the lasts messages
 	*
 	* @param   integer  Count of messages to show
 	* @return  array    Messages
 	*/
 	function action_getmsgs($limit = 10)
 	{
 		$mb_model = new Model_MsgBoard();
 		$msgboard['msgs'] = $mb_model->getLastMsg($limit);
		$this->request->response = View::factory('auth/login', $msgboard); 	
 	}
 	
 	/**
 	* Add or Update message
 	*
 	* @param  integer  Id message
 	* @return boolean  Success
 	*/
 	function editmsg($id = NULL)
 	{
 	}
 	
 	/**
 	* Delete message
 	*
 	* @param   integer  Id message
 	* @retun   boolean  Success
 	*/
 	function delmsg($id = NULL)
 	{
 	}
 	
 	
 	/**
 	* Show message comments
 	*
 	* @param   interger   Id message
 	* @param   interger   Count of comment to show (NULL for all comments)
 	* @return  boolean    Success
 	*/
 	function getcomments($msg_id = NULL, $limit = NULL)
 	{
 	}
 	
 	function editcomment($id = NULL)
 	{
 	
 	}
 	
 	function delcomment($id = NULL)
 	{
 	}
 	
 	/**
 	* Spam checker
 	*
 	* @param  text      Text to check. If value is null return true
 	* @param  integer   User id
 	* @return integer   Score [0-100]
 	*/
 	function spamcheck($content = NULL, $userid = NULL)
 	{
 		/* Utiliser un module Kohana */
 		/* Si le score atteint 100, noter l'utilisateur comme spammeur (sauf si celui-ci est enregistré)*/
 	}
 	
 	/*
 	Gestion des utilisateur
 	Lv1 N'importe qui peut écrire/modifier/supprimer ses messages (Session cookie/ip/pseudo/email/url de 48h)
 	LV2 L'utilisateur est enregisté (sur invitation) et peut s'authentifier (Session serveur Classic ou Openid)
 	*/
}

?>