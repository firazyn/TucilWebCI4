<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('header_footer/home_header');
		return view('home');
		echo view('header_footer/footer');
	}
	public function admin() {
		echo view('header_footer/admin_header');
		return view('admin');
		echo view('header_footer/footer');
	}
	public function about() {
		echo view('header_footer/home_header');
		return view('about');
		echo view('header_footer/footer');
	}
	public function bio() {
		echo view('header_footer/home_header');
		return view('biodata');
		echo view('header_footer/footer');
    }
}
