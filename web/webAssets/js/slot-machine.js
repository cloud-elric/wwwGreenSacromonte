var machine4 = $("#casino1").slotMachine({
    active: 0,
    delay: 500
});

var machine5 = $("#casino2").slotMachine({
    active: 0,
    delay: 500
});

var machine6 = $("#casino3").slotMachine({
    active: 0,
    delay: 500
});

var machine7 = $("#casino4").slotMachine({
    active: 0,
    delay: 500
});

var started = 0;

var arregloPremios=[];

var bandera = 0;

var tokenUsuario = null;

start();


$(document).click(function () {

    if (machine4.running || machine5.running || machine6.running || machine7.running) {
        //console.log(arregloPremios);
        stop();
    }else{
        if(!gameOver){
            start();
        }
    }

});


$(document).ready(function () {
   tokenUsuario = $('#js-token-usuario').val();
});

function start() {


    started = 4;
    machine4.shuffle();
    machine5.shuffle();
    machine6.shuffle();
    machine7.shuffle();

}

function stop() {
    switch (started) {
        case 4:
            machine4.stop();

            if(machine4.active==0){
                   bandera++;
            }

            
            break;
        case 3:
            machine5.stop();

            if(machine5.active==0){
                bandera++;
            }
            break;
        case 2:
            machine6.stop();
            if(machine6.active==0){
                bandera++;
            };
            break;
        case 1:
            machine7.stop();
            if(machine7.active==0){
                bandera++;
            }
            break;
    }
    started--;

    if(started==0){
        validarPremio();
        gameOver = true;
    }
}

function validarPremio(){
bandera--;
        arregloPremios.sort();

        //console.log(arregloPremios);

        // for(var i = 0; i<(arregloPremios.length)-1; i++){
        //     if(arregloPremios[i]==arregloPremios[i+1]){
        //         bandera++;
        //     }
        // }

        setTimeout(function() {
            reclamarPremio();    
        }, 3000);

        //console.log(bandera);
        
        //bandera = 0;
        arregloPremios=[];
}

function reclamarPremio(){
    $.ajax({
        url: 'reclamar-premio?token='+tokenUsuario+'&bandera='+bandera,
        success: function(resp){
            $('#js-contenedor-modal').html(resp);
            $('.modal').show();
            bandera = 0;
        }
    });
}
