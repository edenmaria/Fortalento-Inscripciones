<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Inscripciones */

$this->title = Yii::t('app', 'Datos de Inscripción');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Inscripciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inscripciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'municipios' => $municipios,
        'planteles' => $planteles,
        'cod_municipio' => $cod_municipio,
        'profesionJefeFamilia' => $profesionJefeFamilia,
        'nivelInstruccionMadre' => $nivelInstruccionMadre,
		'fuenteIngreso' => $fuenteIngreso,
		'alojamientoVivienda' => $alojamientoVivienda,
		'ingresoFamiliar' => $ingresoFamiliar,
		'grupoFamiliar' => $grupoFamiliar,
    ]) ?>

</div>
