<?php

  namespace app\controllers;
  use app\models\Goods;
  use app\models\News;
  use app\models\Categorys;
  use yii\web\Controller;
  use Yii;

  class PageController extends Controller {
    public $layout = 'basic';

    public function actionLanding() {
      $this -> view -> title = 'Landing';
      $top_goods = Goods::isTop();
      $new_goods = Goods::isNew();
      $all_news = News::allNews();
      return $this -> render('landing', compact('top_goods', 'new_goods', 'all_news'));
    }

    public function actionAbout(){
      $this -> view -> title = 'About';
      return $this -> render('about_us');
    }

    public function actionBuy(){
      $this -> view -> title = 'buy';
      return $this -> render('buy');
    }

    public function actionCatalog(){
      $this -> view -> title = 'catalog';
      $all_goods = Goods::allGoods();
      $list_categorys = Categorys::AllCategorys();
      return $this -> render('catalog', compact('all_goods', 'list_categorys'));
    }

    public function actionDelivery(){
      $this -> view -> title = 'delivery';
      return $this -> render('delivery');
    }

    public function actionGoods(){
      $this -> view -> title = 'goods';
      return $this -> render('goods');
    }

    public function actionCreateCategory() {
      $this -> view -> title = 'CreateCategory';
      $model = new CreateCategoryForm;
      return $this -> render('create_category.php', ['model' => $model]);
    }

    public function actionIndex() {
      return 'Index';
    }

    public function actionShow() {
      return 'Show';
    }

    public function actionNew() {
      return 'NEw';
    }

    public function actionEdit() {
      return 'Edit';
    }

    public function actionUpdate() {
      return 'UPdate';
    }

    public function actionDelete() {
      var_dump($_DELETE);
    }
  }

?>
