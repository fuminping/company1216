<?php
/**
 * 商品控制器
 */
namespace Gpx\Controller;
class GoodsController extends CommonsController {
    public function GoodsHot(){
		$this->display("/GoodsHot");
    }
	
	public function GroupGoods(){
		$this->display("/GroupGoods");
    }
	
	public function DiscountGoods(){
		$this->display("/DiscountGoods");
    }
}