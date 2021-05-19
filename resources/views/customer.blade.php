<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Fractal!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" 
	  crossorigin="anonymous"></script>

	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"  crossorigin="anonymous">
	<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

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
  		$("#customer-table").DataTable({
  			processing: true,
  			serverSide: true,
  			columns:[
  				{
  					data: 'first_name',
  					name: 'first_name'
  				},
  				{
  					data: 'last_name',
  					name: 'last_name'
  				},
  				{
  					data: 'email',
  					name: 'email'
  				},
  				{
  					data: 'phone_number',
  					name: 'phone_number'
  				},
  				{
  					data: 'birth_date',
  					name: 'birth_date'
  				}
  			]
  		});
  	})
  </script>

</div>
</body>
</html>
