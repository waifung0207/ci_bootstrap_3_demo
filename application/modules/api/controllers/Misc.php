<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Demo Controller with Swagger annotations
 * Reference: https://github.com/zircote/swagger-php/
 */
class Misc extends API_Controller {

	/**
	 * @SWG\Get(
	 * 	path="/misc/cover_photos",
	 * 	tags={"misc"},
	 * 	summary="List out cover photos",
	 * 	@SWG\Parameter(
	 * 		in="header",
	 * 		name="X-API-KEY",
	 * 		description="API Key",
	 * 		required=true,
	 * 		type="string"
	 * 	),
	 * 	@SWG\Response(
	 * 		response="200",
	 * 		description="Cover Photo array",
	 * 		@SWG\Schema(type="array", @SWG\Items(ref="#/definitions/CoverPhoto"))
	 * 	)
	 * )
	 */
	public function cover_photos_get()
	{
		$this->load->model('cover_photo_model', 'cover_photos');
		$where = array('status' => 'active');
		$data = $this->cover_photos->get_many_by($where);
		$this->response($data);
	}
}