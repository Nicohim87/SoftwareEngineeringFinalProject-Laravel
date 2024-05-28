btn = document.getElementById('hamburger');
side = document.getElementById('sidebar'); 

let n = 0;

btn.addEventListener('click', () => {
    if(n == 0){
        n = 1;
        side.style.marginLeft = '-20vw'
    }
    else{
        n = 0;
        side.style.marginLeft = '0'
    }
});