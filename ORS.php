<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>EVARA LIFE SCIENCES LLP - ORS Page</title>
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

  <!-- Page Header -->
  <div class="container-fluid page-header mb-5 py-5"
    style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url(img/carpet.jpg) center center no-repeat;background-size: cover;">
    <div class="container">
      <h1 class="display-3 text-white mb-3 animated slideInDown">ORS</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Pages</a>
          </li>
          <li class="breadcrumb-item text-white active" aria-current="page">
            ORS
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- ORS Product Details -->
  <div class="container-fluid py-5">
    <div class="container">
      <div class="row align-items-center">

        <!-- Product Image -->
        <div class="col-md-6 text-center wow fadeInUp" data-wow-delay="0.1s">
          <img src="img/ORS.jpg" alt="ORS" class="img-fluid rounded shadow-sm"
            style="width: 100%; height: 500px; object-fit: cover;" />
        </div>

        <!-- Product Details -->
        <div class="col-md-6 mt-4 mt-md-0 wow fadeInUp" data-wow-delay="0.5s">
          <h1 class="fw-bold text-dark mb-3">
            ORS – 
            <span class="text-primary">Oral Rehydration Solution</span>
          </h1>

          <h5 class="text-muted mb-3">
            A vital solution for rapid rehydration in cases of dehydration caused by diarrhea, vomiting, or excessive sweating.
          </h5>

          <p class="text-secondary">
            ORS (Oral Rehydration Salts) contains a balanced mixture of salts and glucose that helps restore the body’s electrolyte balance and fluids quickly. It is recommended for adults and children experiencing dehydration to prevent serious complications and maintain hydration levels.
          </p>

          <h6 class="fw-bold mt-4">Key Features:</h6>
          <ul class="list-unstyled">
            <li>✔ Rapidly replenishes lost fluids and electrolytes</li>
            <li>✔ Prevents dehydration in adults and children</li>
            <li>✔ Easy to prepare and consume</li>
            <li>✔ Safe and effective for mild to moderate dehydration</li>
            <li>✔ Recommended by healthcare professionals worldwide</li>
          </ul>

          <a href="#"
            class="btn btn-primary text-light fw-bold px-4 mt-3 shadow-sm"
            data-bs-toggle="modal"
            data-bs-target="#enquiryModal"
            data-product="ORS">
            Enquiry Now
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include('footer.php') ?>
</body>

</html>
