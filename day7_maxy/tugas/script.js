// Clock

function updateTime(){
    let d = new Date();
    let time = d.getHours()+':'+d.getMinutes()+':'+d.getSeconds();
    document.getElementById('clock').innerHTML = time;
}

window.setInterval(updateTime, 1000);

// Alarm

function indMaskOn(){
    document.getElementById('ind-mask').src = 'assets/mask-on.png';
    document.getElementById('ind-text').innerHTML = 'Ready Mask!';
    document.getElementById('gun-mask').play();
}

function indGunOn(){
    document.getElementById('ind-gun').src = 'assets/gun-on.png';
    document.getElementById('ind-text').innerHTML = 'Ready Gun!';
    document.getElementById('gun-sound').play();
}

function indTextOn() {
    document.getElementById('ind-light').style = 'background-color: green';
    document.getElementById('ind-text').innerHTML = 'Go!';
}

function callAlerta(){    
    window.setTimeout(indMaskOn, 2000);
    window.setTimeout(indGunOn, 4000);
    window.setTimeout(indTextOn, 6000);
    
}

// Set Alarm

let alerta = '0:0:0';

function checkAlarm(){
    if(document.getElementById('clock').innerHTML == alerta){
        document.getElementById('song').play();
        document.getElementById('ind-text').innerHTML = 'Get Ready!';
        callAlerta(); 
    } else {
        
    }
}

function setAlarm(){
    document.getElementById('Hour').disabled = true;
    document.getElementById('Minute').disabled = true;
    document.getElementById('Second').disabled = true;
    document.getElementById('start-btn').disabled = true;

    let hour = document.getElementById('Hour').value;
    let minute = document.getElementById('Minute').value;
    let second = document.getElementById('Second').value;

    document.getElementById('ind-text').innerHTML = 'Alarm Set!';

    alerta = hour+':'+minute+':'+second;

    let check = window.setInterval(checkAlarm,1000);
}


