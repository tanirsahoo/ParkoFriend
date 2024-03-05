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










let search_click = document.getElementById('searchInput');
search_click.addEventListener('Click' , () =>{
     let item_feed = document.getElementById('itemList') ;
     item_feed.innerHTML = `<li>Item 1</li>
     <li>Item 2</li>
     <li>Item 3</li>
     <li>Item 4</li>
     <li>Item 5</li>` ;
     console.log("Search Bar Clicked.!") ;
}) ;

let onClickOutside = (element, callback) => {
    document.addEventListener('click', e => {
      if (!element.contains(e.target)) callback();
    });
  };
  
  onClickOutside('searchInput', () => {
    let item_feed = document.getElementById('itemList') ;
    item_feed.innerHTML = `` ;
    console.log("Outside Search Bar Clicked.!") ;
  });