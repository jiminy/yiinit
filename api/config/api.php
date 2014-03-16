<?php

return array(
	'basePath' => realPath(__DIR__ . '/..'),
	'components' => array(
		'urlManager' => array(
			'urlFormat' => 'path',
			'showScriptName' => false,
			'rules' => array(
				// REST patterns
				array('<controller>/index', 	'pattern' => 'api/<controller:\w+>', 		'verb' => 'POST'),
				array('<controller>/view', 		'pattern' => 'api/<controller:\w+>/view', 	'verb' => 'POST'),
				array('<controller>/update', 	'pattern' => 'api/<controller:\w+>/update', 'verb' => 'PUT'),
				array('<controller>/delete', 	'pattern' => 'api/<controller:\w+>/delete', 'verb' => 'DELETE'),
				array('<controller>/create', 	'pattern' => 'api/<controller:\w+>/create', 'verb' => 'POST'),
			),
		)
	)
);