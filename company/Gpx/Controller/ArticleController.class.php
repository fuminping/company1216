<?php
/**
 * 文章控制器
 */

namespace Gpx\Controller;
class ArticleController extends CommonsController {
    public function NewsList(){
		$this->display("/News");
    }
	
	 public function Help(){
		$this->display("/help");
    }
}