<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function toUrl($text) {
	return site_url(preg_replace('/\s+/', '_', trim(preg_replace('/[^a-z_]/', ' ', strtolower($text)))));
}

?>