<?php 

namespace controller;

use app\Controller;
use app\View;
/**
* 
*/
class SiteController extends Controller
{
	
	public function actionindex()
	{
		$namaku = 'Dian';
		View::render('utama',['nama'=>$namaku]);
	}
}
