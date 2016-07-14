<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\Response;


class HelloController extends Controller
{
    public $enableCsrfValidation = false;
    /*
     * 有session 进主页
     */
    public function init(){
        parent::init();
        $session = YII::$app->session;
        //var_dump($session->has('user_name'));die;
        if ($session->has('user_name')){
            return  $this->redirect(['/wei/index']);
        }
    }
    /*
     *加载登录
     */
    public function actionLogin(){

        return $this->renderPartial('login');
    }

    /*
     * 登录
     */
    public function actionLogin_pro(){
        $user_name = Yii::$app->request->post('user_name');
        $user_pwd = md5(Yii::$app->request->post('user_pwd'));
       // print_r($user_pwd);die;

        $res = \Yii::$app->db->createCommand("SELECT * FROM `user` where user_name='$user_name' and user_pwd='$user_pwd'")->queryOne();
        //print_r($res);die;
        if($res){
            $session = \Yii::$app->session;
            $session->set('user_name', $user_name);
            $this->redirect(['wei/index']);
        }else{
            echo "<script>alert('用户名或者密码错误');window.location = 'index.php?r=hello/login';</script>";
        }
    }

    /*
     * 退出
     */
    public function actionLogout(){
        $session = \Yii::$app->session;
        $session->destroy();
        $this->redirect(['hello/login']);
    }
}