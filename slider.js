var slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  console.log(slides.length);
  console.log("Slide index before if: %i", slideIndex);
  if (n >= slides.length) {slideIndex = 0}
  console.log("Slide index after if: %i", slideIndex);
  if (n < 0) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  console.log(slideIndex);
  slides[slideIndex].style.display = "block";
}
