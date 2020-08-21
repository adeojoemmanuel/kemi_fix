
<?php

//order_process.php

session_start();

$total_price = 0;

$item_details = '';

$order_details = '
<div class="table-responsive" id="order_table">
 <table class="table table-bordered table-striped">
  <tr>  
            <th>Product Name</th>  
            <th>Quantity</th>  
            <th>Price</th>  
            <th>Total</th>  
        </tr>
';

if(!empty($_SESSION["shopping_cart"]))
{
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
  $order_details .= '
  <tr>
   <td>'.$values["product_name"].'</td>
   <td>'.$values["product_quantity"].'</td>
   <td align="right">$ '.$values["product_price"].'</td>
   <td align="right">$ '.number_format($values["product_quantity"] * $values["product_price"], 2).'</td>
  </tr>
  ';
  $total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);

  $item_details .= $values["product_name"] . ', ';
 }
 $item_details = substr($item_details, 0, -2);
 $order_details .= '
 <tr>  
        <td colspan="3" align="right">Total</td>  
        <td align="right">$ '.number_format($total_price, 2).'</td>
    </tr>
 ';
}
$order_details .= '</table>';

?>





<!DOCTYPE html>
<html>
 <head>
  <title>PHP Shopping Cart with Stripe Payment Integration</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/jquery.creditCardValidator.js"></script>
  <style>
  .popover
  {
      width: 100%;
      max-width: 800px;
  }
  .require
  {
   border:1px solid #FF0000;
   background-color: #cbd9ed;
  }
  </style>
 </head>
 <body>






 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">AGRI-FRIV</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">REGISTER
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="register_2.php">Admin</a></li>
          <li><a href="register_1.php">User</a></li>
          
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">LOGIN
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="login_2.php">Admin</a></li>
          <li><a href="login_1.php">User</a></li>
          
        </ul>
      </li>
      <li><a href="#">CONTACT</a></li>
    </ul>
    

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>

  </div>
</nav>

  <div class="container">
   <br />
   <h3 align="center"><a href="#"></a></h3>
   <br />
   <span id="message"></span>
   <div class="panel panel-default">
    <div class="panel-heading">Order Process</div>
               </br>
                       <input type="hidden" name="total_amount" value="<?php echo $total_price; ?>" />
                       <input type="hidden" name="currency_code" value="NGN" />
                       <input type="hidden" name="item_details" value="<?php echo $item_details; ?>" />
                  
                            <h4 align="center">Order Details</h4>
                              <?php echo $order_details; ?>
          <div class="panel-body">
           <h4 align="center">Payment Details</h4>
           <div class="form-group">
            <form id="paymentForm">
                   <div class="form-group">
                       <label for="email">Email Address</label>
                       <input type="email" id="email-address" required  class="form-control"/>
                     </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                  <input type="tel" id="amount" required  class="form-control"/>
                             </div>
                                    <div class="form-group">
                                       <label for="first-name">First Name</label>
                                       <input type="text" id="first-name" class="form-control"/>
                                    </div>
                                            <div class="form-group">
                                                 <label for="last-name">Last Name</label>
                                                <input type="text" id="last-name" class="form-control" />
                                            </div>
                                                   <div class="form-submit">
                                                         <button type="submit" class="btn btn-success btn-sm" onclick="payWithPaystack()"> Pay </button>
                                                   </div>
                                                   </div>
            </form>
               <script src="https://js.paystack.co/v1/inline.js"></script> 
                
    </div>
   </div>
  </div>
 </body>
</html>

<script>
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_f909e797ace5dfe9bce9db3f59ced4658f79a61a', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    firstname: document.getElementById("first-name").value,
    lastname: document.getElementById("first-name").value,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });
  handler.openIframe();
}

</script>
