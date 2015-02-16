$(document).ready(function() {


   $("#sc").hide();
    $("#dc").hide();
    $("#sct").hide();
    $("#dct").hide();

   // alert("cobi");


    $("#campus")
  .change(function () {
   
    var str;
    
    $( "#campus option:selected" ).each(function() {
    
    if($(this).text()=="Talamban")
    {
      $("#sc").fadeOut(500);
      $("#sct").fadeOut(500);
        $("#dc").fadeOut(500, function() {
        $("#dct").fadeOut(500);
          $("#tc").fadeIn(3000);
          $("#tct").fadeIn(3000);
        });
    }

    else if ($(this).text()=="South")
    {
      $("#tct").fadeOut(500);
      $("#tc").fadeOut(500);
        $("#dc").fadeOut(500, function() {
        $("#dct").fadeOut(500);
          $("#sc").fadeIn(3000);
          $("#sct").fadeIn(3000);
        });
    }

    else
    {
      $("#tc").fadeOut(500);
      $("#tct").fadeOut(500);
        $("#sc").fadeOut(500, function() {
        $("#sct").fadeOut(500);
          $("#dc").fadeIn(3000);
          $("#dct").fadeIn(3000);
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