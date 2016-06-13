<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cover_photo extends Admin_Controller {

	// Image CRUD - Cover Photos
	public function index()
	{
		$crud = $this->generate_image_crud('cover_photos', 'image_url', UPLOAD_COVER_PHOTO);
		$this->mPageTitle = 'Cover Photos';
		$this->render_crud();
	}
}
