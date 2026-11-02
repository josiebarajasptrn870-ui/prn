document.addEventListener('DOMContentLoaded', () => {
  // Find all forms with the class 'job-request-form'
  const forms = document.querySelectorAll('.job-request-form');

  forms.forEach(form => {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      
      const btn = this.querySelector('button[type="submit"]');
      const originalText = btn.innerHTML;
      
      // Show loading state
      btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Finding Pros...';
      btn.disabled = true;

      // Simulate network request (1.2 seconds)
      setTimeout(() => {
        // Show Bootstrap Modal
        const successModalElement = document.getElementById('successModal');
        if (successModalElement) {
          const successModal = new bootstrap.Modal(successModalElement);
          successModal.show();
        }
        
        // Reset form and button
        this.reset();
        btn.innerHTML = originalText;
        btn.disabled = false;
      }, 1200);
    });
  });
});
document.addEventListener('DOMContentLoaded', () => {
  // ... (keep your existing form submission code here) ...

  // ---------- SEARCH BAR LOGIC ----------
  const searchBtn = document.getElementById('searchBtn');
  const searchInput = document.getElementById('searchInput');

  if (searchBtn && searchInput) {
    // Allow pressing "Enter" in the input to trigger search
    searchInput.addEventListener('keypress', function (e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        performSearch();
      }
    });

    searchBtn.addEventListener('click', performSearch);
  }

  function performSearch() {
    const query = searchInput.value.toLowerCase().trim();
    
    if (!query) {
      alert("Please type what you need help with.");
      return;
    }

    // Keywords mapping to pages
    const services = [
      { keywords: ['plumb', 'leak', 'pipe', 'water heater', 'toilet', 'clog', 'drain'], page: 'service-plumbing.html' },
      { keywords: ['electric', 'light', 'outlet', 'wiring', 'fan', 'breaker', 'power'], page: 'service-electrical.html' },
      { keywords: ['clean', 'maid', 'carpet', 'move out', 'deep clean', 'sweep'], page: 'service-cleaning.html' },
      { keywords: ['move', 'moving', 'lift', 'heavy', 'truck', 'pack', 'furniture'], page: 'service-moving.html' },
      { keywords: ['handy', 'handyman', 'assemble', 'drywall', 'mount', 'tv', 'door'], page: 'service-handyman.html' },
      { keywords: ['yard', 'lawn', 'mow', 'tree', 'garden', 'leaf', 'landscape', 'weed'], page: 'service-yard.html' },
      { keywords: ['appliance', 'fridge', 'washer', 'dryer', 'oven', 'stove', 'dishwasher'], page: 'service-appliance.html' },
      { keywords: ['pest', 'bug', 'rat', 'mouse', 'termite', 'wasp', 'roach', 'spider', 'exterminator'], page: 'service-pest.html' }
    ];

    // Check if the query matches any keywords
    let foundPage = null;
    for (const service of services) {
      if (service.keywords.some(keyword => query.includes(keyword))) {
        foundPage = service.page;
        break;
      }
    }

    if (foundPage) {
      // Redirect to the matched service page
      window.location.href = foundPage;
    } else {
      // If no specific keyword matches, send them to the general "Hire a Pro" page
      window.location.href = 'hire-a-pro.html';
    }
  }
});
// ---------- AUTHENTICATION FORMS (Signup & Login) ----------
const authForms = document.querySelectorAll('.auth-form');

if (authForms.length > 0) {
  authForms.forEach(form => {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const btn = this.querySelector('button[type="submit"]');
      const originalText = btn.innerHTML;
      
      // Simple loading state
      btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Please wait...';
      btn.disabled = true;

      // Simulate network request
      setTimeout(() => {
        // Show success modal
        const successModal = new bootstrap.Modal(document.getElementById('authSuccessModal'));
        successModal.show();
        
        // Reset form
        this.reset();
        btn.innerHTML = originalText;
        btn.disabled = false;
      }, 1500);
    });
  });
}

// Google Button Simulation
const googleBtns = document.querySelectorAll('.btn-google');
if (googleBtns.length > 0) {
  googleBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      const originalText = this.innerHTML;
      this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Connecting to Google...';
      this.disabled = true;

      setTimeout(() => {
        // In a real app, this would redirect to Google's OAuth screen
        alert("Redirecting to Google Sign-In... (Demo only)");
        this.innerHTML = originalText;
        this.disabled = false;
      }, 1000);
    });
  });
}