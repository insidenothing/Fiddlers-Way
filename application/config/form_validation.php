<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$config = array(
	'user/edit' => array(
array(
		'field' => 'phone',
		'label' => 'Phone Number',
		'rules' => 'required|alpha_dash'
),
array(
		'field' => 'name',
		'label' => 'Profile Name',
		'rules' => 'required'
),
array(
		'field' => 'password',
		'label' => 'Password',
		'rules' => 'matches[passconf]|min_length[4]|max_length[18]|alpha_numeric|callback_badword_check'
)
),
array(
		'field' => 'passconf',
		'label' => 'Password Confirmation',
		'rules' => 'min_length[4]|max_length[18]|alpha_numeric|callback_badword_check'
),
	'login' => array(
array(
		'field' => 'email',
		'label' => 'Email',
		'rules' => 'required|valid_email'
),
array(
		'field' => 'password',
		'label' => 'Password',
		'rules' => 'required|min_length[3]|max_length[18]|alpha_numeric|callback_badword_check'
)
),
	'user/new_user' => array(
array(
		'field' => 'email',
		'label' => 'Email',
		'rules' => 'required|valid_email'
)
),
	'reset' => array(
array(
		'field' => 'email',
		'label' => 'Email',
		'rules' => 'required|valid_email'
)
),
	'upload' => array(
array(
		'field' => 'product',
		'label' => 'Service Type',
		'rules' => 'required'
),
array(
		'field' => 'client_file',
		'label' => 'Client File Number',
		'rules' => 'required|alpha_dash'
)
)
);

