var slide_index = 1;
var slide_index1 = 1;
displaySlides(slide_index);
displaySlides1(slide_index1);
function nextSlide(n) {
  
  displaySlides(slide_index += n);
  

  
  
}
function nextSlide1(n) {
  
  
 
  
  displaySlides1(slide_index1 += n);
 
  
  
}

function currentSlide(n) {
  
  displaySlides(slide_index = n);
  
  
}
function currentSlide1(n) {
  displaySlides1(slide_index1 = n);
  
}

function displaySlides(n) {
  var i;
  
  var slides = document.getElementsByClassName("showSlide");
  
  document.getElementById('first'+n).style.backgroundColor = '#3a6efd' ;
  if (n > slides.length) { slide_index = 1 }
  if (n < 1) { slide_index = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    
  }
  var j;
  for(j = 1; j <= slides.length; j++) {
    if(j!=slide_index)
        {
          document.getElementById('first'+j).style.backgroundColor = 'white' ;
        } }
  slides[slide_index - 1].style.display = "block";
}

function displaySlides1(n) {
  var i;
  var slides = document.getElementsByClassName("sshowSlide");
  document.getElementById('second'+n).style.backgroundColor = '#3a6efd' ;
  if (n > slides.length) { slide_index1 = 1 }
  if (n < 1) { slide_index1 = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  var j;
  for(j = 1; j <= slides.length; j++) {
    if(j!=slide_index1)
        {
          document.getElementById('second'+j).style.backgroundColor = 'white' ;
        } }
  slides[slide_index1 - 1].style.display = "block";
}



