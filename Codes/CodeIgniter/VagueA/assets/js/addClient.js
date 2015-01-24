$(document).ready(function() {


   $("#office").hide();
    $("#so").hide();

   // alert("cobi");


    $("#type")
  .change(function () {
   
    var str;
    
    $( "#type option:selected" ).each(function() {
    
    if($(this).text()=="Office")
    {
      $("#ordinary").fadeOut(500, function() {
        $("#so").fadeOut(500, function() {
          $("#office").fadeIn(1000);
        });
      });
    }

    else if ($(this).text()=="Chairman" || $(this).text()=="Faculty")
    {
      $("#office").fadeOut(500, function() {
        $("#so").fadeOut(500, function() {
          $("#ordinary").fadeIn(1000);
        });
      });
      
    }

    else
    {
      $("#office").fadeOut(500, function() {
        $("#ordinary").fadeOut(500, function() {
          $("#so").fadeIn(1000);
        });
      });
    }
   
    });
   
    
 

  })
  .change();



/*

  $("#officeType").click(function() {

  	
    $("#ordinary").fadeOut(500, function() {

    $("#office").fadeIn(1000);
    });

    $("#so").fadeOut(500, function() {

    $("#office").fadeIn(1000);
    });



  });

  
   $("#ordi").click(function() {

    
    $("#office").fadeOut(500, function() {

    $("#ordinary").fadeIn(1000);
    });

    $("#so").fadeOut(500, function() {

    $("#ordinary").fadeIn(1000);
    });



  });


   $("#soType").click(function() {

    
    $("#ordinary").fadeOut(500, function() {

    $("#so").fadeIn(1000);
    });

    $("#office").fadeOut(500, function() {

    $("#so").fadeIn(1000);
    });



  }); 
*/

});