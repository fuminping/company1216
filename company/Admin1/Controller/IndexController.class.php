<?php
namespace Admin1\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		
		$this->display(VIEW_URL.__FUNCTION__);

	}
}