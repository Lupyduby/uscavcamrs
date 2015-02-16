$(document).ready(function() {


   $("#equipments").hide();
    $("#software").hide();

   // alert("cobi");

$("#act").click(function() {

 $("#equipments").fadeOut(500, function() {
        $("#software").fadeOut(500, function() {
          $("#activity").fadeIn(1000);
        });
      });
});


$("#equip").click(function() {

 $("#activity").fadeOut(500, function() {
        $("#software").fadeOut(500, function() {
          $("#equipments").fadeIn(1000);
        });
      });
});


$("#soft").click(function() {

 $("#equipments").fadeOut(500, function() {
        $("#activity").fadeOut(500, function() {
          $("#software").fadeIn(1000);
        });
      });
});



/*

    $("#campus")
  .change(function () {
   
    var str;
    
    $( "#campus option:selected" ).each(function() {
    
    if($(this).text()=="Talamban")
    {
      $("#sc").fadeOut(500, function() {
        $("#dc").fadeOut(500, function() {
          $("#tc").fadeIn(1000);
        });
      });
    }

    else if ($(this).text()=="South")
    {
      $("#tc").fadeOut(500, function() {
        $("#dc").fadeOut(500, function() {
          $("#sc").fadeIn(1000);
        });
      });
      
    }

    else
    {
      $("#tc").fadeOut(500, function() {
        $("#sc").fadeOut(500, function() {
          $("#dc").fadeIn(1000);
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