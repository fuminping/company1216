<?php
/**
 * 登录，注册
 */

namespace Gpx\Controller;

class MemberController extends CommonsController {
    public function UserLogin(){
		$this->display("/UserLogin");
    }
	
	public function UserReg(){
		$this->display("/UserReg");
	}
}