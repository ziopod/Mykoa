<?php defined('SYSPATH') or die ('No direct script access');

class Model_User extends Kohana_Model
{

	// Rules
	protected $_rules = array(
		'username' => array('not_empty' => array()),
		'email' => array('not_empty' => array(), 'email' => array()),
		'password' => array('not_empty' => array()),
	);

	// Filters
	protected $_filters = array(
		TRUE => array('trim' => array()),
		'username' => array('stripslashes' => array()),
	);

	// Callbacks
	protected $_callbacks = array(
		'username' => array('unique'),
		'email' => array('unique'),
	);
	
	// Define callbacks
	public function unique(Validate $data, $field)
	{
		// Fonctions logique à créer
	}
	
/*	public function validate_create(& $array)
	{
		// Rules & filters
		$array = Validate::factory($array)
			->rules('password', $this->_rules['password'])
			->rules('username', $this->_rules['username'])
			->rules('email', $this->_rules['email'])
			->rules('password_confirm', $this->_rules['password_confirm'])
			->filter('username', 'trim')
			->filter('email', 'trim')
			->filter('password', 'trim')
			->filter('password_confirm', 'trim');
			
		// Callbacks
		foreach ($this->_callbacks['username'] as $callback)
		{
			$array->callback('username', array($this, $callback));
		}
		
		foreach ($this->_callbacks['email'] as $callback)
		{
			$array->callback('email', array($this, $callback));
		}
		
		return $array;
	}*/
}