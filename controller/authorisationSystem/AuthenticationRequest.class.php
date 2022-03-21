<?php

class AuthenticationRequest
{
	private $login;
	private $password;


	public function __construct($login,$paswd)
	{
		$this->login=$login;
		$this->password=$paswd;
	}


	/**
	 * isRegistred	: check the users list for the 'login' and 'password' given by the user
	 */
	private function isRegistered()
	{
		$data=NULL;

		// check if the 'login' is stored in the 'users_list' table and get the password in $data
		include_once(dirname(__FILE__,3).'/model/authorisationSystem/checkRegister.php');

		// if the login is stored in the table...
		if (!isset($data['password']))
		{
			return false;
		}
		// ...check the validity of the password
		if (password_verify($this->password,$data['password']))
		{
			return $data['ID'];
		}
		else
		{
			return 0;
		}
	}


	/**
	 * authenticate	: if the user has given a registered login and its associated password, it
	 *				: creates a logged session
	 */
	public function authenticate()
	{
		$service=$_SESSION['service'];
		$user_id = $this->isRegistered();
		if ($user_id > 0)
		{
			$_SESSION['login'] = $this->login;
			$_SESSION['user_id'] = $user_id;
			$_SESSION['msg'] = NULL;

			$url = $_SESSION['index'];
			$url .= '/controller/frontalController.php?from=';
			$url .= $service;
			header('Location:'.$url);
		}
		else
		{
			throw new InvalidPassword($service);
		}
	}
}
