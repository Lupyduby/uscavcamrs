$(document).ready(function() {

  $("#policyDiv").hide();

  $("#policy").click(function() {

    
    $("#guidelinesDiv").fadeOut(500, function() {

    $("#policyDiv").fadeIn(1000);
    });

  });

  $("#guidelines").click(function() {

    
    $("#policyDiv").fadeOut(500, function() {

    $("#guidelinesDiv").fadeIn(1000);
    });

  });


});