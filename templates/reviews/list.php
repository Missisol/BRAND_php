<div class="newArrivals">
    <div class="container newArrivalsWrap">
        <div class="headerNewArrivals">
            <h3>Reviews</h3>
        </div>
        <nav>
            <ul class="breadCrumbs">
                <li><a href="#">Home</a></li>
              <?php if ($menu == 1): ?>
                <li>
                    <a href="/user.php?action=home">Account</a>
                </li>
              <?php endif; ?>
                  <li><span class="lastBreadCrumb">Reviews</span></li>
            </ul>
        </nav>
    </div>
</div>
<div class="container">
  <?php if (count($items) > 0) : ?>
      <div class="container mt-5">
        <?php foreach ($items as $item) : ?>
            <div class="card col-12 mt-2">
                <div class="card-body">
                    <h5 class="card-title">Review #<?= $item['id'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Date <?= date('d.m.Y', strtotime($item['datetime'])) ?>
                        в <?= date('H:i', strtotime($item['datetime'])) ?>
                    </h6>
                    <p class="card-text">
                      <?= $item['content'] ?>
                    </p>
                  <?php if (isAdmin()) : ?>
                      <a href="reviews.php?action=delete&id=<?= $item['id'] ?>" class="card-link">Delete</a>
                  <?php endif ?>
                </div>
            </div>
        <?php endforeach; ?>
      </div>
  <?php else: ?>
      <div class="py-5">
          <em>No reviews yet...</em>
      </div>
  <?php endif ?>

  <?php if (isLoggedUser()) : ?>
      <div class="text-center py-5">
          <a href="reviews.php?action=add" class="btn btnSignUp">
              Add review
          </a>
      </div>
  <?php endif; ?>
</div>
