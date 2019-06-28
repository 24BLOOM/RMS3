<?php
namespace Home\Controller;
use Think\Controller;
class LogoutController extends Controller {
    //退出登录
    public function checkout()
    {
            if($_SESSION['admin']){
            echo 'pppp';
            session(null); // 清空当前的session
            
           
        }
    }

}