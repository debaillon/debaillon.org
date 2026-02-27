<?php

//print_r($_SERVER);die();

$sitepad['db_name'] = 'debaillo_spd6350';
$sitepad['db_user'] = 'debaillo_spd6350';
$sitepad['db_pass'] = '*tH~Fi8Ax^';
$sitepad['db_host'] = 'localhost';
$sitepad['db_table_prefix'] = '3VTEqzT_';
$sitepad['charset'] = 'utf8mb4';
$sitepad['collate'] = 'utf8mb4_unicode_ci';
$sitepad['serving_url'] = 'debaillon.org';// URL without protocol but with directory as well
$sitepad['url'] = 'http://debaillon.org';
$sitepad['relativeurl'] = '';
$sitepad['.sitepad'] = '/var/www/vhosts/debaillon.org/private';
$sitepad['sitepad_plugin_path'] = '/usr/local/sitepad';
$sitepad['editor_path'] = '/var/www/vhosts/debaillon.org/private/.sitepad/editor';
$sitepad['path'] = dirname(__FILE__);
$sitepad['AUTH_KEY'] = 'ZCyAkT2OI6KMaZ9ZGBEwN2BC5NEn3ppRVyuLdZo0Ld7IE0y9nfaQRO9zk9eHuoxY';
$sitepad['SECURE_AUTH_KEY'] = 'EhgcvF16Pe0LP1hw3nsq9PTMF7fTDFrGgK465dQlCVyWX7ANSyEeYzkJCaaJCp60';
$sitepad['LOGGED_IN_KEY'] = 'XYdIYc4iI1aDsPAY7uRsBBDk4ngVed45ERC9uAonL92CuTnOjGTrBL1b5OZ75Z4e';
$sitepad['NONCE_KEY'] = 'JOszQcS8GOY6a1cytbOOF1yQvZMsmpWeVK37KevZdfTngELjHHT5MYAvrRswjFTn';
$sitepad['AUTH_SALT'] = 'p7uGmCp4kcYjzvvWOOsTpOAag9oMZ2P7weXRQ6QxJCdBQu15toqSApvWhNJX0ckE';
$sitepad['SECURE_AUTH_SALT'] = 'dty0y1rEbESi1CTU4Sb3j0ow78Mr9KtksXvAmSgg1yZ0uOVjiH7QWrPmOzhe6Mzp';
$sitepad['LOGGED_IN_SALT'] = 'CB46DVImzFBtAOAUVkumcYZvzxHvLp0hLqpEP3kFBovWAxTfbShKSeGvvW9QgG4G';
$sitepad['NONCE_SALT'] = 'qIfIaQcZ7B7uOPVvaAT060dUfvgJka8xux0efgyzmueI8uXWNafzWTLyeEPzIvHw';

if(!include_once($sitepad['editor_path'].'/site-inc/bootstrap.php')){
	die('Could not include the bootstrap.php. One of the reasons could be open_basedir restriction !');
}

