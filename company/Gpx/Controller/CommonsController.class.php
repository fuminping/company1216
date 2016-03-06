<?php
/**
 * 公共控制器
 */

namespace Gpx\Controller;
use Think\Controller;
class CommonsController extends Controller {
   
   public function _initialize(){
	   $head_nav = explode("/",$_SERVER['PATH_INFO']);
	   $this->assign('head_nav',$head_nav[1]);
   }
}