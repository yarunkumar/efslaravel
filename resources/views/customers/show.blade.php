@extends('app')
@section('content')

    <h1>Customer </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($customer['name']); ?></td>
            </tr>
            <tr>
                <td>Customer ID</td>
                <td><?php echo ($customer['cust_number']); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo ($customer['address']); ?></td>
            </tr>
            <tr>
                <td>City </td>
                <td><?php echo ($customer['city']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($customer['state']); ?></td>
            </tr>
            <tr>
                <td>Zip </td>
                <td><?php echo ($customer['zip']); ?></td>
            </tr>
            <tr>
                <td>Home Phone</td>
                <td><?php echo ($customer['home_phone']); ?></td>
            </tr>
            <tr>
                <td>Cell Phone</td>
                <td><?php echo ($customer['cell_phone']); ?></td>
            </tr>


            </tbody>
        </table>
    </div>


    <?php
    $stockprice=null;
    $stotal = 0;
    $svalue=0;
    $itotal = 0;
    $ivalue=0;
    $iportfolio = 0;
    $cportfolio = 0;



    ?>
    <br>
    <h2>Stocks </h2>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr class="bg-info">
                <th> Symbol </th>
                <th>Stock Name</th>
                <th>No. of Shares</th>
                <th>Purchase Price</th>
                <th>Purchase Date</th>
                <th>Original Value</th>
                <th>Current Price</th>
                <th>Current Value</th>
            </tr>
            </thead>

            <tbody>





            @foreach($customer->stocks as $stock)

                <tr>
                    <td>{{ $stock->symbol }}</td>
                    <td>{{ $stock->name }}</td>
                    <td>{{ $stock->shares }}</td>
                    <td>{{ $stock->purchase_price }}</td>
                    <td>{{ $stock->purchased }}</td>
                    <td>{{ $stock->shares *  $stock->purchase_price }}</td>
                    <?php $stotal= $stotal+ ($stock->shares *  $stock->purchase_price)?>
                    <?php
                        $URL = "http://www.google.com/finance/info?q=NSE:" . $stock->symbol;
                        $file = fopen("$URL", "r");
                        $r = "";
                        do {
                            $data = fread($file, 500);
                            $r .= $data;
                        } while (strlen($data) != 0);
                    
                        $json = str_replace("\n", "", $r);

                        
                        $data = substr($json, 4, strlen($json) - 5);

                        
                        $json_output = json_decode($data, true);
                       
                        $price = "\n" . $json_output['l'];
                        

                        ?>
                      <td><?php echo '$', $price ?></td>
                      <td><?php echo $price * $stock->shares; $svalue= $svalue + ($stock->shares * $price) ?></td>



               </tr>


            @endforeach
            <h4>
                <?php echo 'Total of Initial Stock Portfolio $', number_format($stotal,2);?>
                <br>
                <?php echo 'Total Current Stock Portfolio $',number_format($svalue,2)?>
            </h4>






            </tbody>
        </table>
    </div>
    <br>
    <h3>Invesmtents </h3>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr class="bg-info">
                <th> Category </th>
                <th>Description</th>
                <th>Acquired value</th>
                <th>Acquired Date</th>
                <th>Recent value</th>
                <th>Recent Date</th>
            </tr>
            </thead>

            <tbody>

            @foreach($customer->investments as $investment)
                <tr>
                    <td>{{ $investment->category }}</td>
                    <td>{{ $investment->description }}</td>
                    <td>{{ $investment->acquired_value }}</td>
                    <td>{{ $investment->acquired_date }}</td>
                    <td>{{ $investment->recent_value }}</td>
                    <td>{{ $investment->recent_date }}</td>
                    <?php $itotal= $itotal + $investment->acquired_value; $ivalue= $ivalue + $investment->recent_value?>


                </tr>


            @endforeach
            <h4>
                <?php echo 'Total of Initial Investment Portfolio $', number_format($itotal,2);?>
                <br>
                <?php echo 'Total Current Investment Portfolio $',number_format($ivalue,2)?>
            </h4>
            </tbody>
        </table>
    </div>







@stop
