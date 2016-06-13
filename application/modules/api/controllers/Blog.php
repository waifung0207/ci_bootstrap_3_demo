<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Demo Controller with Swagger annotations
 * Reference: https://github.com/zircote/swagger-php/
 */
class Blog extends API_Controller {

	/**
	 * @SWG\Get(
	 * 	path="/blog/posts",
	 * 	tags={"blog"},
	 * 	summary="List out blog posts",
	 * 	@SWG\Parameter(
	 * 		in="header",
	 * 		name="X-API-KEY",
	 * 		description="API Key",
	 * 		required=true,
	 * 		type="string"
	 * 	),
	 * 	@SWG\Response(
	 * 		response="200",
	 * 		description="Blog Post array",
	 * 		@SWG\Schema(type="array", @SWG\Items(ref="#/definitions/BlogPost"))
	 * 	)
	 * )
	 */
	public function posts_get()
	{
		$this->load->model('blog_post_model', 'posts');
		$data = $this->posts->get_all();
		$this->response($data);
	}

	/**
	 * @SWG\Get(
	 * 	path="/blog/{id}",
	 * 	tags={"blog"},
	 * 	summary="Look up a blog post",
	 * 	@SWG\Parameter(
	 * 		in="header",
	 * 		name="X-API-KEY",
	 * 		description="API Key",
	 * 		required=true,
	 * 		type="string"
	 * 	),
	 * 	@SWG\Parameter(
	 * 		in="path",
	 * 		name="id",
	 * 		description="Blog Post ID",
	 * 		required=true,
	 * 		type="integer"
	 * 	),
	 * 	@SWG\Response(
	 * 		response="200",
	 * 		description="Blog Post object",
	 * 		@SWG\Schema(ref="#/definitions/BlogPost")
	 * 	),
	 * 	@SWG\Response(
	 * 		response="404",
	 * 		description="Invalid ID"
	 * 	)
	 * )
	 */
	public function id_get($id)
	{
		$this->load->model('blog_post_model', 'posts');
		$data = $this->posts->get($id);
		empty($data) ? $this->error_not_found() : $this->response($data);
	}
	
	/**
	 * @SWG\Get(
	 * 	path="/blog/categories",
	 * 	tags={"blog"},
	 * 	summary="List out blog categories",
	 * 	@SWG\Parameter(
	 * 		in="header",
	 * 		name="X-API-KEY",
	 * 		description="API Key",
	 * 		required=true,
	 * 		type="string"
	 * 	),
	 * 	@SWG\Response(
	 * 		response="200",
	 * 		description="Blog Category array",
	 * 		@SWG\Schema(type="array", @SWG\Items(ref="#/definitions/BlogCategory"))
	 * 	)
	 * )
	 */
	public function categories_get()
	{
		$this->load->model('blog_category_model', 'categories');
		$data = $this->categories->get_all();
		$this->response($data);
	}

	/**
	 * @SWG\Get(
	 * 	path="/blog/tags",
	 * 	tags={"blog"},
	 * 	summary="List out blog tags",
	 * 	@SWG\Parameter(
	 * 		in="header",
	 * 		name="X-API-KEY",
	 * 		description="API Key",
	 * 		required=true,
	 * 		type="string"
	 * 	),
	 * 	@SWG\Response(
	 * 		response="200",
	 * 		description="Blog Tag array",
	 * 		@SWG\Schema(type="array", @SWG\Items(ref="#/definitions/BlogTag"))
	 * 	)
	 * )
	 */
	public function tags_get()
	{
		$this->load->model('blog_tag_model', 'tags');
		$data = $this->tags->get_all();
		$this->response($data);
	}
}
