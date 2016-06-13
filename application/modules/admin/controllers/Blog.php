<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends Admin_Controller {

	public function index()
	{
		redirect('blog/post');
	}

	// Grocery CRUD - Blog Posts
	public function post()
	{
		$crud = $this->generate_crud('blog_posts');
		$crud->columns('author_id', 'category_id', 'title', 'image_url', 'tags', 'publish_time', 'status');
		$crud->set_field_upload('image_url', UPLOAD_BLOG_POST);
		$crud->set_relation('category_id', 'blog_categories', 'title');
		$crud->set_relation_n_n('tags', 'blog_posts_tags', 'blog_tags', 'post_id', 'tag_id', 'title');
		
		$state = $crud->getState();
		if ($state==='add')
		{
			$crud->field_type('author_id', 'hidden', $this->mUser->id);
			$this->unset_crud_fields('status');
		}
		else
		{
			$crud->set_relation('author_id', 'admin_users', '{first_name} {last_name}');
		}

		$this->mPageTitle = 'Blog Posts';
		$this->render_crud();
	}

	// Grocery CRUD - Blog Categories
	public function category()
	{
		$crud = $this->generate_crud('blog_categories');
		$crud->columns('title');
		$this->mPageTitle = 'Blog Categories';
		$this->mViewData['crud_note'] = modules::run('adminlte/widget/btn', 'Sort Order', 'blog/category_sortable');
		$this->render_crud();
	}
	
	// Sortable - Blog Categories
	public function category_sortable()
	{
		$this->load->library('sortable');
		$this->sortable->init('blog_category_model');
		$this->mViewData['content'] = $this->sortable->render('{title}', 'blog/category');
		$this->mPageTitle = 'Blog Categories';
		$this->render('general');
	}

	// Grocery CRUD - Blog Tags
	public function tag()
	{
		$crud = $this->generate_crud('blog_tags');
		$this->mPageTitle = 'Blog Tags';
		$this->render_crud();
	}
}
