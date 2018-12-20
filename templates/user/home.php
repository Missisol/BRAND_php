<div class="newArrivals">
    <div class="container newArrivalsWrap">
        <div class="headerNewArrivals">
            <h3>Home page user</h3>
        </div>
        <div class="headerNewArrivals">
            <h3><?= $user ?></h3>
        </div>
        <nav>
            <ul class="breadCrumbs">
                <li><a href="#">Home</a></li>
                <li><span class="lastBreadCrumb">Account</span></li>
            </ul>
        </nav>
    </div>
</div>
<div class="container">
    <div class="buttonAccountSignWrap">
      <?php  if (!isLoggedUser()) : ?>
          <a href="/user.php" class="btn btnSignUp mb-5">Sign In or Sign Up</a>
      <?php endif; ?>
    </div>
</div>
