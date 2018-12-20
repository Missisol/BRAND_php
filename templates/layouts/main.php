<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $config['name'] ?></title>
    <link rel="shortcut icon" href="../img/logo_brand.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <?php foreach ($config['assets']['css'] as $file) : ?>
        <link rel="stylesheet" href="<?= $file ?>">
    <?php endforeach ?>
</head>
<body>

<header>
    <div class="header">
        <div class="container headerWrap">
            <div class="headerLeft">
                <a class="logo" href="index.html">
                    <img src="../img/logo_brand.png" alt="logo">
                    <span>BRAN</span>
                </a>
                <div class="browse">
                    <details>
                        <summary class="browseSummary">Browse</summary>
                        <ul class="browseList">
                            <li><div class="browseList__triangle"></div></li>
                            <li><a href="/shop/category.php?action=view&id=2"><h3>Women</h3></a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Denim</a></li>
                            <li><a href="#">Leggings/Pants</a></li>
                            <li><a href="#">Skirts/Shorts</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="/shop/category.php?action=view&id=1"><h3>Men</h3></a></li>
                            <li><a href="#">Tees/Tank tops</a></li>
                            <li><a href="#">Shirts/Polos</a></li>
                            <li><a href="#">Sweaters</a></li>
                            <li><a href="#">Sweatshirts/Hoodies</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Jackets/vests</a></li>
                        </ul>
                    </details>
                </div>
                <form action="#">
                    <input type="search" name="searchHeader" placeholder="Search for Item...">
                    <button type="submit" class="buttonSearch">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="headerRight">
                <div class="userBasket">
                    <a href="/shop/cart.php"><img src="../img/index/basket_black.svg" alt="basket"></a>
                </div>
                <div class="myAccount">
                    <a href="/user.php">
                        <span>My Account</span><i class="fas fa-sort-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<?= render('widgets/navbar', [], false) ?>

    <div class="py-3">
        <?= $content ?>
    </div>

<?php foreach ($config['assets']['js'] as $file) : ?>
    <script src="<?= $file ?>"></script>
<?php endforeach; ?>
<div class="subscribe">
    <div class="subscribeImgBackground">
        <div class="container subscribeWrap">
            <div class="subscribeLeft">
                <div class="imagesubscribeLeft">
                    <img src="../img/index/photo.png" alt="photo">
                </div>
                <div class="textsubscribeLeft">
                    <p class="comment">
                        “Vestibulum quis porttitor dui! Quisque viverra nunc mi,
                        a pulvinar purus condimentum a.
                        Aliquam condimentum mattis neque sed pretium”
                    </p>
                    <p class="author">
                        Bin Burhan<br>
                        <span>Dhaka, Bd</span>
                    </p>
                    <div class="line"><a href="#"></a></div>
                    <div class="line colorBrand"><a href="#"></a></div>
                    <div class="line"><a href="#"></a></div>
                </div>
            </div>
            <div class="subscribeRight">
                <h2>Subscribe</h2>
                <h3>FOR OUR NEWLETTER AND PROMOTION</h3>
                <form action="#">
                    <input type="email" name="userEmail" placeholder="Enter Your Email" required>
                    <input type="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="footer">
        <div class="container footerWrap">
            <div class="logoFooter">
                <a class="logo" href="index.html">
                    <img src="../img/index/logo_brand.png" alt="logo">
                    <span>BRAN</span>
                </a>
                <div class="textLogoFooter">
                    <p>
                        Objectively transition extensive data rather than cross
                        functional solutions. Monotonectally syndicate multidisciplinary
                        materials before go forward benefits. Intrinsicly syndicate an
                        expanded array of processes and cross-unit partnerships.
                    </p>
                    <p>
                        Efficiently plagiarize 24/365 action items and focused infomediaries.
                        Distinctively seize superior initiatives for wireless technologies.
                        Dynamically optimize.<br>

                        Objectively strategize seamless relationships via resource
                        sucking testing procedures. Proactively cultivate next-generation
                        results for value-added methodologies. Dynamically plagiarize
                        unique methodologies after performance based methodologies.
                        Monotonectally empower stand-alone mindshare rather than ubiquitous
                        opportunities. Dynamically orchestrate resource sucking scenarios
                        after alternative synergy.

                        Compellingly envisioneer corporate methods of empowerment before
                        standards compliant technologies. Objectively facilitate progressive.
                    </p>
                </div>
            </div>
            <nav class="menuFooter">
                <div class="menuFooterColumn">
                    <h3>COMPANY</h3>
                    <div class="menuItems">
                        <a href="#">Home </a>
                        <a href="#">Shop</a>
                        <a href="#">About</a>
                        <a href="#">How It Works</a>
                        <a href="#">Contact</a>
                    </div>
                </div>
                <div class="menuFooterColumn">
                    <h3>INFORMATION</h3>
                    <div class="menuItems">
                        <a href="#">Tearms & Condition</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">How to Buy</a>
                        <a href="#">How to Sell</a>
                        <a href="#">Promotion</a>
                    </div>
                </div>
                <div class="menuFooterColumn">
                    <h3>SHOP CATEGORY</h3>
                    <div class="menuItems">
                        <a href="#">Men</a>
                        <a href="#">Women</a>
                        <a href="#">Child</a>
                        <a href="#">Apparel</a>
                        <a href="#">Brows All</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="footerBottom">
        <div class="container footerBottomWrap">
            <div class="footerBottomLeft">
                <p>&copy; 2017  Brand  All Rights Reserved.</p>
            </div>
            <div class="footerBottomRight">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>