<?php
require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);
?>
<head>
<meta charset='utf-8' />
<link href='../lib/main.css' rel='stylesheet' />
<script src='../lib/main.js'></script>
<script src='../lib/pt-br.js'></script>
<script>


  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      locale: "pt-br",
      events:
          <?php include('eventos.php') ?>,
    eventClick: function(arg) {
        var dia = arg.event.start.getDate();
        var mes = arg.event.start.getMonth()+1;
        var ano = arg.event.start.getFullYear();
        var data1 = ano+"-"+ mes +"-"+dia;
        // opens events in a popup window
        //window.open(arg.event.url, 'calend.php', 'width=700,height=600');
 		
 		window.location.href = "lista_log.php?data="+data1;
        arg.jsEvent.preventDefault() // don't navigate in main tab
      },
     
    });

    calendar.render();
  });

  

  
</script>
<style>




  body {
   
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 640px;
    margin: 0 auto;
  }

</style>
</head>
<body>


  <div id='calendar'></div>

</body>

