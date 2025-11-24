<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="enquiryForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name*</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject*</label>
                        <input type="text" class="form-control" id="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message*</label>
                        <textarea class="form-control" id="message" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit via WhatsApp</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function sendToWhatsApp() {
        // Get values
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();
        // WhatsApp number (without +)
        const phoneNumber = "919289451501"; // <-- apna number yahan daalein

        // Create WhatsApp message
        const whatsappMessage = `Hello, my name is *${name}* (%0AEmail: ${email})%0A%0A${message}`;

        // Redirect to WhatsApp
        const url = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;
        window.open(url, "_blank");
    }
</script>
<!-- JavaScript to Handle enquiryForm WhatsApp Redirect -->

<script>
    document.getElementById("enquiryForm").addEventListener("submit", function(e) {
        e.preventDefault();

        // Get form values
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();

        // WhatsApp number (include country code, e.g. 91 for India)
        const phoneNumber = "919289451501";

        // Create WhatsApp message
        const whatsappMessage = `Name: ${name}%0AEmail: ${email}%0ASubject: ${subject}%0AMessage: ${message}`;

        // WhatsApp URL
        const whatsappURL = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;

        // Open WhatsApp
        window.open(whatsappURL, "_blank");
    });
</script>

  <!-- Footer Start -->
  <div class="container-fluid bg-primary text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">

        <!-- Contact Info -->
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Contact Us</h4>
          <p class="mb-2">
            <i class="fa fa-phone-alt me-3"></i> +91 9289451501
          </p>
          <p class="mb-2">
            <i class="fa fa-map-marker-alt me-3"></i>
            Plot No.338A, Ward No.4,<br />
            Garhi Market, Delhi Merrut Road,<br />
            Ghaziabad, Uttar Pradesh,<br />
            India - 201001
          </p>
          <div class="d-flex pt-3">
            <a class="btn btn-outline-light btn-social rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-light btn-social rounded-circle me-2" href="#"><i
                class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-social rounded-circle me-2" href="#"><i class="fab fa-youtube"></i></a>
            <a class="btn btn-outline-light btn-social rounded-circle me-2" href="#"><i
                class="fab fa-linkedin-in"></i></a>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Quick Links</h4>
          <a class="btn btn-link text-light" href="index.php">Home</a><br />
          <a class="btn btn-link text-light" href="about.php">About Us</a><br />
          <a class="btn btn-link text-light" href="services.php">Services</a><br />
          <a class="btn btn-link text-light" href="contact.php">Contact</a><br />
          <a class="btn btn-link text-light" href="privacy.php">Privacy Policy</a><br />
          <a class="btn btn-link text-light" href="terms.php">Terms & Conditions</a>
        </div>

        <!-- Our Services -->
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Our Services</h4>
          <p>Patent Medicines Distribution</p>
          <p>Over-the-Counter (OTC) Products</p>
          <p>General Healthcare Items</p>
          <p>Reliable Delivery & Logistics</p>
        </div>

        <!-- Newsletter -->
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Newsletter</h4>
          <p>Subscribe to our newsletter to get the latest updates and offers.</p>
          <div class="position-relative mx-auto" style="max-width: 400px;">
            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email" placeholder="Your email"
              aria-label="Email for newsletter" />
            <button type="button" class="btn btn-outline-light py-2 position-absolute top-0 end-0 mt-2 me-2">
              Sign Up
            </button>
          </div>
        </div>

      </div>
    </div>

    <!-- Copyright -->
    <div class="container">
      <div class="copyright py-4 border-top border-light mt-4">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; 2025 <strong>EVARA LIFE SCIENCES</strong>. All Rights Reserved.<br />
            Designed by
            <a class="text-decoration-underline text-light" href="https://trade4export.com" target="_blank"
              rel="noopener noreferrer">Trade4Export</a>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <a class="text-light me-3" href="index.php">Home</a>
            <a class="text-light me-3" href="cookies.php">Cookies</a>
            <a class="text-light me-3" href="help.php">Help</a>
            <a class="text-light" href="faq.php">FAQs</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#"
    class="btn border border-pill  btn border border-pill -lg text-secondary btn border border-pill -lg-square back-to-top"><i
      class="bi bi-arrow-up"></i></a>
  <!-- Bootstrap & Font Awesome CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>