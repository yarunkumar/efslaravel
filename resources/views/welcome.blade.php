<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <?php
echo "<!DOCTYPE html>\n"; 
echo "<html>\n"; 
echo "\n"; 
echo "<head>\n"; 
echo "</head>\n"; 
echo "<body>\n"; 
echo "\n"; 
echo "<div align=\"center\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/5/59/Bald_Eagle_-\n"; 
echo "\n"; 
echo "_%22Helga%22_-_Haliaeetus_leucocephalus2.jpg\" alt=\"Eagle Image\" align=\"middle\" width=\"104\" \n"; 
echo "\n"; 
echo "height=\"142\"></div>\n"; 
echo "  <h2><center><FONT COLOR=\"Blue\">Eagle Financial Services</FONT></center></h2>\n"; 
echo "  <h3><center><FONT COLOR=\"Blue\">Your Midwest Financial Services Partner</FONT></center></h3>\n"; 
echo "  <h1><center><FONT COLOR=\"Orange\">Financial Advisor Portfolio Planner</FONT></center></h1>\n"; 
echo "<br>\n"; 
echo "<br>\n"; 
echo "<br>\n"; 
echo "<br>\n"; 
echo "<h1><FONT COLOR=\"Orange\">Portfolio Planner Options</FONT></h1>\n"; 
echo "<select name=\"menu1\" id=\"menu1\">\n"; 
echo "<option value=\"\">Select an option</option>\n"; 
echo "<option value=\"https://eaglefinancialservices.herokuapp.com/customers\">View Customers</option>\n";
echo "<option value=\"https://eaglefinancialservices.herokuapp.com/customers/create\">Add a customer</option>\n";
echo "<option value=\"https://eaglefinancialservices.herokuapp.com/stocks\">View Stocks</option>\n";
echo "<option value=\"https://eaglefinancialservices.herokuapp.com/investments\">View Investments</option>\n";
echo "<option value=\"https://eaglefinancialservices.herokuapp.com/bonds\">View Bonds</option>\n";
echo "\n"; 
echo "</select>\n"; 
echo "<script type=\"text/javascript\">\n"; 
echo " var urlmenu = document.getElementById( 'menu1' );\n"; 
echo " urlmenu.onchange = function() {\n"; 
echo "      window.open( this.options[ this.selectedIndex ].value );\n"; 
echo " };\n"; 
echo "</script>\n"; 
echo "\n"; 
echo "</body>\n"; 
echo "</html>\n"; 
echo "\n";
?>
    </body>
</html>
