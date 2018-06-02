<?php
use app\assets\AppAsset;

AppAsset::register($this);
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Recalls;

$model = new Recalls;
?>

<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head(); ?>
  </head>
  <body class="color-page">
    <?php $this->beginBody(); ?>
    <div class="container-fluid">
      <header class="content">
        <div class="row">
          <div class="col-xs-12 header">
            <?php if (Yii::$app->user->isGuest): ?>
              <a href="/user/enter">Вход</a>
              <a href="/user/new">Регистрация</a>
            <?php else: ?>
              <a href="/user/logout">Выход</a>
            <?php endif; ?>
          </div>
        </div>
        <div class="container text-center">
          <div class="row">
            <div class="col-xs-12">
              <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                  <?= Html::a('<img class="logo" src="src/basic-pic/log.png" alt="Log">',['/page/landing']); ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="backcall">
                  <ul class="list-inline number">
                    <li><img  src="http://flowingo.com/app/assets/src/operator/life.png" alt="">093 55 55 555</li>
                    <li><img class="mb-3" src="http://flowingo.com/app/assets/src/operator/kievstar.png" alt="">067 77 77 777</li>
                    <li><img  src="http://flowingo.com/app/assets/src/operator/mtc.png" alt="">099 99 99 999</li>
                  </ul>
                  <div class="row">
                    <div class="col-xs-12">
                      <?php $my_form = ActiveForm::begin([
                        'action' => ['recalls/create'],
                        'id' => 'recalls_phone',
                        'method' => 'get',
                        'options' => ['class' => 'feedback']
                      ]); ?>
                      <?= $my_form -> field($model, 'phone_number',  ['options' => ['class' => 'input-recalls', ]])->label('Обраный звонок:'); ?>
                      <?= HTML::submitButton('<i class="fa fa-phone" aria-hidden="true"></i>', ['class' => 'recalls-js']); ?>
                      <?php $my_form = ActiveForm::end(); ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 center">
                  <ul class="list-unstyled work-time ">
                    <li>часы работы</li>
                    <li>c 8:00 до 20:00</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 hidden-xs undulating">
            <ul class="list-inline text-center ml-30">
              <li>
                <?= Html::a('О нас',['/page/about']); ?>
              </li>
              <li>
                <?= Html::a('Цветы',['/page/catalog']); ?>
              </li>
              <li>
                <?= Html::a('Доставка',['/page/delivery']); ?>
              </li>
              <li><a href="#">Оплата</a></li>
              <li><a href="#">Вопросы</a></li>
              <li><a href="#">Контакты</a></li>
            </ul>
          </div>
        </div>
      </header>


      <?php if (Yii::$app -> session -> hasFlash('success')) :?>
        <div class="alert alert-success alert-dismissible mt-20" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <?= Yii::$app -> session -> getFlash('success'); ?>
        </div>
      <?php endif; ?>
      <?php if (Yii::$app -> session -> hasFlash('error')) :?>
        <div class="alert alert-danger alert-dismissible mt-20" role="alert">
          <?= Yii::$app -> session -> getFlash('error'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>


      <?= $content ?>
      <footer class="mt-40">
        <div class="row footer" id="fot">
          <div class="col-lg-12">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <span>
                    <?= Html::img('@web/src/social-net/vkk.png', ['alt'=>'VK', 'class'=>'icon-vk']);?>
                  </span>
                  <span>
                    <?= Html::img('@web/src/social-net/fcc.png', ['alt'=>'FB', 'class'=>'mt-13']);?>
                  </span>
                  <span class="reserved"><strong>Flowingo 2018 all rights reserved</strong></span>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 hidden-xs about-us-footer">
                  <ul class="list-inline text-center">
                    <li>
                      <?= Html::a('О нас',['/page/about']) ?>
                    </li>
                    <li>
                      <?= Html::a('Цветы',['/page/catalog']) ?>
                    </li>
                    <li>
                      <?= Html::a('Доставка',['/page/delivery']) ?>
                    </li>
                    <li><a href="#">Оплата</a></li>
                    <li><a href="#">Вопросы</a></li>
                    <li><a href="#">Контакты</a></li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <p class="footer-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div id="authorizing" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header  mod-head">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h1 class="modal-title text-center">Вход</h1>
                        </div>
                        <div class="modl-body mod-body">
                          <em><p class="errors text-center"></p></em>
                          <form class="text-center" action="/actions/auth.php" method="post">
                            <input type="email" name="email" value="" placeholder="e-mail">
                            <br>
                            <input class="mt-20" type="password" name="password" value="" placeholder="пароль">
                            <br>
                            <input type="checkbox" name="" value="">
                            <label class="mt-10" for="">Запомнить меня</label>
                            <br>
                            <button class="btn mt-15 mb-15 auth-button-js" type="button" name="button">ВОйТИ</button>
                            <br>
                            <a href="#">Забыли пароль?</a>
                            <p>Войти через</p>
                          </form>
                        </div>
                        <div class="modal-footer mod-foot">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div id="registration" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header mod-head">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h1 class="modal-title text-center">Регистрация</h1>
                        </div>
                        <div class="modal-body mod-body">
                          <em><p class="errors text-center lead"></p></em>
                          <form class="text-center" action="/actions/registration.php" method="post">
                            <input type="text" name="email" placeholder="e-mail">
                            <br>
                            <input class="mt-20" type="password" name="password" placeholder="пароль">
                            <br>
                            <input class="mt-20" type="password" name="password_confirm" placeholder="телефон">
                            <br>
                            <p class="mt-10">Я ознакомился с политикой</p>
                            <a href="#">Сервиса покупки и доставки цветов Flowingo</a>
                            <br>
                            <button class="btn mt-15 mb-15 registration-button-js" type="button" name="button">Готово</button>
                          </form>
                        </div>
                        <div class="modal-footer mod-foot"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div id="registrated" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header mod-head">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body mod-body">
                          <h1 class="text-center">Спасибо за регистрацию</h1>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage(); ?>
