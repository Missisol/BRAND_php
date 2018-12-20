<div class="newArrivals">
    <div class="container newArrivalsWrap">
        <div class="headerNewArrivals">
            <h3>Goods Management</h3>
        </div>
        <div class="headerNewArrivals">
            <h3>Delete products</h3>
        </div>
        <nav>
            <ul class="breadCrumbs">
                <li><a href="#">Home</a></li>
                <li><a href="/user.php?action=home">Account</a></li>
                <li><a href="/admin.php">management of goods</a></li>
                <li><span class="lastBreadCrumb">Delete products</span></li>
            </ul>
        </nav>
    </div>
</div>
<div class="container">
    <form id="goodsDel" method="POST">
        <div class="form-row mb-5">
            <div class="col">
                <label for="exampleInputId" class="mb-3">Product id</label>
                <input type="text" name="product_id" class="form-control" id="exampleInputId">
            </div>
            <div class="col">
                <label for="exampleInputEmail1" class="mb-3">Product name</label>
                <input type="text" name="prodname" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="form-row mb-5">
            <div class="col-sm-6">
                <select name="category">
                    <option>Choose category</option>
                  <?php foreach ($cats as $cat) : ?>
                      <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                  <?php endforeach; ?>
                </select>
                <div class="mt-3" id="messageGoodsDel"><?= $message ?></div>
            </div>
        </div>
        <button type="submit" name="deletefrombase" id="deletefrombase" class="btn btnSignUp">Delete</button>
    </form>
</div>


