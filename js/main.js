(function(){
  "use strict";
  document.addEventListener('DOMContentLoaded', function(){
    //console.log("listo");
    var map = L.map('mapa').setView([-0.303356, -78.454543], 16);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    L.marker([-0.303356, -78.454543]).addTo(map)
        .bindPopup('Life Artesanal.<br> Tu heladería.')
        .openPopup();
        //.bindTooltip('un tooltip')
        //.openTooltip()
  });//DOM CONTENT LOADED
})();
