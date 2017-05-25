var machine4 = $("#casino1").slotMachine({
    active: 0,
    delay: 500
});

var machine5 = $("#casino2").slotMachine({
    active: 1,
    delay: 500
});

var machine6 = $("#casino3").slotMachine({
    active: 2,
    delay: 500
});

var machine7 = $("#casino4").slotMachine({
    active: 3,
    delay: 500
});

var started = 0;


$(document).click(function () {

    if (machine4.running || machine5.running || machine6.running || machine7.running) {

        stop();
    }else{
        start();
    }

});


$(document).ready(function () {


    $("#slotMachineButtonShuffle").click(function () {

    });
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
            console.log(machine4.active);
            break;
        case 3:
            machine5.stop();
            console.log(machine5.active);
            break;
        case 2:
            machine6.stop();
            console.log(machine6.active);
            break;
        case 1:
            machine7.stop();
            console.log(machine7.active);
            break;
    }
    started--;
}