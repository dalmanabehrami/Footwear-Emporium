<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Homepage</title>
    <link rel="stylesheet" href="stylesheets/section-slider.css" />
    <link rel="stylesheet" href="stylesheets/main.css" />
    <link rel="stylesheet" href="stylesheets/na-product-slider.css" />
    <script src="js/menu.js"></script>
  </head>

  <body>
    <div class="menu" id="menu">
      <div class="menu-expanded">
        <div class="menu-container">
          <div class="logo">
            <a href="index.php">
              <p>Emporium</p>
            </a>
          </div>

          <div class="dropdown-menu-icon">
            <a href="#">
              <svg viewBox="0 0 100 50">
                <title>dropdown-menu-1</title>
                <rect class="cls-1" width="75" height="11" rx="1" ry="1" />
                <rect
                  class="cls-1"
                  x="25"
                  y="39"
                  width="75"
                  height="11"
                  rx="1"
                  ry="1"
                />
                <rect
                  class="cls-1"
                  y="19.5"
                  width="100"
                  height="11"
                  rx="1"
                  ry="1"
                />
              </svg>
            </a>
          </div>

          <div class="col-2">
            <div class="menu-col-2">
              <div class="menu-input">
                <input type="text" placeholder="Search" />
              </div>
            </div>

            <div class="menu-col-2">
              <img
                src="images/j-pic-6.jpg"
                alt="Some text to be placed"
              />
            </div>
          </div>

          <div class="col-1">
            <div class="col-4">
              <h2 class="h2">Shop</h2>
              <ul class="nav-list">
                <li><a href="catalogue-page.php">Men</a></li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Kids</a></li>
                <li><a href="#">Objects</a></li>
              </ul>
            </div>
            
            <div class="col-4">
              <h2 class="h2">Company</h2>
              <ul class="nav-list">
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Privacy & Cookies</a></li>
              </ul>
            </div>
            <div class="col-4">
              <h2 class="h2">Support</h2>
              <ul class="nav-list">
                <li><a href="#">Assistance</a></li>
                <li><a href="#">Shipping Information</a></li>
                <li><a href="#">Returns</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="col-4">
              <h2 class="h2">Stores</h2>
              <ul class="nav-list">
                <li><a href="#">London</a></li>
                <li><a href="#">Stockholm</a></li>
                <li><a href="#">Marvey Nicols</a></li>
                <li><a href="#">Gothenburg</a></li>
                <li><a href="#">Copenhagen</a></li>
              </ul>
            </div>
          </div>

          <div class="col-2">
            <div class="menu-col-2">
              <img
                src="images/j-pic-6.jpg"
                alt="Some text to be placed"
              />
            </div>
            <div class="menu-col-2">
              <div class="menu-input">
                <input type="text" placeholder="Subscribe to our newsletter" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <header class="sidebar">
        <div class="sidebar-items-wrapper">
          <div class="sidebar-items">
            <div class="logo sidebar-item">
              <a href="index.php">
                <p>Emporium</p>
              </a>
            </div>

            <nav class="main-nav sidebar-item">
              <ul>
                <li><a href="catalogue-page.php">Men</a></li>
                <li><a href="catalogue-page.php">Women</a></li>
                <li><a href="catalogue-page.php">Children</a></li>
              </ul>
            </nav>

            <div class="sidebar-item dropdown-menu-icon">
              <a href="#" onClick="showMenu()">
                <svg viewBox="0 0 100 50">
                  <title>dropdown-menu-1</title>
                  <rect class="cls-1" width="75" height="11" rx="1" ry="1" />
                  <rect
                    class="cls-1"
                    x="25"
                    y="39"
                    width="75"
                    height="11"
                    rx="1"
                    ry="1"
                  />
                  <rect
                    class="cls-1"
                    y="19.5"
                    width="100"
                    height="11"
                    rx="1"
                    ry="1"
                  />
                </svg>
                <span> Menu </span>
              </a>
            </div>

            <div class="social-links sidebar-item">
              <ul>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="#">Telegram</a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>

      <main>
        <section class="blocks block-1">
          <div class="col">
            <div class="main-promo">
              <a href="#">
                <img
                  src="images/pic1.jpg"
                  alt="Alex Arigato new sneakers"
                />
              </a>
            </div>
          </div>

          <div class="row-2">
            <div class="optional-promo">
              <a href="#">
                <img
                  src="images/pic1-1.jpg"
                  alt="Some text to be placed"
                />
              </a>
            </div>

            <div class="shop-now-promo">
              <h2 class="title">
                <a href="#">Axel Arigato X Cat Collection</a>
              </h2>
              <a href="/product-category.php" class="shop-now-link"
                >Shop Now</a
              >
            </div>
          </div>
        </section>

        <section class="blocks new-arrivals">
          <h2 class="title">New arrivals</h2>
          <div class="na-product-slider">
            <div class="na-product">
              <div class="product-code">STU-123</div>
              <div class="product-pic">
                <img
                  src="images/product1.png"
                  alt="Excelsior Axel Arigato Shoe - White"
                />
              </div>
              <h3 class="product-title">
                <a href="#">Women's Shoes</a>
              </h3>
              <div class="product-price">
                <span class="product-cost">315</span>
                <span class="product-currency">USD</span>
              </div>
            </div>

            <div class="na-product">
              <div class="product-code">STU-123</div>
              <div class="product-pic">
                <img
                  src="images/product2.png"
                  alt="Axel Arigato Clean 90"
                />
              </div>
              <h3 class="product-title">
                <a href="#">Women's shose</a>
              </h3>
              <div class="product-price">
                <span class="product-cost">315</span>
                <span class="product-currency">USD</span>
              </div>
            </div>

            <div class="na-product">
              <div class="product-code">STU-123</div>
              <div class="product-pic">
                <img
                  src="images/product3.png"
                  alt="Excelsior Axel Arigato Shoe - Red"
                />
              </div>
              <h3 class="product-title">
                <a href="#">Women's shose</a>
              </h3>
              <div class="product-price">
                <span class="product-cost">315</span>
                <span class="product-currency">USD</span>
              </div>
            </div>

            <div class="na-product">
              <div class="product-code">STU-123</div>
              <div class="product-pic">
                <img
                  src="images/product4.png"
                  alt="Excelsior Axel Arigato Shoe - Yellow"
                />
              </div>
              <h3 class="product-title">
                <a href="#">Women's shose</a>
              </h3>
              <div class="product-price">
                <span class="product-cost">315</span>
                <span class="product-currency">USD</span>
              </div>
            </div>

            <div class="na-product">
              <div class="product-code">STU-123</div>
              <div class="product-pic">
                <img
                  src="images/product5.png"
                  alt="Axel Arigato Clean 90"
                />
              </div>
              <h3 class="product-title">
                <a href="#">Product title</a>
              </h3>
              <div class="product-price">
                <span class="product-cost">315</span>
                <span class="product-currency">USD</span>
              </div>
            </div>
          </div>
          <div class="na-product-slider-swipper">
            <ul>
              <li><a href="#"></a></li>
              <li class="na-swipe-active"><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
            </ul>
          </div>
        </section>

        <section class="blocks stores">
          <div class="store-card">
            <h2 class="title">
              <a href="#">Axel Arigato X Cat Collection</a>
            </h2>
          </div>
          <div class="store-card">
            <div class="store-pic">
              <img src="images/london.jpg" alt="London store" />
            </div>
            <div class="store-info">
              <h3>Store location city</h3>
              <span class="store-address">ZIP index Str City</span>
              <span class="working-hours">Open Today 11-19</span>
            </div>
          </div>

          <div class="store-card">
            <div class="store-pic">
              <img src="images/stockholm.jpg" alt="Stockholm store" />
            </div>
            <div class="store-info">
              <h3>Store location city</h3>
              <span class="store-address">ZIP index Str City</span>
              <span class="working-hours">Open Today 11-19</span>
            </div>
          </div>

          <div class="store-card">
            <div class="store-pic">
              <img
                src="images/harvey_nicols.jpg"
                alt="Harvey Nicols store"
              />
            </div>
            <div class="store-info">
              <h3>Store location city</h3>
              <span class="store-address">ZIP index Str City</span>
              <span class="working-hours">Open Today 11-19</span>
            </div>
          </div>

          <div class="store-card">
            <div class="store-pic">
              <img src="images/copenhagen.jpg" alt="Copenhagen store" />
            </div>
            <div class="store-info">
              <h3>Store location city</h3>
              <span class="store-address">ZIP index Str City</span>
              <span class="working-hours">Open Today 11-19</span>
            </div>
          </div>

          <div class="store-card">
            <div class="store-pic">
              <img src="images/gothenburg.png" alt="Gothenburg store" />
            </div>
            <div class="store-info">
              <h3>Store location city</h3>
              <span class="store-address">ZIP index Str City</span>
              <span class="working-hours">Open Today 11-19</span>
            </div>
          </div>
        </section>

        <section class="blocks promo-slider">
          <div class="promo-slides">
            <div class="promo-slide">
              <img
                src="images/promo-1.jpg"
                alt="Axel Arigato new season sneakers"
              />
            </div>

            <div class="promo-slider-controls">
              <a href="#">Prev</a>
              <a href="#">Next</a>
            </div>
          </div>
        </section>

        <section class="blocks journal">
          <div class="journal-wrapper">
            <div class="journal-item">
              <div class="journal-pic">
                <img
                  src="images/j-pic-3.jpeg"
                  alt="Axel Arigato Clean 90 - White Leather"
                />
              </div>
              <div class="journal-link">
                <a href="#">Journal link</a>
              </div>
            </div>

            <div class="journal-item col-g-2">
              <div class="journal-item">
                <div class="journal-pic">
                  <img
                    src="images/j-pic-4.jpg"
                    alt="Axel Arigato sneakers"
                  />
                </div>
                <div class="journal-link">
                  <a href="#">Journal link</a>
                </div>
              </div>
              <div class="journal-item row-g-2">
                <div class="journal-item">
                  <div class="journal-pic">
                    <img
                      src="images/j-pic-2.jpg"
                      alt="Axel Arigato Valentines day present"
                    />
                  </div>
                  <div class="journal-link">
                    <a href="#">Journal link</a>
                  </div>
                </div>
                <div class="journal-item">
                  <div class="journal-pic">
                    <img
                      src="images/j-pic-5.jpg"
                      alt="Axel Arigato Fashion Show"
                    />
                  </div>
                  <div class="journal-link">
                    <a href="#">Journal link</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="journal-item col-g-2">
              <div class="journal-item">
                <div class="journal-pic">
                  <img
                    src="images/j-pic-1.jpg"
                    alt="Excelsior Axel Arigato Shoe"
                  />
                </div>
                <div class="journal-link">
                  <a href="#">Journal link</a>
                </div>
              </div>
              <div class="journal-item row-g-2">
                <div class="journal-item">
                  <h2 class="title">
                    <a href="#">Journal</a>
                  </h2>
                </div>
                <div class="journal-item">
                  <div class="journal-pic">
                    <img
                      src="images/j-pic-9.jpg"
                      alt="Axel Arigato New Season"
                    />
                  </div>
                  <div class="journal-link">
                    <a href="#">Journal link</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="journal-item">
              <div class="journal-pic">
                <img
                  src="images/j-pic-8.jpg"
                  alt="Axel Arigato New Collection"
                />
              </div>
              <div class="journal-link">
                <a href="#">Journal link</a>
              </div>
            </div>
          </div>
        </section>
      </main>

      <aside class="sidebar">
        <div class="sidebar-items-wrapper">
          <div class="sidebar-items">
            <nav class="nav-right sidebar-item">
              <ul>
                <li>
                  <a href="#">
                    Cart
                    <span class="cart-item-counter"> 0 </span>
                  </a>
                </li>
                <li>
                  <a href="#" class="search-icon">
                    <svg viewBox="0 0 500.00001 500.00001" version="1.1">
                      <g transform="translate(0,-552.36216)">
                        <g transform="translate(-4.3609793,-7.6704785)">
                          <path
                            d="M 232.83952,614.96702 A 154.04816,154.04794 0 0 0 78.79153,769.01382 154.04816,154.04794 0 0 0 232.83952,923.06184 154.04816,154.04794 0 0 0 386.88751,769.01382 154.04816,154.04794 0 0 0 232.83952,614.96702 Z m 0,26.77613 A 129.95832,127.2707 0 0 1 362.79832,769.01382 129.95832,127.2707 0 0 1 232.83952,896.28449 129.95832,127.2707 0 0 1 102.88194,769.01382 129.95832,127.2707 0 0 1 232.83952,641.74315 Z"
                            style="
                              opacity: 1;
                              fill: #2b0000;
                              fill-opacity: 1;
                              stroke: none;
                              stroke-opacity: 1;
                            "
                          />
                          <rect
                            ry="18.08342"
                            rx="33.249443"
                            transform="matrix(0.65316768,0.7572133,-0.60689051,0.79478545,0,0)"
                            y="319.55432"
                            x="794.8775"
                            height="36.16684"
                            width="173.02675"
                            id="rect4721"
                            style="
                              opacity: 1;
                              fill: #2b0000;
                              fill-opacity: 1;
                              stroke: none;
                              stroke-opacity: 1;
                            "
                          />
                        </g>
                      </g>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="login_form.php" class="user-icon" id="userIcon">
                    <img src="icons/user.png" alt="user" />
                  </a>
                </li>
              </ul>
            </nav>
            <nav class="nav-right sidebar-item">
              <ul>
            <a href="#" class="search-icon">
                <svg viewBox="0 0 500.00001 500.00001" version="1.1">
</svg>
        <li>
            <span class="contact us">
                <a href="contactus.php">Contact Us</a> <!-- Lidhja për Contact Us -->
            </span>
            <span class="about us">
                <a href="aboutus.php">About Us</a> <!-- Lidhja për Contact Us -->
            </span>
        </li>
    </ul>
</nav>


            <div class="back-to-links sidebar-item">
              <a href="#">Back to Catalogue</a>
            </div>

            <div class="scroll-down sidebar-item">
              <a href="#">Scroll Down</a>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </body>
</html>