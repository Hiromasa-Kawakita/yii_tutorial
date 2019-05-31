<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>国リスト</h1>
<ul>
<?php
$countries = $dataProvider->getModels();
// $pagination = 
foreach ($countries as $country): ?>
    <li>
        <?= Html::encode("{$country->code} ({$country->name})") ?>:
        <?= $country->population ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $dataProvider->pagination]) ?>