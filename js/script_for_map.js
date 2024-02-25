var map = L.map('map').setView([22.5331, 88.3336], 11);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

let latitudes    = [22.6031, 22.5168, 22.5388] ;
let longitudes = [88.4671, 88.3491, 88.3289] ;
let marker = [] ;

let j = 0 ;
latitudes.forEach(element => {
    marker.push(L.marker([element , longitudes[j ++]]).addTo(map)) ;
});