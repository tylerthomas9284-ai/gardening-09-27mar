# Nature Gardening Website - HTML/CSS/JS Version

This is a complete static HTML/CSS/JavaScript conversion of the Nature Gardening website.

## 📁 File Structure

```
/public-site/
├── index.html              # Home page
├── about.html              # About Us page
├── services.html           # Services page (to be added)
├── pricing.html            # Pricing page (to be added)
├── contact.html            # Contact page (to be added)
├── faq.html                # FAQ page (to be added)
├── privacy.html            # Privacy Policy (to be added)
├── terms.html              # Terms & Conditions (to be added)
├── disclaimer.html         # Disclaimer (to be added)
├── cookie-policy.html      # Cookie Policy (to be added)
├── css/
│   └── styles.css          # Main stylesheet
├── js/
│   └── main.js             # Main JavaScript file
└── README.md               # This file
```

## 🚀 Features

### ✅ Completed
- **Responsive Design**: Mobile-first approach, works on all devices
- **Professional Styling**: Custom CSS with CSS variables for easy theming
- **Interactive Components**:
  - Mobile navigation menu
  - Modal dialogs (lead generation form)
  - Cookie consent banner
  - Accordion (for FAQ page)
  - Form validation
- **SEO Optimized**: Meta tags, semantic HTML
- **Accessibility**: ARIA labels, keyboard navigation support
- **Performance**: Optimized CSS, minimal JavaScript

### 📄 Pages Created
1. **index.html** - Home page with hero, stats, services, how it works ✅
2. **about.html** - About page with mission, values, team, achievements ✅
3. **services.html** - Services page with all 6 main services ✅
4. **pricing.html** - Pricing page with packages, add-ons, discounts ✅
5. **contact.html** - Contact page with form and information ✅
6. **faq.html** - FAQ page with searchable questions ✅
7. **privacy.html** - Privacy Policy (GDPR compliant) ✅
8. **terms.html** - Terms & Conditions ✅
9. **disclaimer.html** - Legal Disclaimer ✅
10. **cookie-policy.html** - Cookie Policy ✅

### 🎨 Styling (styles.css)
- CSS Variables for consistent theming
- Flexbox and Grid layouts
- Responsive breakpoints
- Smooth transitions and hover effects
- Card components
- Form elements
- Modal overlays
- Cookie banner
- Accordion styles

### ⚙️ JavaScript (main.js)
- Mobile menu toggle
- Modal open/close functions
- Form handling and validation
- Accordion functionality
- Cookie consent management
- FAQ search functionality
- Active navigation highlighting
- Smooth scrolling

## 🔧 How to Use

### Local Development
1. Simply open `index.html` in a web browser
2. No build process or server required
3. All pages are standalone HTML files

### Deployment
Upload all files to your web server maintaining the folder structure:
- `/public-site/` as root
- Keep `/css/` and `/js/` folders intact
- Images are loaded from Unsplash URLs

## 📱 Browser Support
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 🎯 Key Components

### Header & Navigation
- Sticky header with logo
- Responsive navigation menu
- Mobile hamburger menu
- CTA button for lead generation

### Lead Generation Modal
- Contact form with validation
- Privacy policy consent checkbox
- Accessible and mobile-friendly
- Stores to localStorage (demonstration)

### Cookie Banner
- GDPR-compliant cookie consent
- Accept/Decline options
- Persistent choice using localStorage
- Link to cookie policy

### Forms
- Client-side validation
- Required field indicators
- Accessible labels and inputs
- Success/error messaging

## 🔐 Privacy & Compliance
- Privacy Policy page
- Terms & Conditions page
- Cookie Policy page
- Disclaimer page
- GDPR-compliant cookie consent
- Contact form consent checkbox

## 📊 SEO Features
- Semantic HTML5 elements
- Meta descriptions on all pages
- Descriptive page titles
- Alt text for all images
- Proper heading hierarchy
- Internal linking structure

## 🎨 Customization

### Colors
Edit CSS variables in `styles.css`:
```css
:root {
  --color-green-600: #16a34a;  /* Primary brand color */
  --color-green-700: #15803d;  /* Hover/darker */
  /* ... other colors */
}
```

### Content
- All text is editable directly in HTML files
- No database or CMS required
- Easy to maintain and update

### Images
- Currently using Unsplash URLs
- Replace with your own images by updating `src` attributes
- Maintain aspect ratios for best display

## 📞 Contact Information
Update contact details in:
- Footer (all pages)
- Contact page
- Header phone/email links

Current contact info:
- Phone: +1-805-294-6688
- Email: help@naturegardening.site
- Address: 10221 Deserts St Ste 212, Atmore, TX 78216

## 🚧 Remaining Pages to Create
The following pages need to be created following the same structure:
- services.html
- pricing.html
- contact.html
- faq.html
- privacy.html
- terms.html
- disclaimer.html
- cookie-policy.html

Each page should include:
- Same header and footer
- Lead generation modal
- Cookie banner
- Consistent styling
- Mobile responsiveness

## 💡 Tips for Adding New Pages
1. Copy the structure from `index.html` or `about.html`
2. Update the `<title>` and meta description
3. Keep the same header and footer
4. Include the lead modal and cookie banner
5. Link the CSS and JS files
6. Update navigation active states

## 📝 License
All rights reserved © 2025 Nature Gardening

---

For questions or support, contact: help@naturegardening.site