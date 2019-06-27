<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{

   
	public function _empty()
    {
        redirect(U('/'));
    }
	
	public function index()
    {
        $this->display();
    }
	
    public function check(){
        
        if(IS_POST){
            //echo 'receive a post';
            $login   =   D('user');
           
            $condition['id']    =   $_POST['id'];
            $condition['user_password']=   $_POST['user_password'];
                
            $result    =   $login->where($condition)->field('id,user_password,user_name,type')->find();
            //echo $data['user_password'],$result['user_password'];


            if($result && $result['user_password']  ==$condition['user_password']){
                session_start();
                session('uid',$result['id']);
                session('user_name',$result ['user_name']);
                session('type',$result['type']);
                session('admin',true);
              
                echo 'cookies:'.$_COOKIE[session_name()].PHP_EOL;
                echo session_id()."   ||    ".PHP_EOL;
                print_r( session());
                echo ' | '.$_SESSION['uid'].'|'.$_SESSION['id'];
                $reply['status']    =   200;
                $reply['data']  =   array('identify'=>$result['type']);

                $redirect_url='/';
                switch($reply['identify']){
                    case 1:
                        $redirect_url="/";
                        break;
                    case 2:
                        $redirect_url="/admin";
                    case 3:
                        $redirect_url='/assign';
                    case 4:
                        $redirect_url='/enginner';
                }
                $reply['data']['redirect_url']=$redirect_url;
                print_r($reply);
                $this->ajaxReturn($reply);
                http_response_code(200);

                //略
            }else{
                
                $reply['status']    =   401;
                $reply[err_msg]     =   'Unauthorized';
                http_response_code(401);   
            }
           //}else{
                //exit($login->getError());
           //}
        }else{
        $this->display(); 
        }

    }



    public function getUserInfo(){
        if($_SESSION['adimin']){
            
            $reply['data']['identify']  =  $_SESSION['type'];
            $reply['data']['user_name'] =   $_SESSION['user_name'];
            $redirect_url='/';
            switch($reply['identify']){
                case 1:
                    $redirect_url="/";
                    break;
                case 2:
                    $redirect_url="/admin";
                case 3:
                    $redirect_url='/assign';
                case 4:
                    $redirect_url='/enginner';
            }
            $reply['data']['redirect_url']=$redirect_url;
            $this->ajaxReturn($reply);
            http_response_code(200);
            
        }else{
            $reply['status']    =   401;
                $reply[err_msg]     =   'Unauthorized';
                http_response_code(401); 
        }
    }
}