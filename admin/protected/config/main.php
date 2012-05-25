<?php
//sad
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Backend',
	'language' => 'en',
    'charset'=>'utf-8',

	// preloading 'log' component
	//'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1234',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
        'widgetFactory' => array(
            'widgets' => array(
                'CJuiAccordion'=> array(
                    'cssFile'=>false,
                ),
                 'CJuiAutoComplete' => array(
                    'cssFile'=>false,
                ),
                 'CJuiButton'=> array(
                    'cssFile'=>false,
                ),
                 'CJuiDatePicker'=> array(
                    'cssFile'=>false,
                ),
                 'CJuiDialog'=> array(
                    'cssFile'=>false,
                ),
                 'CJuiDraggable'=> array(
                    'cssFile'=>false,
                ),
                 'CJuiDroppable'=> array(
                    'cssFile'=>false,
                ),
                 'CJuiInputWidget'=> array(
                    'cssFile'=>false,
                ),
                 'CJuiProgressBar'=> array(
                    'cssFile'=>false,
                ),
                 'CJuiResizable'=> array(
                    'cssFile'=>false,
                ),
                 'CJuiSelectable'=> array(
                    'cssFile'=>false,
                ),
                 'CJuiSlider'=> array(
                    'cssFile'=>false,
                ),
                 'CJuiSliderInput'=> array(
                    'cssFile'=>false,
                ),
                 'CJuiSortable'=> array(
                    'cssFile'=>false,
                ),
                 'CJuiTabs'=> array(
                    'cssFile'=>false,
                ),
                'CJuiWidget' => array(
                    'cssFile'=>false,
                ),
            ),
        ),
		'user'=>array(
            'class' => 'WebUser',
			// enable cookie-based authentication
			'allowAutoLogin' => true,
            'loginUrl' => '/login',
		),
        'parallelize'=>array(
            'class'=>'ext.Parallelizeurl.ParallelizeUrl',
            'hosts'=>array(
                //'http://www.mocial.in.th',
            )
        ),
        /*
        'viewRenderer'=>array(
             'class'=>'ext.RazorViewRenderer',
             'fileExtension'=>'.php',
         ),
         */
        'clientScript'=>array(
            'class'=>'ext.ExtendedClientScript.ExtendedClientScript',
            'combineCss'=>false,
            'compressCss'=>false,
            'combineJs'=>false,
            'compressJs'=>false,
            'fileUrl'=>'/minified',
            'autoRefresh'=>false,
            'excludeFiles'=>array(
            )
        ),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName' => false,
			'rules'=>array(
                ''=>'site/index',
                'logout'=>'login/logout',
                'log'=>'log/index/ajax/yw0/Log_sort/datetime.desc',
			),
		),
		'cache' => array(
            'class' => 'system.caching.CApcCache',
            //'keyPrefix' => 'qc_'
        ),
        'filecache' => array(
            'class' => 'system.caching.CFileCache',
            //'keyPrefix' => 'qc_'
        ),
        'memcache' => array(
            'class' => 'system.caching.CMemCache',
            //'keyPrefix' => 'qc_'
        ),
		'db' => array(
            'connectionString' =>
            	'mysql:host=localhost;
            	dbname=vaa',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'schemaCachingDuration' => 3600,
            'nullConversion' => PDO::NULL_EMPTY_STRING,
            'enableParamLogging' => true,
            'enableProfiling' => true,
        ),
        'authManager'=>array(
            'class'=>'CDbAuthManager',
            'connectionID'=>'db',
        ),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
            //'discardOutput' => false,
        ),
		'session'=>array(
            'class' => 'CHttpSession',
            /*
            'connectionID' => 'db',
            'sessionTableName' => 'session',
            'autoCreateSessionTable'=>false,
            */
            'timeout' => '1800',
         ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
                array(
					'class'=>'ext.CSSlowLogRoute',
					'logSlow'=>2,
					'logFrequent'=>2
				),
				//array(
				//	'class'=>'CFileLogRoute',
				//	'levels'=>'error, warning',
				//),
				// uncomment the following to show log messages on web pages
				
                
				array(
					'class'=>'CWebLogRoute',
				),
                
                array(
                    'class'=>'CProfileLogRoute',
                ),
                
				
			),
		),
		'sendmail' => array(
            'class' => 'application.extensions.mailer.EMailer',
			'pathViews' => 'application.views.email',
      		'pathLayouts' => 'application.views.email.layouts',
            'Mailer'=>'sendmail',
            'From' => "noreply@gurusquare1.com",//email
            'FromName' => "VAA Admin",
        ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		/* CMS config */
		'serviceUrl'=>'http://210.4.156.23/ACCS-VAA/MessageBroker?wsdl',
		'salt'=>'#$%@@%^',
		'log'=>true,
	),
);