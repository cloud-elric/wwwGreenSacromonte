<?php

use yii\web\View;

?>

<script>

 var gameOver = <?=$yaParticipo?'true':'false'?>;

</script>

<input type="hidden" value="<?=$token?>" id="js-token-usuario" />

<div class="container">
  <div class="ruleta-bkgd">


					<div id="casino1" class="slotMachine">
						<div class="slot slot1"></div>
						<div class="slot slot2"></div>
						

					</div>

					<div id="casino2" class="slotMachine">
					  <div class="slot slot1"></div>
						<div class="slot slot2"></div>
						<div class="slot slot3"></div>
						

					</div>

					<div id="casino3" class="slotMachine">
					  <div class="slot slot1"></div>
						<div class="slot slot2"></div>
						

					</div>

					<div id="casino4" class="slotMachine">
						<div class="slot slot1"></div>
						<div class="slot slot2"></div>


					</div>

				</div>
<!-- </div> -->

<div class="modal modal-bkgd"  style="<?=$yaParticipo?'display:block':''?>">
	<div class="modal-body"  id="js-contenedor-modal">
		<?php
		foreach($premios as $premio){
			echo $this->render('premio', ['nombrePremio'=>$premio->idPremio->txt_nombre]);
		}
		?>
	</div>
</div>
 <?php

 $this->registerCssFile ( '@web/webAssets/plugins/slot-machine/slot-machine.css', [
		'depends' => [
				\app\assets\AppAsset::className ()
		],

] );



$this->registerCssFile ( '@web/webAssets/css/modal.css', [
		'depends' => [
				\app\assets\AppAsset::className ()
		],

] );

 $this->registerJsFile ( '@web/webAssets/plugins/slot-machine/slot-machine.js', [
		'depends' => [
				\app\assets\AppAsset::className ()
		]
] );

$this->registerJsFile ( '@web/webAssets/js/slot-machine.js', [
		'depends' => [
				\app\assets\AppAsset::className ()
		]
] );
