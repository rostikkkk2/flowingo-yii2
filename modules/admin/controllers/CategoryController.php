<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\Categorys;
use yii\filters\AccessControl;
use Yii;

  class CategoryController extends Controller {

    public function behaviors(){
      return [
        'access' => [
          'class' => AccessControl::className(),
          'only' => ['create', 'delete', 'new'],
          'rules' => [
            [
              'allow' => true,
              'actions' => ['create', 'delete', 'new'],
              'roles' => ['admin']
            ]
          ]
        ]
      ];
    }

    public function actionNew() {
      $model = new Categorys();
      // $this -> view -> title = 'CreateCategory';
      // $position = Categorys::maxPosition();
      return $this -> render('new', compact('model'));
    }

    public function actionIndex($order = null) {
      if (!$order) {
        $categorys = Categorys::find() -> all();
      }else {
        switch ($order) {
          case 'active':
            $categorys = Categorys::find() -> where(['is_visible' => 1])-> all();
            break;

          case 'newest':
            $categorys = Categorys::find() -> orderBy('created_at DESC')-> all();
            break;

          case 'by_title_asc':
            $categorys = Categorys::find() -> orderBy(['title' => SORT_ASC])-> all();
            break;

          case 'by_title_desc':
            $categorys = Categorys::find() -> orderBy(['title' => SORT_DESC])-> all();
            break;
        }
      }
      return $this -> render('index', compact('categorys'));
    }

    public function actionDelete($id) {
      Categorys::findOne($id) -> delete();
      return $this -> redirect('/categorys');
    }
    public function actionCreate() {
      $model = new Categorys();
      $model -> title = $_POST['Categorys']['title'];
      $model -> position = $_POST['Categorys']['position'];
      $model -> is_visible = $_POST['Categorys']['is_visible'];
      if ($model -> save()) {
        Yii::$app -> session -> setFlash('success', 'Category successfully created');
        return $this -> redirect('new');
      } else {
        $position = Categorys::maxPosition();
        Yii::$app -> session -> setFlash('error', 'Category not created');
        return $this -> render('new', compact('model', 'position'));
      }
    }

  }
