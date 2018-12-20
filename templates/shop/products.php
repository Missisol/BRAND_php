<div class="newArrivals">
    <div class="container newArrivalsWrap">
        <div class="headerNewArrivals">
            <h3>New Arrivals</h3>
        </div>
        <div class="headerNewArrivals">
            <h3><?= $thisCatName ?></h3>
        </div>
        <nav>
            <ul class="breadCrumbs">
                <li><a href="index.html">Home</a></li>
                <li><span class="lastBreadCrumb"><?= $thisCatName ?></span></li>
            </ul>
        </nav>
    </div>
</div>

<div class="container contentPageProduct">
    <div class="containerLeftNav">
        <nav>
            <details class="categoryDetails" open>
                <summary>Category</summary>
                <ul class="categoryProd">
                  <?php foreach ($cats as $category): ?>
                      <li>
                          <a href="/shop/category.php?action=view&id=<?= $category['id'] ?>"><?= $category['name'] ?></a>
                      </li>
                  <?php endforeach; ?>
                </ul>
            </details>
            <details class="categoryDetails">
                <summary>BRAND</summary>
                <ul class="categoryProd">
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Bags</a></li>
                    <li><a href="#">Denim</a></li>
                    <li><a href="#">Hoodies & Sweatshirts</a></li>
                    <li><a href="#"> Jackets & Coats</a></li>
                    <li><a href="#"> Pants</a></li>
                    <li><a href="#"> Polos</a></li>
                </ul>
            </details>
            <details class="categoryDetails">
                <summary>dESIGNER</summary>
                <ul class="categoryProd">
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Bags</a></li>
                    <li><a href="#">Denim</a></li>
                    <li><a href="#">Hoodies & Sweatshirts</a></li>
                    <li><a href="#"> Jackets & Coats</a></li>
                    <li><a href="#"> Pants</a></li>
                    <li><a href="#"> Polos</a></li>
                    <li><a href="#"> Shirts</a></li>
                    <li><a href="#"> Shoes</a></li>
                </ul>
            </details>
        </nav>
    </div>
    <div class="containerRightProductsWrap">
        <div class="products">
          <?php foreach ($prods as $product) : ?>
              <div class="oneProductWrap" id="<?= $product['id'] ?>" data-category_id="<?= $product['category_id']?>">
                  <a class="oneProduct" href="/shop/product.php?id=<?= $product['id'] ?>">
                      <img class="imageOneProduct" alt="product" src=<?= $product['img'] ?> >
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
          <?php endforeach; ?>
        </div>
    </div>
</div>