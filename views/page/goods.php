<?php
use yii\helpers\Html;
$this -> registerCssFile('@web/css/landing.css', ['depends' => 'app\assets\AppAsset']);
?>

<main>
  <div class="container mt-40">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
            <ul class="list-unstyled pd-20 roll">
              <?php
              // foreach ($data['categorys'] as $category):?>
                <li>
                  <span>
                    <a href="/categorys/show/"</a>
                  </span>
                </li>
              <?php
            // endforeach; ?>
            </ul>
          </div>
          <?php
          // foreach ($data['goods'] as $good):?>
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <span>
                    <img class="wd-300 mt-40" src="" alt="goods_1">
                  </span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-20 text-center">
              <div class="row">
                <div class="col-lg-12">
                  <ul class="list-unstyled">
                    <li><span class="h1"></span></li>
                    <li class="h2">dля tвоей женщины</li>
                    <li class=""><i></i></li>
                  </ul>
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs"></div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-40">
                      <input type="radio" name="sm" value="sm20">20 см <br>
                      <input type="radio" name="sm" value="sm40">40 см
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-40">
                      <input type="radio" name="sm" value="sm30">30 см <br>
                      <input type="radio" name="sm" value="sm60">60 см
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs"></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 mt-40">
                      <button class="btn" type="button" id="minus" name="button"><b>-</b></button>
                      <input style="width: 25px; border: none;" readonly type="text" name="" value="1">шт
                      <button class="btn" type="button" id="plus" name="button"><b>+</b></button>
                    </div>
                  </div>
                  <form action="/goods/buy/" method="post">
                    <div class="row">
                      <div class="col-lg-12 mt-20">
                        <span class="h3"></span>
                        <button type="submit" name="button" class="btn btn-danger btn-md">
                          Купить
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          <?php
        // endforeach; ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2"></div>
      <div class="col-lg-9 col-md-10 col-sm-8 col-xs-8 mt-20">
        <div class="row">
          <div class="col-lg-8">
            <p class="text-center">Рекомендуем к букету</p>
          </div>
        </div>
          <div class="row">
            <div class="col-lg-12 text-center">
              <div class="row">

              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3">
                <img src="/app/assets/src/basic-pic/left.png" class="pull-right" alt="">
              </div>
              <div class="col-lg-1 col-md-1 hidden-sm col-xs-4" style="width: 100px; height: 115px; border: 1px solid white; background-color: white; margin-right: 2px;">
                <div class="row">
                  <div class="col-lg-12 mt-10">
                    <span>
                      <img src="/app/assets/src/goods/4.png" style="height: 50px;" alt="">
                    </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 text-center mt-20">
                    <span>trololo</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1 hidden-sm hidden-xs" style="width: 100px; height: 115px; border: 1px solid white; background-color: white; margin-right: 2px;">
                <div class="row">
                  <div class="col-lg-12 mt-10">
                    <span>
                      <img src="/app/assets/src/goods/1.png" style="height: 50px;" alt="">
                    </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 text-center mt-20">
                    <span>trololo</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1 hidden-sm hidden-xs" style="width: 100px; height: 115px; border: 1px solid white; background-color: white; margin-right: 2px;">
                <div class="row">
                  <div class="col-lg-12 mt-10">
                    <span>
                      <img src="/app/assets/src/goods/1.png" style="height: 50px;" alt="">
                    </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 text-center mt-20">
                    <span>trololo</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs" style="width: 100px; height: 115px; border: 1px solid white; background-color: white; margin-right: 2px;">
                <div class="row">
                  <div class="col-lg-12 mt-10">
                    <span>
                      <img src="/app/assets/src/goods/1.png" style="height: 50px;" alt="">
                    </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 text-center mt-20">
                    <span>trololo</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs" style="width: 100px; height: 115px; border: 1px solid white; background-color: white; margin-right: 2px;">
                <div class="row">
                  <div class="col-lg-12 mt-10">
                    <span>
                      <img src="/app/assets/src/goods/1.png" style="height: 50px;" alt="">
                    </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 text-center mt-20">
                    <span>trololo</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs" style="width: 100px; height: 115px; border: 1px solid white; background-color: white; margin-right: 2px;">
                <div class="row">
                  <div class="col-lg-12 mt-10">
                    <span>
                      <img src="/app/assets/src/goods/1.png" style="height: 50px;" alt="">
                    </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 text-center mt-20">
                    <span>trololo</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3">
                <img src="/app/assets/src/basic-pic/right.png" style="color: red;" alt="">
              </div>
            </div>
          </div>

          </div>
        </div>
        <div class="hidden-lg hidden-md col-sm-2 col-xs-2"></div>

      </div>
    <div class="row">
      <div class="col-lg-12">
        <p class="text-center offers">NEW</p>
      </div>
    </div>
    <div class="row products">
      <div class="hidden-lg hidden-md col-sm-1 col-xs-1"></div>
      <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10">
        <div class="row">
          <?php
          // foreach ($data['goods_newing'] as $is_newing):?>

            <a href="/goods/show/">
              <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 goods">
                <div class="row img-height">
                  <div class="col-lg-12 text-center">
                    <p>
                      <img class="width-img" src="" alt="goods_1">
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                    <p></p>
                    <p></p>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <button type="button" name="button" class="buy">
                      <i class="fa fa-shopping-cart"></i>
                    </button>
                  </div>
                </div>
              </div>
            </a>
          <?php
        // endforeach; ?>
        </div>
      </div>
      <div class="hidden-lg hidden-md col-sm-1 col-xs-1"></div>
    </div>
  </div>
</main>
