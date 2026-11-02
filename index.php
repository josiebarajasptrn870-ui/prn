<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FixItNow · Find Trusted Local Labor & Home Services</title>
  
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Custom CSS Link -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fas fa-tools me-2"></i>FixItNow</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#how-it-works">How it Works</a></li>
          <li class="nav-item"><a class="nav-link" href="#join">Become a Pro</a></li>
		           
          <li class="nav-item ms-lg-3">
            <a class="nav-link fw-bold" href="signup.html">Sign Up</a>
          </li>
		            <!-- ADD THIS LINE -->
          <li class="nav-item ms-lg-3">
            <a class="nav-link fw-bold" href="Login.html">Log In</a>
          </li>
          <li class="nav-item ms-lg-3">
            <a class="btn btn-primary rounded-pill px-4" href="#hire">Hire a Pro</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO SECTION -->
  <section class="hero">
    <div class="container">
      <h1>Find trusted local help, <br>for any job.</h1>
      <p>From plumbing emergencies to moving heavy furniture. Connect with vetted, background-checked professionals in your area right now.</p>
      
            <div class="search-box">
        <i class="fas fa-search"></i>
        <!-- Added id="searchInput" -->
        <input type="text" id="searchInput" placeholder="What do you need help with? (e.g., Leaky Faucet, Moving)">
        <!-- Added id="searchBtn" -->
        <button type="button" id="searchBtn">Search</button>
      </div>
    </div>
  </section>

    <!-- CATEGORIES SECTION -->
  <section id="services" class="section-padding">
    <div class="container">
      <h2 class="section-title">What do you need help with today?</h2>
      <p class="section-sub">Browse our top-rated services. All pros are background-checked and insured.</p>
      
      <div class="row g-4">
        <!-- Plumbing -->
        <div class="col-md-6 col-lg-3">
          <a href="service-plumbing.html" class="category-link">
            <div class="category-card">
              <div class="category-icon"><i class="fas fa-faucet"></i></div>
              <h4>Plumbing</h4>
              <p>Leaks, clogs, water heaters</p>
            </div>
          </a>
        </div>
        
        <!-- Electrical -->
        <div class="col-md-6 col-lg-3">
          <a href="service-electrical.html" class="category-link">
            <div class="category-card">
              <div class="category-icon"><i class="fas fa-bolt"></i></div>
              <h4>Electrical</h4>
              <p>Outlets, lighting, wiring</p>
            </div>
          </a>
        </div>
        
        <!-- Cleaning -->
        <div class="col-md-6 col-lg-3">
          <a href="service-cleaning.html" class="category-link">
            <div class="category-card">
              <div class="category-icon"><i class="fas fa-broom"></i></div>
              <h4>Deep Cleaning</h4>
              <p>Move-outs, post-reno, carpets</p>
            </div>
          </a>
        </div>
        
        <!-- Moving -->
        <div class="col-md-6 col-lg-3">
          <a href="service-moving.html" class="category-link">
            <div class="category-card">
              <div class="category-icon"><i class="fas fa-truck-moving"></i></div>
              <h4>Moving Help</h4>
              <p>Heavy lifting, truck loading</p>
            </div>
          </a>
        </div>
        
        <!-- Handyman -->
        <div class="col-md-6 col-lg-3">
          <a href="service-handyman.html" class="category-link">
            <div class="category-card">
              <div class="category-icon"><i class="fas fa-hammer"></i></div>
              <h4>Handyman</h4>
              <p>Drywall, doors, furniture assembly</p>
            </div>
          </a>
        </div>
        
        <!-- Yard Work -->
        <div class="col-md-6 col-lg-3">
          <a href="service-yard.html" class="category-link">
            <div class="category-card">
              <div class="category-icon"><i class="fas fa-tree"></i></div>
              <h4>Yard & Landscaping</h4>
              <p>Mowing, weeding, tree trimming</p>
            </div>
          </a>
        </div>
        
        <!-- Appliance Repair -->
        <div class="col-md-6 col-lg-3">
          <a href="service-appliance.html" class="category-link">
            <div class="category-card">
              <div class="category-icon"><i class="fas fa-blender"></i></div>
              <h4>Appliance Repair</h4>
              <p>Fridges, washers, ovens</p>
            </div>
          </a>
        </div>
        
        <!-- Pest Control -->
        <div class="col-md-6 col-lg-3">
          <a href="service-pest.html" class="category-link">
            <div class="category-card">
              <div class="category-icon"><i class="fas fa-bug"></i></div>
              <h4>Pest Control</h4>
              <p>Rodents, termites, wasps</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- HOW IT WORKS -->
  <section id="how-it-works" class="section-padding how-it-works">
    <div class="container">
      <h2 class="section-title">How FixItNow Works</h2>
      <p class="section-sub">Getting help has never been easier. No endless phone calls.</p>
      
      <div class="row g-4 mt-4">
        <div class="col-md-4">
          <div class="step-card">
            <div class="step-number">1</div>
            <h4>Describe the Job</h4>
            <p>Tell us what you need fixed, cleaned, or moved. Add photos for accurate quotes.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="step-card">
            <div class="step-number">2</div>
            <h4>Get Matched</h4>
            <p>We instantly connect you with top-rated local pros available for your schedule.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="step-card">
            <div class="step-number">3</div>
            <h4>Job Done</h4>
            <p>Pay securely through the app once you are 100% satisfied with the work.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CALL TO ACTION / FORM -->
  <section id="hire" class="cta-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h2>Ready to check that off your list?</h2>
          <p class="lead mb-4">Post your job for free and get matched with a pro in minutes.</p>
          <div class="d-flex align-items-center gap-3 text-white">
            <i class="fas fa-check-circle fa-2x text-warning"></i>
            <span class="fs-5">Background Checked Pros</span>
          </div>
          <div class="d-flex align-items-center gap-3 text-white mt-3">
            <i class="fas fa-shield-alt fa-2x text-warning"></i>
            <span class="fs-5">Insured & Satisfaction Guaranteed</span>
          </div>
        </div>
        
        <div class="col-lg-5 offset-lg-1">
          <div class="cta-form">
            <h4 class="mb-4">Post a Job Request</h4>
            <form id="jobForm">
              <div class="mb-3">
                <label class="form-label text-muted small fw-bold">What do you need?</label>
                <select class="form-select mb-3">
                  <option selected disabled>Select a category...</option>
                  <option>Plumbing</option>
                  <option>Electrical</option>
                  <option>Cleaning</option>
                  <option>Moving Help</option>
                  <option>Handyman</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label text-muted small fw-bold">Describe the problem</label>
                <textarea class="form-control" rows="3" placeholder="e.g., My kitchen sink is leaking from the pipe underneath." required></textarea>
              </div>
              <div class="mb-4">
                <label class="form-label text-muted small fw-bold">Your Email</label>
                <input type="email" class="form-control" placeholder="you@example.com" required>
              </div>
              <button type="submit" class="btn btn-primary w-100 py-3 rounded-pill fw-bold fs-5">Find a Pro Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer id="join">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4">
          <h5 class="navbar-brand text-white fs-4"><i class="fas fa-tools me-2"></i>FixItNow</h5>
          <p class="small pe-lg-5 mt-3">Connecting everyday people with trusted local labor for home repairs, maintenance, and heavy lifting. Fast, safe, and reliable.</p>
        </div>
        <div class="col-lg-2 col-6">
          <h5>Services</h5>
          <a href="#">Plumbing</a>
          <a href="#">Electrical</a>
          <a href="#">Cleaning</a>
          <a href="#">Moving</a>
        </div>
        <div class="col-lg-2 col-6">
          <h5>Company</h5>
          <a href="about.html">About Us</a>
          <a href="contact.html">Contact</a>
          <a href="disclaimer.html">Disclaimer</a>
          <a href="privacy.html">Privay & Policy</a>
		  <a href="terms.html">Terms & Condition</a>
        </div>
        <div class="col-lg-4">
          <h5>For Professionals</h5>
          <p class="small mb-3">Are you a skilled laborer? Join our network and get consistent jobs sent to your phone.</p>
          <button class="btn btn-outline-light rounded-pill px-4">Sign Up as a Pro</button>
        </div>
      </div>
      <div class="footer-bottom">
        <p class="mb-0">&copy; 2026 FixItNow. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS Link -->
  <script src="js/script.js"></script>
</body>
</html>