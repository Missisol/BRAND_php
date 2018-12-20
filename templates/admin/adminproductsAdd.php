<div class="newArrivals">
    <div class="container newArrivalsWrap">
        <div class="headerNewArrivals">
            <h3>Goods Management</h3>
        </div>
        <div class="headerNewArrivals">
            <h3>Add products</h3>
        </div>
        <nav>
            <ul class="breadCrumbs">
                <li><a href="#">Home</a></li>
                <li><a href="/user.php?action=home">Account</a></li>
                <li><a href="/admin.php">management of goods</a></li>
                <li><span class="lastBreadCrumb">Add products</span></li>
            </ul>
        </nav>
    </div>
</div>
<div class="container">
    <form id="goodsAdd" method="POST">
        <div class="form-row mb-5">
            <div class="col">
                <label for="exampleInputEmail1" class="mb-3">Product name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="col">
                <label for="exampleInputPassword1" class="mb-3">Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputPassword1">
            </div>
        </div>
        <div class="form-row mb-5">
            <div class="col">
                <label for="exampleInputEmail1" class="mb-3">Price</label>
                <input type="text" name="price" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="col">
                <label for="exampleInputPassword1" class="mb-3">Store quantity</label>
                <input type="text" name="quantity" class="form-control" id="exampleInputPassword1">
            </div>
        </div>
        <div class="form-row mb-5">
            <div class="col">
                <label for="exampleInputEmail1" class="mb-3">Image url</label>
                <input type="text" name="img" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="col">
                <label for="exampleInputPassword1" class="mb-3">Image-min url</label>
                <input type="text" name="img_min" class="form-control" id="exampleInputPassword1">
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
                <div class="mt-3" id="messageGoodsAdd"><?= $message ?></div>
            </div>
        </div>
        <button type="submit" name="addtobase" id="addtobase" class="btn btnSignUp">Save</button>
    </form>
</div>


