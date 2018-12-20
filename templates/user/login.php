<div class="newArrivals">
    <div class="container newArrivalsWrap">
        <div class="headerNewArrivals">
            <h3>Sign in or Sign up</h3>
        </div>
        <nav>
            <ul class="breadCrumbs">
                <li><a href="#">Home</a></li>
                <li><span class="lastBreadCrumb">Sign in</span></li>
            </ul>
        </nav>
    </div>
</div>
<div class="container">
    <div class="mt-5">
        <form class="formLogin" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1" class="mb-3">Login</label>
                <input name="login" type="text" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp" placeholder="Enter login">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="mb-3">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                       placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" name="login_user" class="btn btnSignIn">Sign In</button>
            <a href="/user.php?action=register" class="btn btnSignUp float-right">Sign Up</a>
        </form>
    </div>
</div>