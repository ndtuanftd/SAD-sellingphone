<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>payment</title>
  <link rel="stylesheet" href="../static/styles.css">
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.15.4/css/all.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">


  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>
  <script>
    function cash(){
      document.getElementById("header").innerHTML = "";
      document.getElementById("mastercard").innerHTML = "";
    }

    function mastercard(){
      document.getElementById("header").innerHTML = "Your Mastercard number";
      document.getElementById("mastercard").innerHTML = "<input type='text' class='form-control' placeholder='Enter your number here'>";
    }
  </script>
  <div class="container">
    <button class="back">
      <a href="index.php?page=cart" style="color: black;">
        <i class="fas fa-chevron-left"></i>
        Back to cart
      </a>
    </button>

    <div class="container py-5 h-100 paynemt">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-7">
                  <div class="p-5 ship-card">
                    <h2>Shipping information</h2>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="First name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Street">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Phone</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="123-456-7890">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="example@domain.com">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="p-5 payment-card">
                    <h3>Payment method</h3>
                    <h6>Choose payment method</h6>
                    <!-- <div class="btn-group-vertical" role="group" aria-label="Basic example"> -->
                    <button type="button" class="btn btn-outline-primary btn-block btn-md mt-4" onclick="cash()">
                      Cash
                    </button>
                    <button type="button"
                      class="btn btn-outline-primary btn-block btn-md mt-2 active" onclick="mastercard()">Mastercard</button>
                    
                    <h5 class="mt-5" id="header"></h5>
                    <div class="form-inline" id="mastercard">

                    </div>
                    <!-- </div> -->
                    <h5 class="mt-5">Voucher</h5>
                    <div class="form-inline">
                      <input type="text" class="form-control" placeholder="PROJECT7">
                      <button type="button" class="btn btn-outline-primary ml-4">Apply</button>
                    </div>

                    <h5 class="mt-lg-5">Summary</h5>


                    <div class="payment-calc" style="font-size: 14px;">
                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Subtotal</p>
                        <p class="mb-2"><b>60.000.000 VND</b></p>
                      </div>

                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Discount</p>
                        <p class="mb-2"><b>-2.000.000 VND</b></p>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Fee</p>
                        <p class="mb-2"><b>0 VND</b></p>
                      </div>
                      <hr class="my-2">
                      <div class="d-flex justify-content-between mb-4">
                        <p class="mb-2">Total(Incl. taxes)</p>
                        <p class="mb-2"><b>58.000.000 VND</b></p>
                      </div>
                    </div>

                    <button type="button" class="btn btn-primary btn-block btn-md">
                      <a href="index.php?page=congrat" style="color: white">Proceed to payment</a>
                    </button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</body>
</html>