// var rangeSlider = document.getElementById("rs-range-line");
// var rangeBullet = document.getElementById("rs-bullet");
//
// rangeSlider.addEventListener("input", showSliderValue, false);
//
// function showSliderValue() {
// rangeBullet.innerHTML = rangeSlider.value;
// var bulletPosition = (rangeSlider.value /rangeSlider.max);
// rangeBullet.style.left = (bulletPosition * 578) + "px";
// }

//
// function getItemName(currentValue){
//     document.getElementById("show-text").innerHTML = currentValue;
//     return currentValue;
// }
// function goToDetails(){
//   var itemName=getItemName();
// }
// filterSelection("all")
// function filterSelection(c) {
//   var x, i;
//   x = document.getElementsByClassName("card");
//   if (c == "all") c = "";
//   for (i = 0; i < x.length; i++) {
//     RemoveClass(x[i], "show");
//     if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
//   }
// }
//
// function AddClass(element, name) {
//   var i, arr1, arr2;
//   arr1 = element.className.split(" ");
//   arr2 = name.split(" ");
//   for (i = 0; i < arr2.length; i++) {
//     if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
//   }
// }
//
// function RemoveClass(element, name) {
//   var i, arr1, arr2;
//   arr1 = element.className.split(" ");
//   arr2 = name.split(" ");
//   for (i = 0; i < arr2.length; i++) {
//     while (arr1.indexOf(arr2[i]) > -1) {
//       arr1.splice(arr1.indexOf(arr2[i]), 1);
//     }
//   }
//   element.className = arr1.join(" ");
// }
//
// // Add active class to the current button (highlight it)
// var btnContainer = document.getElementById("myBtnContainer");
// var btns = btnContainer.getElementsByClassName("btn-filter");
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function(){
//     var current = document.getElementsByClassName("activated");
//     current[0].className = current[0].className.replace(" activated", "");
//     this.className += " activated";
//   });
// }
//
//
// function filtersearch() {
// var getName = document.getElementById("input-search").value;
// filterSelection(getName);
// }
