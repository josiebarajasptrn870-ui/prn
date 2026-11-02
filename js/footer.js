// This script automatically injects the footer into any page that includes it.
document.addEventListener("DOMContentLoaded", function() {
  // Find the placeholder div we will add to the HTML
  const footerPlaceholder = document.getElementById('footer-placeholder');
  
  if (footerPlaceholder) {
    // The HTML for your footer
    footerPlaceholder.innerHTML = `
      <footer class="mt-0 pt-5 pb-4" style="background-color: #1e293b; color: #94a3b8;">
        <div class="container">
          <div class="row g-4 mb-4">
            
            <!-- Brand & Description -->
            <div class="col-lg-4 col-md-6">
              <a href="index.html" class="navbar-brand text-white fs-3 fw-bold text-decoration-none d-block mb-3">
                <i class="fas fa-tools text-primary me-2"></i>FixItNow
              </a>
              <p class="small pe-lg-4">Connecting everyday people with trusted local labor for home repairs, maintenance, and heavy lifting. Fast, safe, and reliable.</p>
            </div>

            <!-- Services -->
            <div class="col-lg-2 col-md-6 col-6">
              <h5 class="text-white fw-bold mb-3">Services</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a href="service-plumbing.html" class="text-decoration-none" style="color: #94a3b8; transition: 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#94a3b8'">Plumbing</a></li>
                <li class="mb-2"><a href="service-electrical.html" class="text-decoration-none" style="color: #94a3b8; transition: 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#94a3b8'">Electrical</a></li>
                <li class="mb-2"><a href="service-cleaning.html" class="text-decoration-none" style="color: #94a3b8; transition: 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#94a3b8'">Cleaning</a></li>
                <li class="mb-2"><a href="service-moving.html" class="text-decoration-none" style="color: #94a3b8; transition: 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#94a3b8'">Moving</a></li>
              </ul>
            </div>

            <!-- Company -->
            <div class="col-lg-2 col-md-6 col-6">
              <h5 class="text-white fw-bold mb-3">Company</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a href="about.html" class="text-decoration-none" style="color: #94a3b8; transition: 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#94a3b8'">About Us</a></li>
                <li class="mb-2"><a href="contact.html" class="text-decoration-none" style="color: #94a3b8; transition: 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#94a3b8'">Contact</a></li>
                <li class="mb-2"><a href="disclaimer.html" class="text-decoration-none" style="color: #94a3b8; transition: 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#94a3b8'">Disclaimer</a></li>
                <li class="mb-2"><a href="privacy.html" class="text-decoration-none" style="color: #94a3b8; transition: 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#94a3b8'">Privacy & Policy</a></li>
                <li class="mb-2"><a href="terms.html" class="text-decoration-none" style="color: #94a3b8; transition: 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#94a3b8'">Terms & Condition</a></li>
              </ul>
            </div>

            <!-- For Professionals -->
            <div class="col-lg-4 col-md-6">
              <h5 class="text-white fw-bold mb-3">For Professionals</h5>
              <p class="small mb-3 pe-lg-4">Are you a skilled laborer? Join our network and get consistent jobs sent to your phone.</p>
              <a href="signup.html" class="btn btn-outline-light rounded-pill px-4" style="border-color: #cbd5e1; color: white;">Sign Up as a Pro</a>
            </div>

          </div>
          
          <!-- Copyright -->
          <div class="border-top border-secondary pt-4 mt-2 text-center">
            <p class="mb-0 small">&copy; 2026 FixItNow. All rights reserved.</p>
          </div>
        </div>
      </footer>
    `;
  }
});