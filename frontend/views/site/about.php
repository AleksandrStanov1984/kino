<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О кинотеатре';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>Здесь будет страница о кинотеатре</p>

    <p><a href="<?= \yii\helpers\Url::to(['site/news']) ?>">Новости</a></p>
    
    <code><?= __FILE__ ?></code>
</div>
