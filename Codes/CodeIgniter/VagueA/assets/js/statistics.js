/*-------------Don't change this one na!--------------------*/

$(document).ready(function() {


$("#policyDiv").hide();
  $("#stepsDiv").hide();
  $("#hallDiv").hide();

  $("#policy").click(function() {

     $("#stepsDiv").fadeOut(500, function() { 
    $("#guidelinesDiv").fadeOut(500, function() {
      $("#hallDiv").fadeOut(500, function() {
    $("#policyDiv").fadeIn(1000);
    });
    });
    });
   });

  $("#guidelines").click(function() {
    $("#stepsDiv").fadeOut(500, function() { 
      $("#policyDiv").fadeOut(500, function() {
        $("#hallDiv").fadeOut(500, function() {
       $("#guidelinesDiv").fadeIn(1000);
     });
      });
    });
  });

    $("#steps").click(function() {

      $("#policyDiv").fadeOut(500, function() { 
        $("#guidelinesDiv").fadeOut(500, function() {
          $("#hallDiv").fadeOut(500, function() {
           $("#stepsDiv").fadeIn(1000);
        });
           });
      });
    });


    $("#halls").click(function() {

      $("#policyDiv").fadeOut(500, function() { 
        $("#guidelinesDiv").fadeOut(500, function() {
          $("#stepsDiv").fadeOut(500, function() {
           $("#hallDiv").fadeIn(1000);
          });
        });
      });
    });

      

  });


