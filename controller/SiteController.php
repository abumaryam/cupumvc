<?php 

namespace controller;

use app\Controller;
use app\View;
use model\Mahasiswa;
use model\Pengguna;
/**
* 
*/
class SiteController extends Controller
{
	
	public function actionIndex()
	{
	
		View::render('utama');
	}

	public function actionListmahasiswa()
	{
		$mahasiswa = new Mahasiswa();
		$data_mhs = $mahasiswa->ambilSemua();

		View::render('tampilmahasiswa',['data_mhs'=>$data_mhs]);
	}

	public function actionMahasiswadetail()
	{
		$id = $_GET['id'];
		$mahasiswa = new Mahasiswa();
		$data_mhs = $mahasiswa->detailMahasiswa($id);

		View::render('detailmahasiswa',['data_mhs'=>$data_mhs]);
	}

	public function actionTambahmahasiswa()
	{
		if ($_POST) {
			$mahasiswa = new Mahasiswa();
			$mahasiswa->nama = $_POST['nama'];
			$mahasiswa->nim = $_POST['nim'];
			$mahasiswa->alamat = $_POST['alamat'];
			$mahasiswa->tambahMahasiswa();
			header("Location: index.php?r=site/mahasiswadetail&id=".$mahasiswa->id_mahasiswa);
			die();
		}

		View::render('tambahmhs');

	}

	public function actionLogin() {

		$pesan_error = null;
		if ($_POST) {
			$user = new Pengguna();
			$user->username = $_POST['username'];
			$data_user = $user->ambilPengguna();
			if ($data_user) {
				if ($data_user['password'] === $_POST['password']) {
					$_SESSION['username'] = $data_user['username'];
					$_SESSION['status'] = 'login';
					header("Location: index.php?r=site/index", true, 301);

				} else {
					$pesan_error = 'Password Salah';
				}
			} else {
					$pesan_error = 'Data Pengguna tidak ditemukan';
			}
		}
		View::$layout = 'blank';
		View::render('loginuser', ['pesan_error' => $pesan_error]);

	}

	public function actionlogout() {
		session_destroy();
		header("Location: index.php?r=site/login");
	}
}
