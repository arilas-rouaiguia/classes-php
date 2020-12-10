<?php

class userpdo
{
	private $id;
	public $login;
	public $email;
	public $firstname;
	public $lastname;

public function register($login, $password, $email, $firstname,
$lastname){}
public function connect($login, $password){}
public function disconnect(){}
public function delete(){}
public function update(){}
public function isConnected(){}
public function getAllInfos(){}
public function getLogin(){}
public function getEmail(){}
public function getFirstname(){}
public function getLastname(){}
public function refresh(){}
}