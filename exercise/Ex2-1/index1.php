<!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Discount Calculator</title>
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
h2 {
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
    <link rel="stylesheet" href="main.css">
   </head>
   <main>
<form action="productdiscount.php" method="post">
<table id = "tb" border = "1">
     <h2>Product Discount Calculator</h2>
      <div id = "a">
        <label>Product Description :</label>
        <input type="text" name="product_description"><br>

        <label>List Price :</label>
        <input type="text" name="list_price"><br>

        <label>Discount Percent :</label>
        <input type="text" name="discount_percent"><br>
      </div>

      <div id="buttons">
        <label >&nbsp;</label>
        <input type="submit" value="Calculate Discount"><br>
      </div>
</table>
</main>
   </form>
   </html>