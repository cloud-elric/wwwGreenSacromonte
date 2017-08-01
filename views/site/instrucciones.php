<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Fiesta americana';
?>

<div class="container container-home">
	<!-- Main content Wrapper -->
	
	<!-- Contenedor de las tarjetas -->
	<div class="js-tarjetas-contenedor">

Instrucciones

Junta la mayor cantidad de imágenes iguales en el menor tiempo posble, entre mejor lo hagas, mejores serán los beneficios para disfrutar
días increíbles en Fiesta Americana


		<!-- Seleccion de Tarjeta -->
		<div class="selecciona-tarjeta-wrapper">

            <?= Html::a('<span class="ladda-label">Comenzar</span>', ['site/registro'], ['class'=>'btn btn-primary js-next-step ladda-button', 'data-style'=>'zoom-in']);?>

		</div>

		<!-- Termina Seleccion de Tarjeta -->

	</div>
	<!-- Fin contenedor de las tarjetas -->

</div>
<!-- Main content Wrapper -->
