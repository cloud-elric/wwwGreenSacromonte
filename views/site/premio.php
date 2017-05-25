<?php
use yii\helpers\Url;

$this->title="Gracias por participar";
?>
<div class="container container-ribbon">

<!-- Premio contenedor -->
	<div class="js-premio-contenedor" style="text-align:center">
		<div class="premio js-premio-ajax">
			<?=$nombrePremio?>
		</div>
		<a class="btn btn-primary" href="<?=Url::base()?>">Finalizar</a>
	</div>
	<!-- Fin premio contenedor-->

</div>

<img class="logo" src="<?=Url::base()?>/webAssets/images/logo-fa.png" alt="Fiesta Americana">
