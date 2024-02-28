function upDate(){
    let d = new Date();    
    let date = d.getFullYear()+'-'+(d.getMonth()+1)+'-'+d.getDate();
    document.getElementById('date').innerHTML = date;
}

function btnPointerOn(id){
    id.style = 'background-color: blue; color:white;'
}

function btnPointerOff(id){
    id.style = 'background-color: whitesmoke; color:black;'
}

function openSlider(){
    window.open('slider.html','_self')
}