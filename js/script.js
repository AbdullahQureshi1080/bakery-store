$(document).ready(function(){

    cat();
    getCat();
    product();

  function cat(){
            $.ajax({
                url	:	"action.php",
                method:	"POST",
                data	:	{category:1},
                success	:	function(data){
                    $("#get_category").html(data);

                }
            })
        }

    function getCat(){

        $("body").delegate(".category","click",function(event){
            $("#get_product").html("<h3>Loading...</h3>");
            event.preventDefault();
            var cid = $(this).attr('cid');

                $.ajax({
                url		:	"action.php",
                method	:	"POST",
                data	:	{get_seleted_Category:1,cat_id:cid},
                success	:	function(data){
                    $("#get_product").html(data);
                    if($("body").width() < 480){
                        $("body").scrollTop(683);
                    }
                }
            })

        })

    }

function product(){

		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{getProduct:1},
			success	:	function(data){
				$("#get_product").html(data);
			}
		})
	}


})


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
// Add active class to the current button (highlight it)
// var btnContainer = document.getElementById("get_category");
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
