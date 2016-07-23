<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eagle Financial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
 <style>
           html, body {
               height: 100%;
                               background: url('http://people.stern.nyu.edu/yy1112/images/bg.jpg') no-repeat center center fixed;
           }
                       </style>
</head>
<body>
<div class="container">
	<a href="http://localhost/efslaravel/public">Home </a> |
    <a href="{{ action('CustomerController@index') }}">Customers</a> |
    <a href="{{ action('StockController@index') }}">Stocks</a> |
    <a href="{{ action('InvestmentController@index') }}">Investments</a> |
    <a href="{{ action('BondController@index') }}">Bonds</a>
</div>
<hr>
<div class="container">
    @yield('content')
</div>
</body>
</html>
