$(document).ready(function(){
  $("#test").vectorMap( {
      map:"ph_mill_en",
      scaleColors: ['#C8EEFF', '#0071A4'],
normalizeFunction: 'polynomial',
hoverOpacity: 0.7,
hoverColor: false,
markerStyle: {
  initial: {
    fill: '#F8E23B',
    stroke: '#383f47'
  }
},
backgroundColor: '#383f47',
markers: [
  {latLng: [14.6488, 121.0509], name: 'Quezon City',style: {fill: 'green'}},
  {latLng: [15.439161,120.792458], name: 'Nueva Ecija', style:{fill: 'red'}},
  {latLng: [14.187671, 121.125084], name: 'Laguna', style: {fill: 'green'}},

]
    });
});
