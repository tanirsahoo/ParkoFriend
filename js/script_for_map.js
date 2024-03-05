function onLocationFound(e) {
    var radius = e.accuracy / 2;
    L.marker(e.latlng , {icon: redIcon}).addTo(map)
      .bindPopup("You are within " + radius + " meters from this point").openPopup();
    // L.circle(e.latlng, radius).addTo(map);
    alert("Your Current Location is: " + e.latlng) ;
  }

var map = L.map('map').setView([22.5331, 88.3336], 11);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

let latitudes    = [22.6031, 22.5268, 22.5388, 22.5688, 22.5188, 22.5688, 22.5988, 22.6088, 22.5388, 22.5188] ;
let longitudes = [88.4871, 88.3491, 88.3389, 88.3989, 88.3789, 88.3789, 88.4089, 88.3789, 88.3789, 88.3989] ;
let marker = [] ;

var redIcon = new L.Icon({
    iconUrl: 'img/parkinglogo.png',
    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    iconSize: [25, 41],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34],
    shadowSize: [41, 41]
});

let j = 0 ;
latitudes.forEach(element => {
    marker.push(L.marker([element , longitudes[j ++]], {icon: redIcon}).addTo(map)) ;
});



function searchFunction() {
  let input, filter, ul, li, txtValue;
  input = document.getElementById('searchInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById('itemList');
  li = ul.getElementsByTagName('li');

  for (let i = 0; i < li.length; i++) {
      txtValue = li[i].textContent || li[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = '';
      } else {
          li[i].style.display = 'none';
      }
  }
}