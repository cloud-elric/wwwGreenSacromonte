<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'Fiesta americana';
?>

<div class="container container-home">
	<!-- Main content Wrapper -->


		<div class="container container-960">
			<h3>Instrucciones</h3>
			<p>Resuelve el siguiente rompecabezar en el menor tiempo posible, entre mas pronto lo armes mayores seran los beneficios para disfrutar dias increibles en Fiesta Americana</p>
			<?= Html::a('<span class="ladda-label">Comenzar</span>', ['site/registro'], ['class'=>'btn btn-primary js-next-step ladda-button', 'data-style'=>'zoom-in']);?>
		</div>


	</div><!-- Main content Wrapper -->
