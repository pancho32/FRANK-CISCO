<h1>FERRETERIA REFORMA </h1>



<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Menu - Categories</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#menu" ).menu({
      items: "> :not(.ui-widget-header)"
    });
  } );
  </script>
  <style>
  .ui-menu { width: 200px; }
  .ui-widget-header { padding: 0.2em; }

  </style>
</head>
<body>
 
<ul id="menu">
  <li class="ui-widget-header"><div>Ventas</div></li>
  <li><div><td>
        <a href="/micake/ventas">Lista de ventas </a>    </td></div></li>
  <li><div><td>
        <a href="/micake/ventas/add">Nueva Venta </a>    </td></div></li>
  
  <li class="ui-widget-header"><div>Productos</div></li>
  <li><div><td>
        <a href="/micake/products">Lista de Productos</a>    </td></div></li>
  <li><div><td>
        <a href="/micake/products/add">Agregar Producto</a>    </td></div></li>
 
</ul>
 
 
</body>
</html>










