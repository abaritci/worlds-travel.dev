<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Nur Travel',
        'theme'=>'egret',

	//'preload' => array('log', 'bootstrap'),
        'import' => array(
            'application.models.*',
            'application.components.*',
        ),

        'modules' => array(
                'gii' => array(
                    'class' => 'system.gii.GiiModule',
                    'password' => '1',
                    'ipFilters' => array('127.0.0.1', '::1'),
                ),
            ),

	'defaultController'=>'site',

	// application components
	'components'=>array(
              /* 'bootstrap' => array(
                                'class' => 'application.extensions.bootstrap.components.Bootstrap',
                            ),*/
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
            /*
		'db'=>array(
			'connectionString' => 'sqlite:protected/data/blog.db',
			'tablePrefix' => 'tbl_',
		),
              */
             
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=nurtravel',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => '',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
                        'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);