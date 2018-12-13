(function(){
  "use strict";
  document.addEventListener('DOMContentLoaded', function(){
    //console.log("listo");
    var map = L.map('mapa').setView([-0.316435, -78.458774], 17);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    L.marker([-0.316435, -78.458774]).addTo(map)
        .bindPopup('Life Artesanal.<br> Tu heladería.')
        .openPopup();
        //.bindTooltip('un tooltip')
        //.openTooltip()
  });//DOM CONTENT LOADED
})();

$(function(){
  //alert("funciona");

  //programa de helados
  //$('div.ocultar').hide();
  $('.programa-evento .info-curso:first').show();
  $('.menu-programa a:first').addClass('activo');
  $('.menu-programa a').on('click',function(){
    $('.menu-programa a').removeClass('activo');
    $(this).addClass('activo');
    $('.ocultar').hide();
    var enlace=$(this).attr('href');
    $(enlace).fadeIn(1000);
    //console.log(enlace);
    return false;
  });

  //Animaciones para los números
  $('.resumen-helado li:nth-child(1) p').animateNumber({number:20},1000);
  $('.resumen-helado li:nth-child(2) p').animateNumber({number:30},1200);
  $('.resumen-helado li:nth-child(3) p').animateNumber({number:4},600);

  //Cuenta regresiva
  $('.cuenta-regresiva').countdown('2019/01/31 15:00:00',function(event){
    $('#dias').html(event.strftime('%D'));
    $('#horas').html(event.strftime('%H'));
    $('#minutos').html(event.strftime('%M'));
    $('#segundos').html(event.strftime('%S'));
  });

});
