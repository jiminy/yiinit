<?php

defined('APP_CONFIG_NAME') or define('APP_CONFIG_NAME', 'backend');

return array(
	'basePath' => realPath(__DIR__ . '/..'),

	// application behaviors
	'behaviors' => array(),

	// controllers mappings
	'controllerMap' => array(),

	// application modules
	'modules' => array(),

	// application components
	'components' => array(
		'urlManager' => array(
			// uncomment the following if you have enabled Apache's Rewrite module.
			'urlFormat' => 'path',
			'showScriptName' => false,
			'rules' => array(
				// default rules
				'<controller:\w+>/<id:\d+>' 				=> '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' 	=> '<controller>/<action>',
				'<controller:\w+>/<action:\w+>'				=> '<controller>/<action>',
			),
		),
		'user' => array(
			'allowAutoLogin' => true,
		),
	),
    'params' => array(
        'assets.base' => 'backend.dist'
    ),
);