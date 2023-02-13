<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stripe payment</title>
</head>
<body>
@if(session()->has('message'))
          <span style="color:green">{{session('message')}} </span>
      
          @endif
<form action="{{route('paystripe')}}" method="POST">

    @csrf
    <?php
    
    ?>
  <script
    src="https://checkout.stripe.com/checkout.js"
    class="stripe-button"
    data-key="pk_test_51MOxl8HlsHgZHE1GZ7oScIP4qo0yUwszGQZfidFDnYAyicQ7yPdCpb1LvZL4yhVHDVG3zhF2V5lYkQQJXQOd5hfH001DKpRbB5"
    data-name="Demo payment"
    data-description="project subscription"
    data-amount="15400"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-currency="usd"
    data-label="Make Payment">
  </script>
</form>
    
</body>
</html>