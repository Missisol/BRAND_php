<div class="newArrivals">
    <div class="container newArrivalsWrap">
        <div class="headerNewArrivals">
            <h3>Your Orders</h3>
        </div>
        <div class="headerNewArrivals">
            <h3><?= $user ?></h3>
        </div>
        <nav>
            <ul class="breadCrumbs">
                <li><a href="#">Home</a></li>
                <li><a href="/user.php?action=home">Account</a></li>
                <li><span class="lastBreadCrumb">Orders</span></li>
            </ul>
        </nav>
    </div>
</div>
<div class="container">
  <?php foreach ($userOrders as $id => $order) : ?>
      <h2>Order # <?= $id ?> date <?= $order['date'] ?></h2>
    <?php if (count($order['products']) > 0) : ?>
          <div class="container mt-5">
            <?php foreach ($order['products'] as $item) : ?>
                <div class="card col-12 mt-2">
                    <div class="card-body">
                        <img src="<?= $item['img_min'] ?>" alt="">
                        <h5 class="card-title">Product name: <?= $item['name'] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Quantity <?= $item['quantity'] ?> шт.
                        </h6>
                        <p class="card-text">
                            Price $<?= $item['price'] ?>
                        </p>
                        <p class="card-text font-weight-bold mt-3">
                            Total price $<?= $item['quantity'] * $item['price'] ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
          </div>
    <?php else: ?>
          <div class="py-5">
              <em>Your cart is empty...</em>
          </div>
    <?php endif ?>
  <?php endforeach; ?>

</div>

