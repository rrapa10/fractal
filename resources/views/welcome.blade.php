<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Fractal!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

  

    <style> .navbar{margin-bottom: 20px;} </style>
</head>
<body>
<div class="container" style="padding:20px;">
    <h1 style="text-align:center;">
        <a href="/customer"> Fractal </a>
    </h1>
    <hr>

  <div id="main-customer"></div>
 
  <script src="/js/app.js"></script>
  <script>
    $(document).ready(function(){
        $('#customer-table').DataTable();
    })
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

</div>
</body>
</html>
