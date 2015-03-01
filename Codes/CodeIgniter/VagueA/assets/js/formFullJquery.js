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




});