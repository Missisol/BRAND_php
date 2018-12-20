<div class="newArrivals">
    <div class="container newArrivalsWrap">
        <div class="headerNewArrivals">
            <h3><?= $item['name'] ?></h3>
        </div>
        <nav>
            <ul class="breadCrumbs">
                <li><a href="#">Home</a></li>
                <li><a href="/user.php?action=home">Account</a></li>
                <li><span class="lastBreadCrumb"><?= $item['name'] ?></span></li>
            </ul>
        </nav>
    </div>
</div>
<div class="container contentPageProduct singleProduct">

    <div class="oneProductWrap">
        <a class="oneProduct" href="/shop/category.php?action=view&id=<?= $item['category_id'] ?>">
            <img class="imageOneProduct" alt="product" src=<?= $item['img'] ?>>
            <br>
            <div class="textProduct mb-5">
            </div>
        </a>
    </div>
    <div class="description">
        <h4 class="singleProductText">Product Description</h4>
        <p class="descriptionText"><?= $item['description'] ?></p>
        <p class="descriptionText"><?= $item['name'] ?></p>
        <p class="descriptionText">$<?= $item['price'] ?></p>
        <p class="descriptionText">Store quantity : <?= $item['quantity'] ?></p>
    </div>
    <div class="buttonOneProductPage">
        <button class="btn btnSignUp mb-5" id="add-product-cart" data-id="<?= $item['id'] ?>">
            Add to cart
        </button>
        <a class="btn btnSignIn" href="/shop/cart.php">Go to Cart</a>
    </div>
    <a class="btn btnSignIn" href="/shop/category.php?action=view&id=<?= $item['category_id'] ?>">Back to Catalog</a>
</div>
<section>
    <div class="container youMayLikeAlso">
        <h3>you may like also</h3>
        <div class="products">
          <?php foreach ($prods as $key => $product) : ?>
          <?php if ($key > 0 && $key <= 4) : ?>
              <div class="oneProductWrap" id="<?= $product['id'] ?>" data-category_id="<?= $product['category_id'] ?>">
                  <a class="oneProduct" href="/shop/product.php?id=<?= $product['id'] ?>">
                      <img class="imageOneProduct" alt="product" src=<?= $product['img'] ?>>
                      <div class="textProduct">
                          <p><?= $product['name'] ?></p>
                          <span>$<?= $product['price'] ?></span>
                      </div>
                  </a>
                  <div class="addToCartWrap">
                      <a class="addToCart" href="/shop/product.php?id=<?= $product['id'] ?>">
                          <img src="/img/basket_white.svg" alt="basket">
                          <div class="textAddToCart">
                              Add to Cart
                          </div>
                      </a>
                  </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
    </div>
</section>

<script src="/js/product.js" defer></script>