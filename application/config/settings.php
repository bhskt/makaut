<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| Visit: https://github.com/thomaspark/bootswatch/ For Available Themes
*/
$config['theme'] = 'spacelab';

/*
| Static Content
*/
$config['logo'] = '//placehold.it/150x150';

$config['headings'] = array(
	'large' => array(
		'Maulana Abul Kalam Azad University of Technology',
		'West Bengal'
	),
	'small' => 'Formerly, West Bengal University of Technology'
);

$config['navigation'] = array(
	'top' => array(
		'external' => array(
			'Examinations & Results' => '//wbutech.net/',
			'Library' => '#',
			'WBJEEB' => '//wbjeeb.nic.in/',
			'NPTEL' => '//nptel.ac.in/',
			'UGC INFONET DLC' => '//inflibnet.ac.in/econ/',
		),
		'webMail' => '#'
	),
	'middle' => array(
		'About MAKAUT' => array(
			'Accreditations',
			'Campus',
			'Facts & History',
			'Vision & Mission'
		),
		'Administration' => array(
			'Executive Council',
			'Vice Chancellor',
			'Pro Vice Chancellor',
			'Registrar',
			'Finance Officer',
			'Controller of Examinations',
			'Training & Placement Officer',
		),
		'Affiliation' => array(
			'Affiliated Government Engineering Colleges',
			'Affiliated Self-Financed Institutions'
		),
		'In-House Departments' => array(
			'Computer Science & Engineering',
			'Information Technology',
			'Industrial Engineering & Management',
			'Biotechnology',
			'Bioinformatics',
			'Management',
			'Natural Sciences',
		),
		'Academics' => array(
			'Academic Calendar',
			'Curriculum',
			'Central Laboratories',
			'Central Library',
		),
		'Students' => array(
			'Anti-Ragging Cell',
			'List of Holidays',
		)
	),
	'side' => array(
		array(
			'heading' => null,
			'list' => array(
				'!Circulars for Affiliated Colleges',
				'!General Notices & Events',
				'!Jobs & Tenders'
			)
		),
		array(
			'heading' => 'Information',
			'list' => array(
				'Collaborations',
				'List of In-House Faculties',
				'List of Officers & Non-Teaching Staff',
				'NAAC Self-Study Report',
				'Right to Information Act, 2005',
				'Scholarships & Financial Assistance',
				'TEQIP',
				'Telephone & Email Directory'
			)
		),
		array(
			'heading' => 'MAKAUT In-House',
			'list' => array(
				'Courses Offered & Fee Structure',
				'Alumni Network',
				'Training & Placement',
				'!Noticeboard'
			)
		)
	)
);

$config['carousel'] = array(
	'id' => 'carouselHome',
	'data' => array(
		'Abc' => '//placehold.it/800x450',
		'Def' => '//placehold.it/800x450',
		'Ghi' => '//placehold.it/800x450',
		'Jkl' => '//placehold.it/800x450'
	)
);

?>