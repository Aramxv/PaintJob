/* JAVASCRIPT DOCUMENT */

var carColorsArray = [
    "assets/Default.png",
    "assets/Red.png",
    "assets/Blue.png",
    "assets/Green.png"
];

$('#currentColor').change(function(){
    $('#currentImage')[0].src = carColorsArray[this.value];
  });


$('#targetColor').change(function(){
    $('#targetImage')[0].src = carColorsArray[this.value];
    
});