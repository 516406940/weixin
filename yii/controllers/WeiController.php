<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\Response;
use app\models\Account;
use yii\data\Pagination;

class WeiController extends Controller
{
    /*
     * 没有session 去登录
     */
    public function init(){
        parent::init();
        $session = YII::$app->session;
        //var_dump($session->has('user_name'));die;
        if (!$session->has('user_name')){
          return  $this->redirect(['/hello/login']);    //必须['/hello/login']
        }
    }


    public $enableCsrfValidation = false;

    /*
     * 加载主页面
     */
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

    /*
     *添加公众号
     */
    public function actionAdd()
    {
        return $this->renderPartial('add');
    }

    /*
     * 执行添加
     */
    public function actionAdd_pro()
    {
        $uname = \Yii::$app->request->post('a_name');
        $pwd = md5(\Yii::$app->request->post('a_pwd'));

        if(trim($uname)==''||trim($pwd)==''){
            return $this->redirect(['wei/add']);
        }

        $re = \Yii::$app->db->createCommand()->insert('account', [
               'a_name' => $uname,
               'a_pwd' => $pwd,
         ])->execute();
        if($re){
            $this->redirect(['wei/lst']);
        }else{
            echo "<script>alert('添加失败');window.location = 'index.php?r=wei/add';</script>";
        }
    }

    /*
     * 列表
     */

    public function actionLst(){
        $query = Account::find();

        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
        ]);

        $lst = $query->orderBy('a_name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->renderPartial('lst', [
            'lst' => $lst,
            'pagination' => $pagination,
        ]);
    }

    /*
     * 删除
     */
    public function actionDel(){
        $aid = \Yii::$app->request->get('aid');
        $re = \Yii::$app->db->createCommand()->delete('account', "aid = $aid")->execute();
        if($re){
            $this->redirect(['wei/lst']);
        }else{
            echo "<script>alert('删除失败');window.location = 'index.php?r=wei/lst';</script>";
        }
    }

    /*
     * 修改
     */
    public function actionUp(){
        $aid = \Yii::$app->request->get('aid');
        $arr = \Yii::$app->db->createCommand("SELECT * FROM `account` WHERE aid=$aid")->queryOne();
        return $this->renderPartial('up',['arr'=>$arr]);
    }

    /*
     * 执行修改
     */
    public function actionUp_pro(){
        $id = \Yii::$app->request->post('id');
        $user_name = \Yii::$app->request->post('a_name');
        $user_pwd = \Yii::$app->request->post('a_pwd');
        $re = \Yii::$app->db->createCommand()->update('account', ['a_name' => $user_name,'a_pwd'=> $user_pwd], "aid = $id")->execute();
        if($re){
            $this->redirect(array('/wei/lst'));
        }else{
            $this->redirect(array('/wei/up'));
        }
    }
}