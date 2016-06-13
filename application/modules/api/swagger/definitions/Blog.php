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
class BlogCategory {

	/**
	 * Unique ID
	 * @var int
	 * @SWG\Property()
	 */
	public $id;

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $pos;

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $title;
}

/**
 * @SWG\Definition()
 */
class BlogPost {

	/**
	 * Unique ID
	 * @var int
	 * @SWG\Property()
	 */
	public $id;

	/**
	 * Blog Category ID
	 * @var int
	 * @SWG\Property()
	 */
	public $category_id;

	/**
	 * Author ID (Admin User)
	 * @var int
	 * @SWG\Property()
	 */
	public $author_id;

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $title;

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $image_url;

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $content_brief;

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $content;

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $publish_time;

	/**
	 * @var string
	 * @SWG\Property(enum={"draft", "active", "hidden"})
	 */
	public $status;
}

/**
 * @SWG\Definition()
 */
class BlogTag {

	/**
	 * Unique ID
	 * @var int
	 * @SWG\Property()
	 */
	public $id;

	/**
	 * @var string
	 * @SWG\Property()
	 */
	public $title;
}