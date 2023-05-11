<?php

$EM_CONF['base'] = [
	'title' => 'ISSI Base',
	'description' => 'Base extension for default page template',
	'category' => 'plugin',
	'author' => 'Jan Boldis',
	'author_email' => 'j@n.boldis.info',
	'state' => 'stable',
	'clearCacheOnLoad' => true,
	'version' => '1.0.0',
	'constraints' => [
		'depends' => [
			'typo3' => '11.0.0-12.99.99',
		],
		'conflicts' => [
		],
		'suggests' => [
		]
	]
];