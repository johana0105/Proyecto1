<?php
include_once 'menu_horizontal.php';
include_once 'menu_vertical.php';
include 'consultas.php';
$enlace= conexion();
var_dump(cuadro_crm($enlace));

?>


<div class="container" id="formato_c">
   <div class="row">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Customers</h5>
        <p class="card-text">Colocar valor base datos total</p>
      
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Orders</h5>
        <p class="card-text">Colocar valor base datos total</p>
      </div>
    </div>
  </div>
       
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Revenue</h5>
        <p class="card-text">Colocar valor base datos total</p>
      </div>
    </div>
  </div>
       
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Growth</h5>
        <p class="card-text">Colocar valor base datos total</p>
      </div>
    </div>
  </div>     
       
       
</div>
</div>    
</body>      

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    

 <script src="https://code.highcharts.com/highcharts.src.js"></script> 
 
</html>