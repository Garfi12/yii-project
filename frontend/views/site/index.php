<?php
    use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    
    <div class="carousel-item active">
    <?= HTML::img('@web/img/2.jpg', ['alt' => 'M']) ?>
    <div class="carousel-caption d-none d-md-block">
    <h3>Текст</h3>
    <p>Описание</p>
  </div>
    </div>
    <div class="carousel-item">
    <?= HTML::img('@web/img/3.jpg', ['alt' => 'M']) ?>
    <div class="carousel-caption d-none d-md-block">
    <h3>Текст</h3>
    <p>Описание</p>
  </div>
    </div>
    <div class="carousel-item">
    <?= HTML::img('@web/img/4.jpg', ['alt' => 'M']) ?>
    <div class="carousel-caption d-none d-md-block">
    <h3>Текст</h3>
    <p>Описание</p>
  </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
</div>
    <h1 class="top_tov">Топ Товары</h1>
<div class="karti">
    <div class="card my" style="width: 18rem;">
    <?= HTML::img('@web/img/9.jpg', ['class' => 'Mg'],) ?>
  <div class="card-body">
    <h5 class="card-title">Игра</h5>
    <p class="card-text">Описание</p>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nulla dolore quasi dolorum veniam deserunt itaque doloribus adipisci aspernatur mollitia quod suscipit nisi voluptatem placeat sunt repellat, vitae facere quos?</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Цена</li>
 
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Купить</a>
    <a href="#" class="card-link">Все Товары</a>
  </div>
</div>
<div class="card my" style="width: 18rem;">
<?= HTML::img('@web/img/10.jpg', ['class' => 'Mg'],) ?>
  <div class="card-body">
    <h5 class="card-title">Игра</h5>
    <p class="card-text">Описание</p>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nulla dolore quasi dolorum veniam deserunt itaque doloribus adipisci aspernatur mollitia quod suscipit nisi voluptatem placeat sunt repellat, vitae facere quos?</p>

  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Цена</li>
 
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Купить</a>
    <a href="#" class="card-link">Все Товары</a>
  </div>
</div>

<div class="card my" style="width: 18rem;">
<?= HTML::img('@web/img/11.jpg', ['class' => 'Mg'],) ?>
  <div class="card-body">
    <h5 class="card-title">Игра</h5>
    <p class="card-text">Описание</p>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nulla dolore quasi dolorum veniam deserunt itaque doloribus adipisci aspernatur mollitia quod suscipit nisi voluptatem placeat sunt repellat, vitae facere quos?</p>

  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Цена</li>
 
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Купить</a>
    <a href="#" class="card-link">Все Товары</a>
  </div>
</div>
</div>
<h1 class="top_tov">Новинки</h1>
<div class="karti">
<div class="card my" style="width: 18rem;">
<?= HTML::img('@web/img/12.jpg', ['class' => 'Mg'],) ?>
  <div class="card-body">
    <h5 class="card-title">Игра</h5>
    <p class="card-text">Описание</p>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nulla dolore quasi dolorum veniam deserunt itaque doloribus adipisci aspernatur mollitia quod suscipit nisi voluptatem placeat sunt repellat, vitae facere quos?</p>

  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Цена</li>
 
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Купить</a>
    <a href="#" class="card-link">Все Товары</a>
  </div>
</div>

<div class="card my" style="width: 18rem;">
<?= HTML::img('@web/img/13.jpg', ['class' => 'Mg'],) ?>
  <div class="card-body">
    <h5 class="card-title">Игра</h5>
    <p class="card-text">Описание</p>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nulla dolore quasi dolorum veniam deserunt itaque doloribus adipisci aspernatur mollitia quod suscipit nisi voluptatem placeat sunt repellat, vitae facere quos?</p>

  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Цена</li>
 
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Купить</a>
    <a href="#" class="card-link">Все Товары</a>
  </div>
</div>

<div class="card my" style="width: 18rem;">
<?= HTML::img('@web/img/14.jpg', ['class' => 'Mg'],) ?>
  <div class="card-body">
    <h5 class="card-title">Игра</h5>
    <p class="card-text">Описание</p>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nulla dolore quasi dolorum veniam deserunt itaque doloribus adipisci aspernatur mollitia quod suscipit nisi voluptatem placeat sunt repellat, vitae facere quos?</p>

  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Цена</li>
 
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Купить</a>
    <a href="#" class="card-link">Все Товары</a>
  </div>
</div>
</div>