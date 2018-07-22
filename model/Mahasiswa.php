<?php 

namespace model;

use app\Model;


/**
* 
*/
class Mahasiswa extends Model
{
	public $id_mahasiswa;
	public $nama;
	public $nim;
	public $alamat;

	public function ambilSemua() {
		$query = $this->db->prepare("SELECT * FROM mahasiswa");
		$query->execute();
		$data = $query->fetchAll();
		return $data;
	}

	public function ambilTeratas() {
		$query = $this->db->prepare("SELECT * FROM mahasiswa");
		$query->execute();
		$data = $query->fetch();
		return $data;
	}

	public function tambahMahasiswa() {
		$stmt = $this->db->prepare("INSERT INTO mahasiswa (nama,nim,alamat) VALUES (:nama,:nim,:alamat)");
		$stmt->bindParam(':nama', $this->nama);
		$stmt->bindParam(':nim', $this->nim);
		$stmt->bindParam(':alamat', $this->alamat);
		$stmt->execute();
		$this->id_mahasiswa = $this->db->lastInsertId();

		return true;
	}

	public function detailMahasiswa($id) {
		$stmt = $this->db->prepare("SELECT * FROM mahasiswa WHERE id_mahasiswa = :id_mahasiswa");
		$stmt->bindParam(':id_mahasiswa', $id);
		$stmt->execute();
		$data = $stmt->fetch();
		return $data;
	}
}

