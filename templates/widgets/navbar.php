<?php

$items = [
  ['label' => 'Home', 'url' => '/'],
  ['label' => 'Catalog', 'url' => '/shop/category.php?action=view&id=1'],
  ['label' => 'Cart', 'url' => '/shop/cart.php'],
  ['label' => 'Reviews', 'url' => '/reviews.php'],
  ['label' => 'Orders', 'url' => '/shop/orders.php', 'role' => '@'],
  ['label' => 'Goods Management', 'url' => '/admin.php', 'role' => 'admin'],
  ['label' => 'Sign in', 'url' => '/user.php', 'role' => '?'],
  ['label' => 'Account', 'url' => '/user.php', 'role' => '@'],
  ['label' => 'Sign out', 'url' => '/user.php?action=logout', 'role' => '@'],
];

?>

<nav>
    <div class="container mainMenu">
        <ul class="menu">
          <?php foreach ($items as $link) : ?>
            <?php if (isset($link['role'])): ?>
              <?php if (userHasRole($link['role'])): ?>
                      <li><a href="<?= $link['url'] ?>"><?= $link['label'] ?></a></li>
              <?php endif ?>
            <?php else : ?>
                  <li><a href="<?= $link['url'] ?>"><?= $link['label'] ?></a></li>
            <?php endif ?>
          <?php endforeach; ?>
        </ul>
    </div>
</nav>

