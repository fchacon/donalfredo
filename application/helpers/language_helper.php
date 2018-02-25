<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function lang($line, $replace = '') {
	$CI =& get_instance();
	$line = $CI->lang->line($line);
	return sprintf($line, $replace);
}
