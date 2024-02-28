let star_max = 4;
let star_min = 1;
var star_selected = 1;

function btnNext() {
    if(star_selected != star_max){
        star_selected += 1;
    }    
    document.getElementById('star').src = 'assets/star-'+star_selected+'.jpg';
}

function btnPrev() {
    if(star_selected != star_min){
        star_selected -= 1;
    }   
    document.getElementById('star').src = 'assets/star-'+star_selected+'.jpg';    
}