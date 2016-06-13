<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Swagger Definitions
|--------------------------------------------------------------------------
| Example: https://github.com/zircote/swagger-php/tree/master/Examples/petstore.swagger.io/models
*/

// To avoid class naming conflicts when defining Swagger Definitions
namespace MySwaggerDefinitions;

/**
 * @SWG\Definition()
 */
class AuthSignUp {
	
	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $email;

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $password;

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $first_name;

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $last_name;
}

/**
 * @SWG\Definition()
 */
class AuthActivate {

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $id;

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $code;
}

/**
 * @SWG\Definition()
 */
class AuthLogin {

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $email;

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $password;
}

/**
 * @SWG\Definition()
 */
class AuthForgotPassword {

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $email;
}

/**
 * @SWG\Definition()
 */
class AuthResetPassword {

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $code;

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $password;

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $password_confirm;
}