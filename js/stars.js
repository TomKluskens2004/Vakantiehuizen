document.addEventListener('DOMContentLoaded', function() {
    const stars = document.querySelectorAll('.fa-star');
    const ratingInput = document.getElementById('rating');

    stars.forEach(function(star) {
      star.addEventListener('click', function() {
        const clickedStarId = this.getAttribute('id');
        const clickedStarIndex = parseInt(clickedStarId.charAt(0));
        
        for (let i = 1; i <= stars.length; i++) {
          const starElement = document.getElementById(i + '-star');
          
          if (i <= clickedStarIndex) {
            starElement.classList.add('checked');
          } else {
            starElement.classList.remove('checked');
          }
        }

        ratingInput.value = clickedStarIndex;
      });
    });
  });