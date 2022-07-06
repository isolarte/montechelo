<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
  <script>
      $(document).ready(function(){
          $("#clientes").click(function(){
              $("#informacion").load('./view/clientes.html');
              
          });
          $("#items").click(function(){
              $("#informacion").load('./view/item.html');
          });
          $("#factura").click(function(){
              $("#informacion").load('./view/factura.html');
          });
          $("#excepcion").click(function(){
              $("#informacion").load('./view/exception.html');
          });
      });
  </script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Servicio A</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a id='clientes'  href="#">Clientes</a></li>
        <li><a id='items' href="#">Items</a></li>
        <li><a id='factura' href="#">Factura</a></li>
        <li><a id='excepcion' href="#">Excepciones</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid bg-3 text-center jumbotron" id="informacion">    
  
</div><br><br>

<footer class="container-fluid text-center">
  <p>Ivan Solarte</p>
</footer>

</body>
</html>
