<?php
    spl_autoload_register(function ($class) {
        include_once __DIR__ . '\/basis/' . $class . '.php';
    });
    $products = new Products();
    $products = $products->get();
    $blue = $products['cosmo'];
    $red = $products['speeder'];
    $green = $cosmo = $products['karkani'];
    $yellow = $products['lunar'];
    $style1 = 'style = "background-image: url(' . $blue['photo'] . ')"';
    $style2 = 'style = "background-image: url(' . $red['photo'] . ')"';
    $style3 = 'style = "background-image: url(' . $green['photo'] . ')"';
    $style4 = 'style = "background-image: url(' . $yellow['photo'] . ')"';
    $content = '
        <div class="nav">
          <nav>
              <span id="span"><a href="#">Home</a> /</span>
              <span><a href="#">Catalog</a></span>
          </nav>
        </div>
        <div class="nav-chbx">
            <div class="nav-name">
                <h1>Catalog</h1>
            </div>
            <div class="content color">
              <div class="text">Color</div>
              <div class="color-box">
                <input type="checkbox" class="color-scheme blue">
                <input type="checkbox" class="color-scheme red">
                <input type="checkbox" class="color-scheme green">
                <input type="checkbox" class="color-scheme yellow">
              </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="grid-item-chbx">
                <h3>Price range</h3>
                <input type="checkbox" name="name1" id="1-2" value="1000000$ - 2000000$">
                <label for="1-2" name="name1">1000000$ - 2000000$</label><br>
                <input type="checkbox" name="name2" id="2-3" value="2000000$ - 4000000$">
                <label for="2-4" name="name2">2000000$ - 4000000$</label><br>
                <input type="checkbox" name="name3" id="4-8" value="4000000$ - 8000000$">
                <label for="4-8" name="name3">4000000$ - 8000000$</label><br>
                <input type="checkbox" name="name4" id="8-10" value="8000000$ - 10000000$">
                <label for="8-10" name="name4">8000000$ - 10000000$</label><br>
                <input type="checkbox" name="name5" id="10-15" value="10000000$ - 15000000$">
                <label for="10-15" name="name5">10000000$ - 15000000$</label><br>
            </div>
            <div class="grid-item-img1" ' . $style1 . '></div>
            <div class="grid-item">
                <p class="p1"><a href="card.html" class="unselectable">'. $blue['name'] . '</a></p>
                <p class="p2">3'. $blue['price'] . '</p>
                <p class="p3">'. $blue['status'] . '</p>
                <p class="p3">'. $blue['amount'] . '</p>
                <a href="card.html"><button type="submit" value="BUY" disabled>BUY</button></a>
            </div>  
            <div class="grid-item-img2" ' . $style2 . '></div>
            <div class="grid-item">
                <p class="p1"><a href="card.html">'. $red['name'] . '</a></p>
                <p class="p2">'. $red['price'] . '</p>
                <p class="p4">'. $red['status'] . '</p>
                <p class="p3">'. $red['amount'] . '</p>
                <a href="card.html"><button type="submit" value="BUY">BUY</button></a>
            </div>
            <div class="grid-item-center"></div>  
            <div class="grid-item-center"></div>
            <div class="grid-item-center"></div>
            <div class="grid-item-center"></div>
            <div class="grid-item-center"></div>
            <div class="content size">
            <div class="text">Price</div>
                <br />
                <input type="range" name="size" id="size" />
            </div>
            <div class="grid-item-img3" ' . $style3 . '></div>

            <div class="grid-item">
                <p class="p1"><a href="card.html" class="unselectable">'. $green['name'] . '</a></p>
                <p class="p2">'. $green['price'] . '</p>
                <p class="p3">'. $green['status'] . '</p>
                <p class="p3">'. $green['amount'] . '</p>
                <a href="card.html"><button type="submit" value="BUY" disabled>BUY</button></a>
            </div>

            <div class="grid-item-img4" ' . $style4 . '></div>

            <div class="grid-item">
                <p class="p1"><a href="card.html" class="unselectable">'. $yellow['name'] . '</a></p>
                <p class="p2">'. $yellow['price'] . '</p>
                <p class="p3">'. $yellow['status'] . '</p>
                <p class="p3">'. $yellow['amount'] . '</p>
                <a href="card.html"><button type="submit" value="BUY" disabled>BUY</button></a>
            </div>
        </div>
    ';
    $renderComponent = new ComponentRenderer(null, $content, 'basic.php');
    print $renderComponent;
?>