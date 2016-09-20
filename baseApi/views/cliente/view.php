<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

use yii\helpers\Url;

$assetsDir = dirname(__FILE__).'../../assets'; 

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-view">

    <h1> Detalles: <?= Html::encode($model->nombre) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'nombre',
        ],
    ]) ?>
    
    
</div>

 <h1> Imágenes </h1>

<!--falta clase para esto-->

<?php 
    echo \metalguardian\fotorama\Fotorama::widget(
        [
            'items' => $items,
            'options' => [
                'nav' => 'thumbs',
                 'ratio' => 2000/600,
            ]
        ]
    ); 
    ?>
</div>
