<?php
/**
 * Bootstrap index file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

require('./../../common/lib/vendor/autoload.php');

Yiinitializr\Helpers\Initializer::create('./../', 'api', array(
	__DIR__ .'/../../common/config/main.php',
	__DIR__ .'/../../common/config/env.php',
	__DIR__ .'/../../common/config/local.php'
), '\api\components\web\Application')->run();