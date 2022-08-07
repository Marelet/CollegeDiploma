var slideIndex = [1, 1, 1, 1];
var slideId = [ "class1","class2","class3","class4"];

showSlides(1, 0);
showSlides(1, 1);
showSlides(1, 2);
showSlides(1, 3);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function openFormCall() {
  document.getElementById("myFormCall").style.display = "block";
}

function closeFormCall() {
  document.getElementById("myFormCall").style.display = "none";
}


function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
