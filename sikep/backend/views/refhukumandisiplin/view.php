<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiHukumanDisiplin */

$this->title = $model->idHukumanDisiplin;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Hukuman Disiplin', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-hukuman-disiplin-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idHukumanDisiplin], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idHukumanDisiplin], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idHukumanDisiplin',
            'NamaHukumanDisiplin',
            'TingkatHukumanDisiplin',
        ],
    ]) ?>

</div>
