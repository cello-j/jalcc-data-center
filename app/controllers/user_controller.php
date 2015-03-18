<?php
class UserController extends AppController
{
	public function login()
	{
		$this->set(get_defined_vars());
	}
	
	public function view()
	{
		$userlist = User::getAllUser();
		$this->set(get_defined_vars());
	}
}