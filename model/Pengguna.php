<?php

namespace model;

use app\Model;

/**
 *
 */
class Pengguna extends Model {

	public $id_user;
	public $username;
	public $password;
	public $email;

	public function ambilPengguna() {
		$query = $this->db->prepare("SELECT * FROM pengguna WHERE `username` = :namauser");
		$query->bindParam(':namauser', $this->username);
		$query->execute();
		$data = $query->fetch();
		return $data;
	}

	public function ambilSemuaPengguna() {
		$query = $this->db->prepare("SELECT * FROM pengguna");
		$query->execute();
		$data = $query->fetchAll();
		return $data;
	}
}
