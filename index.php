<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Aekkraj">
    <meta name="description" content="Homepage">
    <title>Homepage</title>
    <link rel="icon" href="images/ARLogo.png">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Bootstrap Plugin-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

</head>

<body>
<header>
  <?php include("header.php"); ?>
</header>

<article>
    <div id="row1-1">
        <!-- First Banner begins here [Blue Banner] -->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-7 my-auto">
                        <div class="header-content mx-auto">
                            <h1 class="mb-5">Malaysia's largest Apple premium reseller. </h1>
                            <a class="btn btn-outline-light py-3 px-4 rounded-pill js-scroll-trigger" href="enquiry.php">Enquire Now!</a>
                        </div>
                    </div>
                    <div class="col-lg-5 my-auto">
                        <img class="img-fluid" src="images/homepageimg7.png"/>
                    </div>
                </div>
            </div>
        </header>
        <br/>
        <div class="row">
            <!-- Second Banner Begins Here : iPhone, iPad, MacBook -->
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Apple iPhone</h2>
                        <img class="img-fluid" src="images/homepageimg4.png"/>
                        <p class="card-text">
                            A14 Bionic, the fastest chip in a smartphone.
                            An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And
                            Night mode on every camera. iPhone 12 has it all — in two perfect sizes.
                        </p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="iphone.php">Check Out all
                            iPhones</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Apple iPad</h2>
                        <img class="img-fluid" src="images/homepageimg5.png"/>
                        <p class="card-text">With A14 Bionic, you have the power to bring your ideas to life. Shoot a 4K
                            video, then edit it on iPad Air. Use the second‑generation Apple Pencil to paint and
                            illustrate with dynamic brushes and subtle shading.</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="ipad.php">Check Out all iPads</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Apple M1 MacBook</h2>
                        <br/><br/><br/><br/>
                        <img class="img-fluid" src="images/homepageimg6.png"/>
                        <br/><br/>
                        <p class="card-text">The Apple M1 chip gives the 13‑inch MacBook Pro speed and power beyond
                            belief. With up to 2.8x CPU performance. Up to 5x the graphics speed. Our most advanced
                            Neural Engine for up to 11x faster machine learning. And up to 20 hours of battery life —
                            the longest of any Mac ever. It’s our most popular pro notebook, on a whole new level.</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Check Out all MacBooks</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section that leads to About Us-->
        <section class="cta">
            <div class="cta-content">
                <div class="container">
                    <h2>
                        Purchase with Confidence. Check out our story.
                    </h2>
                    <a class="btn btn-outline-light py-3 px-4 rounded-pill js-scroll-trigger" href="Aboutus.php">About Us</a>
                </div>
            </div>
            <div class="overlay"></div>
        </section>
    </div>
</article>

<footer>
  <?php include("footer.php"); ?>
</footer>
</body>
</html>