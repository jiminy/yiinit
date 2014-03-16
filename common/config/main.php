<?php

return array(
	'name' => '{APPLICATION NAME}',
	'preload' => array('log'),
	'aliases' => array(
		'frontend' => dirname(__FILE__) . '/../..' . '/frontend',
		'common' => dirname(__FILE__) . '/../..' . '/common',
		'console' => dirname(__FILE__) . '/../..' . '/console',
		'backend' => dirname(__FILE__) . '/../..' . '/backend',
		'api' => dirname(__FILE__) . '/../..' . '/api',
		'vendor' => dirname(__FILE__) . '/../..' . '/common/lib/vendor'
	),
	'import' => array(
		'common.components.*',
		'common.models.*',
		'application.controllers.*',
		'application.models.*',
	),
	'components' => array(
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		'errorHandler' => array(
			'errorAction' => 'site/error',
		),
	),
	// application parameters
	'params' => array(
		// php configuration
		'php.defaultCharset' => 'utf-8',
		'php.timezone'       => 'UTC',
	),
);
