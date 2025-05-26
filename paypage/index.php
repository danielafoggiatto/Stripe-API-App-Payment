<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Pay Page</title>
</head>
<body>
  <div class="container">
    <h2 class="my-4 text-center">Intro to React Course[$50]</h2>
      <form action="../charge.php" method="post" id="payment-form">
          <div class="form-row">
            <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
            <input type="text" name="last_name"  class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
            <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Adress" >

              <div id="card-element" class="form-control"><!-- A Stripe Element will be inserted here. --></div>

              <div id="card-errors" role="alert"></div>
          </div>
          <button type="submit">Submit Payment</button>
      </form>
  </div>


    <script src="https://js.stripe.com/v3/"></script>
    <script src="./js/charge.js"></script>
    <script src="https://js.stripe.com/basil/stripe.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>