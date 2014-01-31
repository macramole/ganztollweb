<?php 
/*
 Mâgico
http://www.parleboo.com
Copyright 2012 Leandro Garber <leandrogarber@gmail.com>
Attribution-NonCommercial-ShareAlike 3.0 Unported (CC BY-NC-SA 3.0)
*/

if ( ! defined ( 'BASEPATH' ) ) exit ( 'No direct script access allowed.' );

class SiteUser {

	const LOGGED_IN = 1;
	const NOT_LOGGED_IN = 2;

	const USER_SESSION = 'usuario';
	const TIPO_ALUMNO = 1;
	const TIPO_PROFESOR = 2;

	private $ci;

	function __construct()
	{
		$this->ci =& get_instance();
	}

	function login($user, $pass, $remember = false)
	{
		$pass = md5($pass);
		$sql = "SELECT * FROM alumnos WHERE email=? AND pass=? LIMIT 1";
		$user = $this->ci->db->query($sql,array($user,$pass))->row_array();

		if ($user)
		{
			$this->setUserData(array(
					'id' => $user['id'],
					'tipo' => self::TIPO_ALUMNO,
					'nombre' => $user['nombre'],
					'apellido' => $user['apellido'],
					'email' => $user['email'],
			));
				
			$this->ci->db->query( "UPDATE alumnos SET ultimoLogin = NOW() WHERE id = ?", array($user['id']) );
				
			/*if ($remember)
			 {
			setcookie(self::AUTOLOGIN_COOKIE_NAME, base64_encode($user->user.':'.$pass), time()+60*60*24*30, '/'); //30 días
			}*/

			return self::LOGGED_IN;
		}
		else
		{
			return self::NOT_LOGGED_IN;
		}
	}

	public function setUserData($arrUser)
	{
		$_SESSION[self::USER_SESSION] = $arrUser;
	}

	public function getUserData($key = null)
	{
		if ( $this->isLogged() )
		{
			if ( $key )
				return $_SESSION[self::USER_SESSION][$key];
			else
				return $_SESSION[self::USER_SESSION];
		}
		else
			return null;
	}

	public function isLogged()
	{
		return isset($_SESSION[self::USER_SESSION]);
	}

	function cookieCheck()
	{
		/*if ( $_COOKIE[self::AUTOLOGIN_COOKIE_NAME] )
		 {
		$autoLogin = base64_decode($_COOKIE[self::AUTOLOGIN_COOKIE_NAME]);
		list($user, $pass) = explode(':',$autoLogin);
			
		$sql = "SELECT * FROM admins WHERE user=? AND password=? LIMIT 1";
		$user = $this->ci->db->query($sql,array($user,$pass))->row();

		if ($user)
		{
		$_SESSION['admin'] = 1;
		return self::LOGGED_IN;
		}
		}

		return self::NOT_LOGGED_IN;*/
	}

	function logout()
	{
		unset($_SESSION[self::USER_SESSION]);
		//setcookie(self::AUTOLOGIN_COOKIE_NAME,'',time() - 3600, '/');
	}
}
?>
