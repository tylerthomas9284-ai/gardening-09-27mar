// Nature Gardening Website - Main JavaScript

// Mobile Menu Toggle
function initMobileMenu() {
  const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
  const navList = document.querySelector('.nav-list');

  if (mobileMenuToggle && navList) {
    mobileMenuToggle.addEventListener('click', () => {
      navList.classList.toggle('active');
    });
  }
}

// Modal Functions
function openModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
  }
}

function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.remove('active');
    document.body.style.overflow = '';
  }
}

// Lead Form Handler
function initLeadForm() {
  const leadForm = document.getElementById('leadForm');
  if (leadForm) {
    leadForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const formData = {
        fullName: document.getElementById('leadFullName').value,
        email: document.getElementById('leadEmail').value,
        phone: document.getElementById('leadPhone').value,
        service: document.getElementById('leadService').value,
        message: document.getElementById('leadMessage').value,
        consent: document.getElementById('leadConsent').checked
      };

      if (!formData.consent) {
        alert('Please agree to the Privacy Policy and Terms & Conditions');
        return;
      }

      // Simulate form submission
      console.log('Lead form submitted:', formData);
      alert('Thank you for your interest! We\'ll contact you within 24 hours.');
      
      // Reset form and close modal
      leadForm.reset();
      closeModal('leadModal');
    });
  }
}

// Contact Form Handler
function initContactForm() {
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const formData = {
        fullName: document.getElementById('fullName').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        service: document.getElementById('service').value,
        message: document.getElementById('message').value,
        consent: document.getElementById('consent').checked
      };

      if (!formData.consent) {
        alert('Please agree to the Privacy Policy and Terms & Conditions');
        return;
      }

      // Simulate form submission
      console.log('Contact form submitted:', formData);
      alert('Thank you! We\'ll get back to you within 24 hours.');
      
      // Reset form
      contactForm.reset();
    });
  }
}

// Accordion Functionality
function initAccordions() {
  const accordionTriggers = document.querySelectorAll('.accordion-trigger');
  
  accordionTriggers.forEach(trigger => {
    trigger.addEventListener('click', function() {
      const content = this.nextElementSibling;
      const icon = this.querySelector('.accordion-icon');
      
      // Close all other accordions
      accordionTriggers.forEach(otherTrigger => {
        if (otherTrigger !== this) {
          const otherContent = otherTrigger.nextElementSibling;
          const otherIcon = otherTrigger.querySelector('.accordion-icon');
          otherContent.classList.remove('active');
          if (otherIcon) otherIcon.classList.remove('active');
        }
      });
      
      // Toggle current accordion
      content.classList.toggle('active');
      if (icon) icon.classList.toggle('active');
    });
  });
}

// Cookie Banner
function initCookieBanner() {
  const cookieBanner = document.getElementById('cookieBanner');
  const acceptCookies = document.getElementById('acceptCookies');
  const declineCookies = document.getElementById('declineCookies');

  if (!cookieBanner) return;

  // Check if user has already made a choice
  const cookieConsent = localStorage.getItem('cookieConsent');
  
  if (!cookieConsent) {
    // Show banner after a short delay
    setTimeout(() => {
      cookieBanner.classList.add('active');
    }, 1000);
  }

  if (acceptCookies) {
    acceptCookies.addEventListener('click', () => {
      localStorage.setItem('cookieConsent', 'accepted');
      cookieBanner.classList.remove('active');
    });
  }

  if (declineCookies) {
    declineCookies.addEventListener('click', () => {
      localStorage.setItem('cookieConsent', 'declined');
      cookieBanner.classList.remove('active');
    });
  }
}

// FAQ Search
function initFAQSearch() {
  const searchInput = document.getElementById('faqSearch');
  if (!searchInput) return;

  searchInput.addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const faqCategories = document.querySelectorAll('.faq-category');

    faqCategories.forEach(category => {
      const questions = category.querySelectorAll('.accordion-item');
      let categoryHasMatch = false;

      questions.forEach(question => {
        const questionText = question.querySelector('.accordion-trigger').textContent.toLowerCase();
        const answerText = question.querySelector('.accordion-content').textContent.toLowerCase();

        if (questionText.includes(searchTerm) || answerText.includes(searchTerm)) {
          question.style.display = '';
          categoryHasMatch = true;
        } else {
          question.style.display = 'none';
        }
      });

      // Hide category if no matches
      category.style.display = categoryHasMatch ? '' : 'none';
    });
  });
}

// Set Active Navigation Link
function setActiveNavLink() {
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage || (currentPage === '' && href === 'index.html')) {
      link.classList.add('active');
    }
  });
}

// Smooth Scroll for Anchor Links
function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      if (href !== '#') {
        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      }
    });
  });
}

// Close modal when clicking outside
function initModalOutsideClick() {
  document.querySelectorAll('.modal-overlay').forEach(overlay => {
    overlay.addEventListener('click', function(e) {
      if (e.target === this) {
        this.classList.remove('active');
        document.body.style.overflow = '';
      }
    });
  });
}

// Initialize all functions when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
  initMobileMenu();
  initLeadForm();
  initContactForm();
  initAccordions();
  initCookieBanner();
  initFAQSearch();
  setActiveNavLink();
  initSmoothScroll();
  initModalOutsideClick();
});

// Export functions for use in HTML onclick attributes
window.openModal = openModal;
window.closeModal = closeModal;
