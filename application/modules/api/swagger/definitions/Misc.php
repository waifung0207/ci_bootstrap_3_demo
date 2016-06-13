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
class CoverPhoto {

	/**
	 * Unique ID
	 * @var int
	 * @SWG\Property()
	 */
	public $id;

	/**
	 * @var int
	 * @SWG\Property()
	 */
	public $pos;

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $image_url;

	/**
	 * @var string
	 * @SWG\Property(enum={"active", "hidden"})
	 */
	public $status;
}