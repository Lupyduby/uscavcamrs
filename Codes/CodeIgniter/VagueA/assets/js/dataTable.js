$(document).ready( function () {
    
$('#table_id').DataTable();
$('#table_id2').DataTable();
$('#table_id3').DataTable();
$("#basicModal").show();


$("#equipments").hide();
    $("#software").hide();

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



/*for more info go to http://www.highcharts.com/docs */
  /*-------dli pwede ky mo conflict sa data table. murag e new ko ni,,, chaka na dayon
    var m = $('#m');
    var val = ['August', 'July']; 

    $('#containerDept').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Audio Visual Center Usage'
        },
        xAxis: {
            categories:<?php echo $monthJ; ?>/*para ni sa month. it should be dynamic*/
                
   /*         
        },
        yAxis: [{
            min: 0,
            title: {
                text: 'Number of Usage'
            }
        }, {
            title: {
                text: 'Number of Usage'
            },
            opposite: true
        }],
        legend: {
            shadow: false
        },
        tooltip: {
            shared: true
        },
        plotOptions: {
            column: {
                grouping: false,
                shadow: false,
                borderWidth: 0
            }
        }, 
        series: <?php echo $monthK; ?>
        
    });





/******---------Export PDF-------------****************/


 $('#table_client').DataTable( {
        dom: 'T<"clear">lfrtip',
        tableTools: {
            "aButtons": [
                {
                    "sExtends": "xls",
                    "mColumns": [0,1,2,3,4],
                },
                {
                    "sExtends": "pdf",
                    "sPdfOrientation": "landscape",
                    "mColumns": [0,1,2,3,4],
                },
                
            ],
            "sSwfPath": "<?php echo base_url(); ?>assets/js/swf/copy_csv_xls_pdf.swf"
        }
    } );


 $('#table_dept').DataTable( {
        dom: 'T<"clear">lfrtip',
        tableTools: {
            "aButtons": [
                {
                    "sExtends": "xls",
                    "mColumns": [0,1,2,3,4,5,6,7,8,9,10,11,12],
                },
                {
                    "sExtends": "pdf",
                    "sPdfOrientation": "landscape",
                    "mColumns": [0,1,2,3,4,5,6,7,8,9,10,11,12],
                },
                
            ],
            "sSwfPath": "<?php echo base_url(); ?>assets/js/swf/copy_csv_xls_pdf.swf"
        }
    } );



  $('#table_soft').DataTable( {
        dom: 'T<"clear">lfrtip',
        tableTools: {
            "aButtons": [
                {
                    "sExtends": "xls",
                    "mColumns": [0,1,2,3,4,5,6],
                    "bHeader": true,
                },
                {
                    "sExtends": "pdf",
                    "sPdfOrientation": "landscape",
                    "mColumns": [0,1,2,3,4,5,6],                    
                    "bHeader": true,
                },
                
            ],
            "sSwfPath": "<?php echo base_url(); ?>assets/js/swf/copy_csv_xls_pdf.swf"
        }
    } );





  
} );

