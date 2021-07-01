<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard');
	}

	public function indikator()
	{
		$this->load->view('indikator');
	}
	public function tambahan()
	{
		$this->load->view('tambahan');
	}
	public function pegawai()
	{
		$this->load->view('pegawai');
	}
	public function tumbuhan()
	{
		$this->load->view('tumbuhan');
	}
	public function hewan()
	{
		$this->load->view('hewan');
	}
}
