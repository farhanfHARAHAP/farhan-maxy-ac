// Button Anim

function btnPointerOn(id){
    id.style = 'background-color: blue; color:white;';
}

function btnPointerOff(id){
    id.style = 'background-color: whitesmoke; color:black;';
}

// Clock

let d = new Date();
let time = d.getHours()+':'+d.getMinutes()+':'+d.getSeconds();

function updateTime(){
    let d = new Date();
    let time = d.getHours()+':'+d.getMinutes()+':'+d.getSeconds();
    document.getElementById('clock').innerHTML = time;
}

function start(){
    updateTime();
    window.setInterval(updateTime, 1000);
}

