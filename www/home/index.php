<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Art Canvas Gallery</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <div class="header-search">
        <input type="search" name="search" placeholder="Search Product..." class="input-field">

        <button class="search-btn" aria-label="Search">
          <ion-icon name="search-outline"></ion-icon>
        </button>
      </div>

      <a href="#" class="logo">
        <img  width="130" height="31">
      </a>

      <div class="header-actions">

        <button class="header-action-btn">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

          <p class="header-action-label">Sign in</p>
        </button>

        <button class="header-action-btn">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>

          <p class="header-action-label">Search</p>
        </button>

        <button class="header-action-btn">
          <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>

          <p class="header-action-label">Cart</p>

          <div class="btn-badge green" aria-hidden="true">3</div>
        </button>

        <button class="header-action-btn">
          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>

          <p class="header-action-label">Wishlisht</p>

          <div class="btn-badge" aria-hidden="true">2</div>
        </button>

      </div>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" alt="Casmart logo" width="130" height="31">
          </a>

          <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Shop</a>
          </li>

          <li>
            <a href="#" class="navbar-link">About</a>
          </li>

          <li>
            <a href="#blog" class="navbar-link">Blog</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Contact</a>
          </li>

        </ul>

      </nav>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home" style="background-image: url('./assets/images/top-view-watercolors-with-copy-space.jpg')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Art </p>

            <h2 class="h1 hero-title">Canvas Gallery</h2>
            <a href="../cart/index.php?page=products">
            <button class="btn btn-primary">Shop Now</button>
</a>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="service">
        <div class="container">

          <ul class="service-list">

            <li class="service-item">
              <div class="service-item-icon">
                <img src="./assets/images/service-icon-1.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Free Shipping</p>

                <p class="service-item-text">On All Order Over $599</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="./assets/images/service-icon-2.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Easy Returns</p>

                <p class="service-item-text">30 Day Returns Policy</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="./assets/images/service-icon-3.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Secure Payment</p>

                <p class="service-item-text">100% Secure Gaurantee</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="./assets/images/service-icon-4.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Special Support</p>

                <p class="service-item-text">24/7 Dedicated Support</p>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CATEGORY
      -->

      <section class="section category">
        <div class="container">

          <ul class="category-list">

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/category-1.jpg" alt="Sunglass & eye" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary"> Eye</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/category-2.jpg" alt="Active & outdoor" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Active</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/category-3.jpg" alt="Winter wear" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Winter </a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/category-4.jpg" alt="Exclusive footwear" loading="lazy" width="510"
                  height="600" class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Exclusive </a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/category-5.jpg" alt="Jewelry" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Jewelry style</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/category-6.jpg" alt="Sports cap" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Sports</a>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #PRODUCT
      -->

      <section class="section product">
        <div class="container">

          <h2 class="h2 section-title">Products of the week</h2>

          <ul class="filter-list">

            

          </ul>

          <ul class="product-list">

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/product-20.jpg" alt="Varsi Leather Bag" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-badge red"> -25%</div>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Varsi </a>
                  </h3>

                  <div class="card-price">
                    <data value="48.75">&pound;48.75</data>

                    <data value="65.00">&pound;65.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/product-21.jpg" alt="Fit Twill Shirt for Woman" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-badge green"> New</div>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Fit  Woman</a>
                  </h3>

                  <div class="card-price">
                    <data value="62.00">&pound;62.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/product-22.jpg" alt="Grand Atlantic Chukka Boots" loading="lazy"
                      width="800" height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Grand Atlantic </a>
                  </h3>

                  <div class="card-price">
                    <data value="32.00">&pound;32.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/product-23.jpg" alt="Women's Faux-Trim Shirt" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Women's Fa</a>
                  </h3>

                  <div class="card-price">
                    <data value="84.00">&pound;84.00</data>
                  </div>
                </div>

              </div>
            </li>

          </ul>
          <a href="../cart/index.php?page=products">
          <button class="btn btn-outline">View All Products</button>
</a>
        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog">
        <div class="container">

          <h2 class="h2 section-title">Latest fashion news</h2>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/category-2.jpg" alt="Worthy Cyber Monday Fashion From Casmart" loading="lazy"
                      width="1020" height="700" class="w-100">
                  </a>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="folder-open-outline"></ion-icon>

                      <a href="#" class="card-meta-link">Fashion</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline"></ion-icon>

                      <a href="#" class="card-meta-link">
                        <time datetime="2021-03-31">31 Mar 2021</time>
                      </a>
                    </li>

                  </ul>

                  <h3 class="h3 card-title">
                    <a href="#">Worthy Cyber Monday Fashion From Casmart</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/category-3.jpg" alt="Holiday Home Decoration I’ve Recently Ordered"
                      loading="lazy" width="1020" height="700" class="w-100">
                  </a>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="folder-open-outline"></ion-icon>

                      <a href="#" class="card-meta-link">Fashion</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline"></ion-icon>

                      <a href="#" class="card-meta-link">
                        <time datetime="2021-03-31">31 Mar 2021</time>
                      </a>
                    </li>

                  </ul>

                  <h3 class="h3 card-title">
                    <a href="#">Holiday Home Decoration I’ve Recently Ordered</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/category-4.jpg" alt="Unique Ideas for Fashion You Haven’t heard yet"
                      loading="lazy" width="1020" height="700" class="w-100">
                  </a>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="folder-open-outline"></ion-icon>

                      <a href="#" class="card-meta-link">Fashion</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline"></ion-icon>

                      <a href="#" class="card-meta-link">
                        <time datetime="2021-03-31">31 Mar 2021</time>
                      </a>
                    </li>

                  </ul>

                  <h3 class="h3 card-title">
                    <a href="#">Unique Ideas for Fashion You Haven’t heard yet</a>
                  </h3>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter">
        <div class="container">

          <div class="newsletter-card" style="background-image: url('./assets/images/newsletter-bg.png')">

            <h2 class="card-title">Subscribe Newsletter</h2>

            <p class="card-text">
              Enter your email below to be the first to know about new collections and product launches.
            </p>

            <form action="" class="card-form">

              <div class="input-wrapper">
                <ion-icon name="mail-outline"></ion-icon>

                <input type="email" name="emal" placeholder="Enter your email" required class="input-field">
              </div>

              <button type="submit" class="btn btn-primary w-100">
                <span>Subscribe</span>

                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </button>

            </form>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <p>Art Canvas Gallery</p>
          </a>

          <p class="footer-text">
            Casmart is a fashion theme for presents a complete wardrobe of uniquely crafted Ethnic Wear, Casuals, Edgy
            Denims, &
            Accessories inspired from the most contemporary
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Information</p>
          </li>

          <li>
            <a href="#" class="footer-link">About Company</a>
          </li>

          <li>
            <a href="#" class="footer-link">Payment Type</a>
          </li>

          <li>
            <a href="#" class="footer-link">Awards Winning</a>
          </li>

          <li>
            <a href="#" class="footer-link">World Media Partner</a>
          </li>

          <li>
            <a href="#" class="footer-link">Become an Agent</a>
          </li>

          <li>
            <a href="#" class="footer-link">Refund Policy</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Category</p>
          </li>

          <li>
            <a href="#" class="footer-link">Handbags & Wallets</a>
          </li>

          <li>
            <a href="#" class="footer-link">Women's Clothing</a>
          </li>

          <li>
            <a href="#" class="footer-link">Plus Sizes</a>
          </li>

          <li>
            <a href="#" class="footer-link">Complete Your Look</a>
          </li>

          <li>
            <a href="#" class="footer-link">Baby Corner</a>
          </li>

          <li>
            <a href="#" class="footer-link">Man & Woman Shoe</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Help & Support</p>
          </li>

          <li>
            <a href="#" class="footer-link">Dealers & Agents</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ Information</a>
          </li>

          <li>
            <a href="#" class="footer-link">Return Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Shipping & Delivery</a>
          </li>

          <li>
            <a href="#" class="footer-link">Order Tranking</a>
          </li>

          <li>
            <a href="#" class="footer-link">List of Shops</a>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023  All Rights Reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Sitemap</a>
          </li>

        </ul>

        <div class="payment">
          <p class="payment-title">We Support</p>

          <img src="./assets/images/payment-img.png" alt="Online payment logos" class="payment-img">
        </div>

      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>