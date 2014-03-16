<?php

defined('APP_CONFIG_NAME') or define('APP_CONFIG_NAME', 'console');

return array(
	'basePath' => realPath(__DIR__ . '/..'),
	'commandMap' => array(
		'migrate' => array(
			'class' => 'system.cli.commands.MigrateCommand',
			'migrationPath' => 'application.migrations'
		)
	)
);