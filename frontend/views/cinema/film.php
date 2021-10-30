<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 01.03.19
 * Time: 12:19
 */

use yii\helpers\Html;

$this->title = 'Карточка фильма';
$this->params['breadcrumbs'][] = $this->title;

/**@var array $film */
/**@var array $schedules */
/**@var array $posters */
?>
<div class="cinema-film">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php

    var_dump($film);
    var_dump($schedules);
    var_dump($posters);

    ?>
</div>