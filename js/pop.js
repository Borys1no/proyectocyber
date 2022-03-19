var btnAbrir = document.getElementById('generar-volante'),
    overlay = document.getElementById('overLay'),
    popup = document.getElementById('popUp'),
    close = document.getElementById('btn-cerrar-popup');


btnAbrir.addEventListener('click', function(){
    overlay.classList.add('active');
    popup.classList.add('active');
});

close.addEventListener('click', function(){
    overlay.classList.remove('active');
    popup.classList.remove('active');
});