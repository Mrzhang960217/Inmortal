<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
	public function login()
	{
		return $this->fetch();
	}
	
	public function home()
	{
		return $this->fetch();
	}

	public function admin_index()
	{
		return $this->fetch();
	}

	public function products_list()
	{
		return $this->fetch();
	}

	public function brand_Manage()
	{
		return $this->fetch();
	}

	public function category_manage()
	{
		return $this->fetch();
	}
}

