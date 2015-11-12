<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct() {
		parent::__construct();
		$data = array(
			'metas' => array(
				array(
	               'name' => 'content-type',
	               'content' => 'text/html; charset=utf-8',
	               'type' => 'equiv'
				),
				array(
					'name' => 'X-UA-Compatible',
					'content' => 'IE=edge, chrome=1',
					'type' => 'equiv'
				),
				array(
					'name' => 'description',
					'content' => ''
				),
				array(
					'name' => 'viewport',
					'content' => 'width=device-width, initial-scale=1'
				)
			),
			'links' => array(
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.5/'.
				$this->config->item('theme').
				'/bootstrap.min.css',
				'assets/panel_nav_tabs.min.css',
			)
		);
		array_push($data['links'], ENVIRONMENT === 'development'? array(
			'href' => 'assets/stylesheet.less',
			'rel' => 'stylesheet/less'
		) : 'assets/stylesheet.min.css');
		$this->load->view('html/begin', $data);
		$this->load->view('segments/header');
	}
	function __destruct() {
		$this->load->view('html/end');
	}
	public function index() {
		$this->load->view('home');
	}
}
