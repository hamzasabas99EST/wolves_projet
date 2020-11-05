<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style1.css"  type="text/css">

</head>
<body>
<div class="sidebar" id="mysidBar" >
    <a href="javascript:void(0)" class="closebtn" onclick="close_sidebar()" >&times;</a>
    <ul class="list_sidebar">
        <li class="link_sidebar"><a href="#">Dashboard</a></li>
        <li class="link_sidebar"><a href="#">Réservation</a></li>
        <li class="link_sidebar"><a href="#">Mes réservations</a></li>
        <li class="link_sidebar"><a href="#">Mes matchs</a></li>
    </ul>
</div>
<script>
    function close_sidebar(){
      var sidebar=document.getElementById("mysidBar");
      sidebar.style.width="0%" ;
      sidebar.style.display="none" ;
      
    }
</script>
</body>
</html>