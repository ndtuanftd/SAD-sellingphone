<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cart</title>
</head>

<body>
  <div class="container">
    <!-- order summary -->
    <div class="cart-container">
      <div class="cart-items card">
        <h3 class="cart-title"><b>Order summary</b></h3>
        <div class="cart-item card-body wrapper row">
          <img class="cart-item-img col-md-3" src="../media/phone/samsung.jpg" alt="iphone">
          <div class="cart-item-details col-md-9">
            <div class="cart-item-desc row">
              <h6 class="col-md-6"><b>Product name</b></h6>
              <div class="col-md-6 cart-item-price">
                20.0000.000 VND
                <button class="btn" style="padding-top: 0px;">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </div>
            </div>
            <div class="cart-item-quantity">
              <h6 style="padding-top: 30px;">Quantity</h6>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 d-flex">
              <button class="btn btn-link px-1"
                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                <i class="fas fa-minus"></i>
              </button>

              <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" />

              <button class="btn btn-link px-1" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                <i class="fas fa-plus"></i>
              </button>

            </div>
          </div>
        </div>
        <div class="cart-item card-body wrapper row">
          <img class="cart-item-img col-md-3" src="../media/phone/samsung-z.jpeg" alt="iphone">
          <div class="cart-item-details col-md-9">
            <div class="cart-item-desc row">
              <h6 class="col-md-6"><b>Product name</b></h6>
              <div class="col-md-6 cart-item-price">
                20.0000.000 VND
                <button class="btn" style="padding-top: 0px;">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </div>
            </div>
            <div class="cart-item-quantity">
              <h6 style="padding-top: 30px;">Quantity</h6>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 d-flex">
              <button class="btn btn-link px-1"
                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                <i class="fas fa-minus"></i>
              </button>

              <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" />

              <button class="btn btn-link px-1" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                <i class="fas fa-plus"></i>
              </button>

            </div>
          </div>
        </div>
        <div class="cart-item card-body wrapper row">
          <img class="cart-item-img col-md-3" src="../media/phone/samsung2.jpg" alt="iphone">
          <div class="cart-item-details col-md-9">
            <div class="cart-item-desc row">
              <h6 class="col-md-6"><b>Product name</b></h6>
              <div class="col-md-6 cart-item-price">
                20.0000.000 VND
                <button class="btn" style="padding-top: 0px;">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </div>
            </div>
            <div class="cart-item-quantity">
              <h6 style="padding-top: 30px;">Quantity</h6>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 d-flex">
              <button class="btn btn-link px-1"
                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                <i class="fas fa-minus"></i>
              </button>

              <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" />

              <button class="btn btn-link px-1" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                <i class="fas fa-plus"></i>
              </button>

            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-order btn-block btn-md"><a href="index.php?page=payment" style="color: white">Proceed to payment</a></button>
      </div>
    </div>

    <!-- similar product -->
    <div class="suggest">
      <h5 style="padding-bottom: 50px;"><b>Similar products</b></h5>
      <div class="wrapper row">
        <div class="col-md-3">
          <div class="suggest-card">
            <img src="../media/phone/ip14-do.jpg" alt="Iphone" class="card-img-phone">
            <div class="suggest-card-desc">
              <h6 class="suggest-card-title"><b>Iphone 14</b></h6>
              <div class="wrapper row">
                <div class="suggest-card-star col-md-5" style="font-size: 14px;">
                  <b>4.7</b> (456)
                  <i class="fa fa-star"></i>
                </div>
                <h6 class="suggest-card-price col-md-7"><b>20.000.000 VND</b></h6>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="suggest-card">
            <img src="../media/phone/ip14-den.jpg" alt="Iphone" class="card-img-phone">
            <div class="suggest-card-desc">
              <h6 class="suggest-card-title"><b>Iphone 14</b></h6>
              <div class="wrapper row">
                <div class="suggest-card-star col-md-5" style="font-size: 14px;">
                  <b>4.7</b> (456)
                  <i class="fa fa-star"></i>
                </div>
                <h6 class="suggest-card-price col-md-7"><b>20.000.000 VND</b></h6>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="suggest-card">
            <img src="../media/phone/ip14-xanh.jpg" alt="Iphone" class="card-img-phone">
            <div class="suggest-card-desc">
              <h6 class="suggest-card-title"><b>Iphone 14</b></h6>
              <div class="wrapper row">
                <div class="suggest-card-star col-md-5" style="font-size: 14px;">
                  <b>4.7</b> (456)
                  <i class="fa fa-star"></i>
                </div>
                <h6 class="suggest-card-price col-md-7"><b>20.000.000 VND</b></h6>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="suggest-card">
            <img src="../media/phone/ip14-den.jpg" alt="Iphone" class="card-img-phone">
            <div class="suggest-card-desc">
              <h6 class="suggest-card-title"><b>Iphone 14</b></h6>
              <div class="wrapper row">
                <div class="suggest-card-star col-md-5" style="font-size: 14px;">
                  <b>4.7</b> (456)
                  <i class="fa fa-star"></i>
                </div>
                <h6 class="suggest-card-price col-md-7"><b>20.000.000 VND</b></h6>
              </div>

            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</body>

</html>