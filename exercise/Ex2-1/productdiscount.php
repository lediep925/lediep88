


   <?php
	$product_description = filter_input(INPUT_POST, 'product_description');
	$list_price = filter_input(INPUT_POST, 'list_price');
	$discount_percent = filter_input(INPUT_POST, 'discount_percent');
	
        $discount = $list_price * $discount_percent * .01;
        $discount_price = $list_price - $discount;
        
        $list_price_f = "$".number_format($list_price, 2);
        $discount_percent_f = $discount_percent."%";
        $discount_f = "$".number_format($discount, 2);
        $discount_price_f = "$".number_format($discount_price, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
}
main {
    display: block;
    width: 450px;
    margin: 0 auto;
    padding: 1em;
    background: white;
    border: 2px solid navy;
}
h1 {
    margin-top: 0;
    color: navy;
    text-align: center;
    
}
label {
    width: 10em;
    float: left;
    padding-right: 1em;
    padding-bottom: .5em;
}
#a input {
    float: left;
    width: 15em;
    margin-bottom: .5em;
}
#a span {
    padding-left: .25em;
}
#buttons input {
    margin-bottom: .5em;
}
br {
    clear: left;
}
    </style>
</head>
<body>
    <main>
        <table id = "tb" border = "1">
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span><br>

        
        
        </table>
    </main>
</body>
</html>


