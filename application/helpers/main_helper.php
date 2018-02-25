<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function config($item) {
	$CI =& get_instance();
	return $CI->config->item($item);
}

function js($file) {
	return base_url()."js/".$file.".js".config("REVISION_JS");
}

function css($file) {
	return base_url()."css/".$file.".css".config("REVISION_CSS");
}

function img($file) {
	return base_url()."img/".$file;
}

function lib($file_path, $type) {
	return base_url()."lib/".$file_path.".".$type;
}
