const backBtn = document.querySelector('.back-btn');
backBtn.addEventListener('click', () => {
    window.scrollTo(0, 0);
});

const contactLink = document.querySelector('#contact-link');
const contactSection = document.querySelector('#contact-us');

contactLink.addEventListener('click', function(event) {
  event.preventDefault(); // prevent the link from scrolling to the section
  contactSection.style.display = 'block';
});
