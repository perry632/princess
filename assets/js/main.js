document.addEventListener('DOMContentLoaded', function() {

  // ===== TESTIMONIAL AUTO-SCROLL =====
  const track = document.getElementById('reviewTrack');
  const dots = document.querySelectorAll('.dot');
  const slides = document.querySelectorAll('.review-slide');
  
  if (track && dots.length > 0 && slides.length > 0) {
    let currentIndex = 0;
    const totalSlides = slides.length;
    let interval;

    function goToSlide(index) {
      if (index < 0) index = totalSlides - 1;
      if (index >= totalSlides) index = 0;
      currentIndex = index;
      track.style.transform = 'translateX(-' + (currentIndex * 100) + '%)';
      dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === currentIndex);
      });
    }

    function nextSlide() {
      goToSlide(currentIndex + 1);
    }

    function startAutoScroll() {
      interval = setInterval(nextSlide, 4000);
    }

    function resetAutoScroll() {
      clearInterval(interval);
      startAutoScroll();
    }

    dots.forEach((dot) => {
      dot.addEventListener('click', function() {
        const index = parseInt(this.getAttribute('data-index'));
        goToSlide(index);
        resetAutoScroll();
      });
    });

    startAutoScroll();
  }

  console.log('Royal Caribbean Cruise - Loaded successfully!');
});