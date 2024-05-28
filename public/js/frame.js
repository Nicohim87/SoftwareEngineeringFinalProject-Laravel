btn = document.getElementById('hamburger');
side = document.getElementById('sidebar'); 
cont = document.getElementById('contentBox')

let n = 0;

btn.addEventListener('click', () => {
    if(n == 0){
        n = 1;
        side.style.marginLeft = '-20vw'
        cont.style.width = '100vw'
        cont.style.marginLeft = '0vw'
    }
    else{
        n = 0;
        side.style.marginLeft = '0'
        cont.style.width = '80vw'
        cont.style.marginLeft = '20vw'
    }
});