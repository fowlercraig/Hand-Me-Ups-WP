<?php

   $cart_Total = '$300';

?>

<div id="cart" class="fs-grid">
   <div class="fs-row">
      <div class="fs-cell fs-all-full">
         <form action="/cart" method="post" novalidate class="cart table-wrap">

            <header class="fs-row">
               <hr class="fs-cell fs-all-full divider">
               <div class="fs-cell fs-lg-4 fs-md-3 fs-sm-half fs-lg-push-2 text-left">Product</div>
               <div class="fs-cell fs-lg-2 fs-md-1 fs-sm-hide text-center">Price</div>
               <div class="fs-cell fs-lg-2 fs-md-1 fs-sm-fourth text-center">Quantity</div>
               <div class="fs-cell fs-lg-2 fs-md-1 fs-sm-fourth text-right">Total</div>
               <hr class="fs-cell fs-all-full divider">
            </header>

            <div class="cart-content fs-row">
               <?php include ('parts/cart-item.php'); ?>
               <?php include ('parts/cart-item.php'); ?>
               <?php include ('parts/cart-item.php'); ?>
            </div>

            <div class="cart-info fs-row">
               <div class="fs-cell fs-lg-7 fs-md-3 fs-sm-3">
                  <label for="cart-instructions">Special Instructions for Seller</label>
                  <textarea name="note" class="input-full" id="cart-instructions"></textarea>
               </div>
               <div class="cart-total fs-cell fs-lg-4 fs-md-3 fs-sm-3 fs-right text-right">
                  <span class="cart-total-price"><small>SUBTOTAL</small> <strong><?php echo $cart_Total; ?></strong></span><br>
                  <span class="cart-total-shipping"><small>Shipping and taxes calculated at checkout.</small></span><br><br>
                  <a class="cart-total-update btn btn-secondary">Update Cart</a>
                  <a class="cart-total-update btn btn-primary">Checkout</a>
               </div>
               <hr class="fs-cell fs-all-full divider">
            </div>

         </form>
      </div>
   </div>
</div>