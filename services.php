<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>EVARA LIFE SCIENCES LLP - Services Page</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

</head>

<body>

  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Header -->
 <?php include('header.php') ?>

   <!-- page header -->
  <div class="container-fluid page-header mb-5 py-5" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url(img/carpet.jpg) center center no-repeat;background-size: cover;">
    <div class="container">
      <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Pages</a>
          </li>
          <li class="breadcrumb-item text-white active" aria-current="page">
            Services
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Service Start -->
  <div class="container-xxl service py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-secondary text-uppercase">// Our Services //</h6>
        <h1 class="mb-5">What We Offer</h1>
      </div>
      <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
        <div class="col-lg-4">
          <div class="nav w-100 nav-pills me-4 flex-column">
            <!-- Tab 1 -->
            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill"
              data-bs-target="#tab-pane-1" type="button">
              <i class="fa fa-pills fa-2x me-3"></i>
              <h4 class="m-0">Patent Medicines</h4>
            </button>
            <!-- Tab 2 -->
            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
              data-bs-target="#tab-pane-2" type="button">
              <i class="fa fa-capsules fa-2x me-3"></i>
              <h4 class="m-0">OTC Products</h4>
            </button>
            <!-- Tab 3 -->
            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
              data-bs-target="#tab-pane-3" type="button">
              <i class="fa fa-heartbeat fa-2x me-3"></i>
              <h4 class="m-0">Healthcare Items</h4>
            </button>
            <!-- Tab 4 -->
            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill"
              data-bs-target="#tab-pane-4" type="button">
              <i class="fa fa-truck fa-2x me-3"></i>
              <h4 class="m-0">Reliable Delivery</h4>
            </button>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="tab-content w-100">

            <!-- Tab 1: Patent Medicines -->
            <div class="tab-pane fade show active" id="tab-pane-1">
              <div class="row g-4">
                <div class="col-md-6" style="min-height: 350px">
                  <div class="position-relative h-100">
                    <img class="position-absolute img-fluid" height="auto" width="100%"
                      src="img/patent_branded_medicine.jpg" style="object-fit: cover" alt="Patent Medicines" />
                  </div>
                </div>
                <div class="col-md-6">
                  <h3 class="mb-3">Patent Medicines</h3>
                  <p class="mb-4">
                    We supply a wide range of genuine patent medicines trusted by healthcare professionals for their
                    quality and efficacy.
                  </p>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check text-success me-3"></i>Certified & Authentic</li>
                    <li><i class="fa fa-check text-success me-3"></i>Wide Variety</li>
                    <li><i class="fa fa-check text-success me-3"></i>Competitive Pricing</li>
                  </ul>
                  <a href="contact.php" class="btn border border-pill text-secondary py-3 px-5 mt-3">
                    Read More<i class="fa fa-arrow-right ms-3"></i>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tab 2: OTC Products -->
            <div class="tab-pane fade" id="tab-pane-2">
              <div class="row g-4">
                <div class="col-md-6" style="min-height: 350px">
                  <div class="position-relative h-100">
                    <img class="position-absolute img-fluid " height="auto" width="100%" src="img/otc_products.png"
                      style="object-fit: cover" alt="OTC Products" />
                  </div>
                </div>
                <div class="col-md-6">
                  <h3 class="mb-3">OTC Products</h3>
                  <p class="mb-4">
                    Offering a variety of over-the-counter products to meet everyday health and wellness needs for
                    consumers.
                  </p>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check text-success me-3"></i>Trusted Brands</li>
                    <li><i class="fa fa-check text-success me-3"></i>Quality Assurance</li>
                    <li><i class="fa fa-check text-success me-3"></i>Affordable Options</li>
                  </ul>
                  <a href="contact.php" class="btn border border-pill text-secondary py-3 px-5 mt-3">
                    Read More<i class="fa fa-arrow-right ms-3"></i>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tab 3: Healthcare Items -->
            <div class="tab-pane fade" id="tab-pane-3">
              <div class="row g-4">
                <div class="col-md-6" style="min-height: 350px">
                  <div class="position-relative h-100">
                    <img class="position-absolute img-fluid " height="auto" width="100%"
                      src="img/general_healthcare_items.jpg" style="object-fit: cover" alt="Healthcare Items" />
                  </div>
                </div>
                <div class="col-md-6">
                  <h3 class="mb-3">Healthcare Items</h3>
                  <p class="mb-4">
                    We distribute general healthcare items that support wellbeing and promote a healthy lifestyle.
                  </p>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check text-success me-3"></i>Wide Product Range</li>
                    <li><i class="fa fa-check text-success me-3"></i>Reliable Suppliers</li>
                    <li><i class="fa fa-check text-success me-3"></i>Consistent Quality</li>
                  </ul>
                  <a href="contact.php" class="btn border border-pill text-secondary py-3 px-5 mt-3">
                    Read More<i class="fa fa-arrow-right ms-3"></i>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tab 4: Reliable Delivery -->
            <div class="tab-pane fade" id="tab-pane-4">
              <div class="row g-4">
                <div class="col-md-6" style="min-height: 350px">
                  <div class="position-relative h-100">
                    <img class="position-absolute img-fluid " height="auto" width="100%" src="img/mission.jpg"
                      style="object-fit: cover" alt="Reliable Delivery" />
                  </div>
                </div>
                <div class="col-md-6">
                  <h3 class="mb-3">Reliable Delivery</h3>
                  <p class="mb-4">
                    We ensure timely and dependable delivery to keep your business stocked and running smoothly.
                  </p>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check text-success me-3"></i>On-Time Shipments</li>
                    <li><i class="fa fa-check text-success me-3"></i>Safe Packaging</li>
                    <li><i class="fa fa-check text-success me-3"></i>Wide Coverage</li>
                  </ul>
                  <a href="contact.php" class="btn border border-pill text-secondary py-3 px-5 mt-3">
                    Read More<i class="fa fa-arrow-right ms-3"></i>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

 <!-- footer -->
  <?php include('footer.php') ?>
