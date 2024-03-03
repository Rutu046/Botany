document.addEventListener('DOMContentLoaded', function() {
    // Add animation class to each card after the page loads
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
      card.classList.add('animate__animated', 'animate__fadeInUp');
    });
  });
  