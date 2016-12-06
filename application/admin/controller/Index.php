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

	public function product_category_add()
	{
		return $this->fetch();
	}

	public function transaction()
	{
		return $this->fetch();
	}

	public function order_chart()
	{
		return $this->fetch();
	}

	public function orderform()
	{
		return $this->fetch();
	}

	public function amounts()
	{
		return $this->fetch();
	}

	public function order_handling()
	{
		return $this->fetch();
	}

	public function refund()
	{
		return $this->fetch();
	}

}

