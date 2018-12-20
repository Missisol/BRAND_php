<div class="newArrivals">
    <div class="container newArrivalsWrap">
        <div class="headerNewArrivals">
            <h3>Cart</h3>
        </div>
        <nav>
            <ul class="breadCrumbs">
                <li><a href="#">Home</a></li>
                <li><a href="/user.php?action=home">Account</a></li>
                <li><span class="lastBreadCrumb">Cart</span></li>
            </ul>
        </nav>
    </div>
</div>
<div class="container" id="orderContainer">
<?php if (count($orderItems) > 0) : ?>
    <ul class="list-group-item my-5" id="orderWrap">
      <?php foreach ($orderItems as $item) : ?>
          <li class="list-group-item cartProductWrap" id="buttonWrap<?= $item['id'] ?>">
              <a href="/shop/product.php?id=<?= $item['id'] ?>"><?= $item['name'] ?></a>
              <p id="quantity<?= $item['id'] ?>" class="mt-3 mb-3">
                  quantity: <?= $item['quantity'] ?>
              </p>
              <button class="btn btnSignIn add-product" data-id="<?= $item['id'] ?>">
                  Add product
              </button>
              <button class="btn btnSignIn ml-5 delete-oneproduct" data-id="<?= $item['id'] ?>">
                  Delete one product
              </button>
              <button class="btn btnSignIn ml-5 delete-product" data-id="<?= $item['id'] ?>">
                  Delete product
              </button>
          </li>
      <?php endforeach; ?>
    </ul>

  <?php if (isLoggedUser()) : ?>
        <a href="/shop/cart.php?action=order" class="btn btnSignUp" id="proceedToCheckout">
            Proceed to checkout
        </a>
  <?php else : ?>
        <button disabled class="btn btnSignUp">
            Proceed to checkout (for registered users only)
        </button>
  <?php endif; ?>
<?php else: ?>
    <div class="my-5" id="emptyText">
        <em>Your cart is empty</em>
    </div>
<?php endif ?>
</div>
<script src="/js/product.js" defer></script>
