<?php

return 
[

	/*
	|--------------------------------------------------------------------------
	| サブドメイン
	|--------------------------------------------------------------------------
	| 
	| 
	| 
	*/

	'subdomain' =>  '',



	/*
	|--------------------------------------------------------------------------
	| デフォルト認証方式
	|--------------------------------------------------------------------------
	| - user_pass_auth : パスワード認証
	| - api_token_auth : APIトークン
	| 
	*/

	'auth_default' => '',



	/*
	|--------------------------------------------------------------------------
	| 認証情報の設定
	|--------------------------------------------------------------------------
	|
	|
	*/

	'authentications' => [

		'user_pass' => [
				'user' => '',
				'pass' => '',
		],

		'api_token' => [
				'api_token' => '',
		],

		'basic_user_pass' => [
				'user' => '',
				'pass' => '',
		],

	],


];