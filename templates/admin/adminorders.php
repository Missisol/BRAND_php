<div class="newArrivals">
    <div class="container newArrivalsWrap">
        <div class="headerNewArrivals">
            <h3>Orders management</h3>
        </div>
        <nav>
            <ul class="breadCrumbs">
                <li><a href="#">Home</a></li>
                <li><a href="/user.php?action=home">Account</a></li>
                <li><span class="lastBreadCrumb">Orders management</span></li>
            </ul>
        </nav>
    </div>
</div>
<div class="container">
<?php foreach ($userOrders as $id => $order) : ?>
<h2 id="orderItem<?= $id ?>">Order # <?= $id ?>, date <?= $order['date'] ?>, user id#<?= $order['user'] ?></h2>
<h2 id="orderStatus<?= $id ?>">Status <?= $order['status'] ?> </h2>
      <?php if (count($order['products']) > 0) : ?>
        <div class="container mt-5 order<?= $id ?>" >
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
  <?php else :?>
  <?php endif ?>
    <div class="text-center py-5 order<?= $id ?>">
        <button class="btn btnSignIn" id="delete-order" data-order_id="<?= $id ?>">Delete order</button>
        <button class="btn btnSignIn" id="appruve-order" data-order_id="<?= $id ?>">Change status</button>
    </div>
<?php endforeach; ?>
</div>

<script src="/js/orders.js" defer></script>

