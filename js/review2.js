document.addEventListener('DOMContentLoaded', function() {
    // Variables to track the number of displayed reviews and total reviews
    let displayedReviews = 5;
    let totalReviews = 0;

    // Function to fetch and display reviews from the database
    function fetchReviews() {
      // Send an AJAX request to fetch the reviews
      const xhr = new XMLHttpRequest();
      xhr.open('GET', 'fetch_reviews2.php');
      xhr.onload = function() {
        if (xhr.status === 200) {
          const reviews = JSON.parse(xhr.responseText);
          const reviewsContainer = document.querySelector('.reviews');

          // Clear existing reviews
          reviewsContainer.innerHTML = '';

          // Set the total number of reviews
          totalReviews = reviews.length;

          // Loop through the reviews and create HTML elements to display them
          reviews.slice(0, displayedReviews).forEach(function(review) {
            const reviewItem = document.createElement('div');
            reviewItem.className = 'review';
            reviewItem.innerHTML = `
              <h3>${review.name}</h3>
              <p>${review.review}</p>
              <div class="rating">Rating: ${getStarRating(review.rating)}</div>
            `;

            reviewsContainer.appendChild(reviewItem);
          });

          // Show the "See More" button if there are more reviews to display
          if (displayedReviews < totalReviews) {
            const seeMoreButton = document.createElement('button');
            seeMoreButton.textContent = 'See More';
            seeMoreButton.className = 'see-more-button';
            seeMoreButton.addEventListener('click', showMoreReviews);

            reviewsContainer.appendChild(seeMoreButton);
          }

          // Show the "See Less" button if more reviews are displayed
          if (displayedReviews > 5) {
            const seeLessButton = document.createElement('button');
            seeLessButton.textContent = 'See Less';
            seeLessButton.className = 'see-less-button';
            seeLessButton.addEventListener('click', showLessReviews);

            reviewsContainer.appendChild(seeLessButton);
          }
        }
      };
      xhr.send();
    }

    // Function to generate star rating HTML based on rating value
    function getStarRating(rating) {
      const maxRating = 5;
      let starsHTML = '';

      // Add filled stars based on rating
      for (let i = 1; i <= rating; i++) {
        starsHTML += '<i class="fas fa-star"></i>';
      }

      // Add empty stars for the remaining rating
      for (let i = rating + 1; i <= maxRating; i++) {
        starsHTML += '<i class="far fa-star"></i>';
      }

      return starsHTML;
    }

    // Function to show more reviews
    function showMoreReviews() {
      // Increment the number of displayed reviews
      displayedReviews += 5;

      // Fetch and display reviews again
      fetchReviews();
    }

    // Function to show less reviews
    function showLessReviews() {
      // Decrease the number of displayed reviews
      displayedReviews -= 5;

      // Fetch and display reviews again
      fetchReviews();
    }

    // Call the fetchReviews function to initially populate the reviews
    fetchReviews();
  });