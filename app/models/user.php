<?php
class User extends AppModel
{
	public function loginAuth()
	{
		$db = DB::conn();
		$row = $db->row('SELECT * From user WHERE username = ? AND password = ?',
				array($this->username, md5($this->password))
		);
		return $row;
	}

	public static function getAllUser()
	{
		$users = array();
		$db = DB::conn();
		$rows = $db->rows('SELECT * FROM user');
		foreach ($rows as $row)
		{
			$users[] = new User($row);
		}
		return $users;
	}
}