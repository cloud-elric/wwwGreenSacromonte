<?php

use yii\web\View;

?>


<style>
.slotMachine {
    width: 24%;
    border: 5px solid #000;
    height: 100px;
    padding: 0px;
    overflow: hidden;
    display: inline-block;
    text-align: center;
    
}

.slotMachine .slot {
    height: 100px;
    background-repeat: no-repeat;
	background-position: center;
}

.slot1{
	background-image: url('../webAssets/images/slot-machine/slot1.png');
}

.slot2{
	background-image: url('../webAssets/images/slot-machine/slot2.png');
}

.slot3{
	background-image: url('../webAssets/images/slot-machine/slot3.png');
}

.slot4{
	background-image: url('../webAssets/images/slot-machine/slot4.png');
}

.slot5{
	background-image: url('../webAssets/images/slot-machine/slot5.png');
}

.slot6{
	background-image: url('../webAssets/images/slot-machine/slot6.png');
}

</style>

<div>
					<div id="casino1" class="slotMachine">
					<?php
					$i = 0;
					foreach($premios as $premio){
						$i++;
						?>
						<div class="slot slot<?=$i?>"></div>

					<?php
						}
					?>

					</div>

					<div id="casino2" class="slotMachine">
						<div class="slot slot1"></div>
						<div class="slot slot2"></div>
						
					</div>

					<div id="casino3" class="slotMachine">
						<div class="slot slot1"></div>
						<div class="slot slot2"></div>
						
					</div>

					<div id="casino4" class="slotMachine">
						<div class="slot slot1"></div>
						<div class="slot slot2"></div>
						
					</div>

					<div class="btn-group btn-group-justified btn-group-casino" role="group">
						<div id="js-reclamar-premio" type="button" class="btn btn-primary btn-lg">Reclamar premio</div>
						
					</div>
				</div>


 <?php

 $this->registerCssFile ( '@web/webAssets/plugins/slot-machine/slot-machine.css', [
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