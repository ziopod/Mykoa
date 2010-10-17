<?php defined('SYSPATH') or die ('No direct script access');
/**
 * MsgBoard. Is a Simple Message Board application for Kohana  
 * Model for MsgBoard, work with [Controller_MsgBoard]
 *
 * @package    MsgBoard
 * @category   Model
 * @author     Ziopod | ziopod@gmail.com
 * @copyright  (c) 2010 Ziopod
 * @license    http://creativecommons.org/licenses/by-sa/2.0/
 */
 

class Model_MsgBoard extends Kohana_Model
{
	/**
	* Get the lasts messages
	* @return ARRAY query result
	*/
	
	function getLastMsg($limit)
	{
		try
		{
			return DB::select()
				->from('mb_msgs')
				->order_by('published', 'desc')
				->limit($limit)
				->offset(0)
				->execute()->as_array();
		}
		catch (Database_Exception $e)
		{
			echo $e->getMessage();
		}
		
	}
}
?>