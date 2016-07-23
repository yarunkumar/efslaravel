<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eagle Financial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
 <style>
           html, body {
               height: 100%;
                               background: url('http://zellox.com/wp-content/uploads/2016/02/background-image-html.jpg') no-repeat center center fixed;
           }
                       </style>
</head>
<body>
<div class="container">
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
