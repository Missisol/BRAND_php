<div class="newArrivals">
    <div class="container newArrivalsWrap">
        <div class="headerNewArrivals">
            <h3>Send Review</h3>
        </div>
        <nav>
            <ul class="breadCrumbs">
                <li><a href="#">Home</a></li>
                <li><a href="/user.php?action=home">Account</a></li>
                <li><span class="lastBreadCrumb">Reviews</span></li>
            </ul>
        </nav>
    </div>
</div>
<div class="container">
  <?php if ($error) : ?>
      <div class="alert alert-danger" role="alert">
        <?= $error ?>
      </div>
  <?php endif ?>

    <form method="post" class="mt-5">
        <div class="form-group">
            <label for="content" class="mb-3">Your comment</label>
            <textarea class="form-control" name="content" id="content" rows="5"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" name="add_comment" class="form-control btn btnSignUp">Send</button>
        </div>
    </form>
</div>