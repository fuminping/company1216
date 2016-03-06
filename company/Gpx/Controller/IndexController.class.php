<?php
/**
 * 首页控制器
 */

namespace Gpx\Controller;

class IndexController extends CommonsController {
    public function index(){
		$this->display("/index");
    }
}