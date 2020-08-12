$(document).ready(function(){

    cat();
    getCat();
    product();
    customProduct();

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

  function customProduct(){

  		$.ajax({
  			url	:	"action.php",
  			method:	"POST",
  			data	:	{getCustomProduct:1},
  			success	:	function(data){
  				$("#get_Custom_product").html(data);
  			}
  		})
  	}

})
