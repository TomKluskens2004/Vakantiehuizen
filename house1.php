

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- *Note: You must have internet connection on your laptop or pc other wise below code is not working -->
    <!-- CSS for full calender -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
    <!-- JS for jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS for full calender -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
    <!-- bootstrap css and js -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c6257c4536.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <title>House details</title>
    <script>
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
    function showReviewForm() {
            $('#reviewModal').modal('show');
        }

  </script>
</head>
<body>
<?php include 'include/nav.php';?>
    <div class="house-details">
        <div class="house-title">
            <h1 id="house-name"></h1>
            <div class="row">
              <div>
              <p id="location"></p>
              </div>
            </div>
          </div>
         
          <div class="swiper">
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="" alt="" id="image-1"></div>
        <div class="swiper-slide"><img src="" alt="" id="image-2"></div>
        <div class="swiper-slide"><img src="" alt="" id="image-3"></div>
        <div class="swiper-slide"><img src="" alt="" id="image-4"></div>
        <div class="swiper-slide"><img src="" alt="" id="image-5"></div>
        <div class="swiper-slide"><img src="" alt="" id="image-6"></div>
        <div class="swiper-slide"><img src="" alt="" id="image-7"></div>
        <div class="swiper-slide"><img src="" alt="" id="image-8"></div>
        <div class="swiper-slide"><img src="" alt="" id="image-9"></div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-scrollbar"></div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="js/swiper.js"></script>    
        
        <div class="small-details">
            <h2 id="house-description"></h2>
            <br>
            <p id="house-details"></p>
            <h4 id="house-price"></h4>
          </div>    
             
        <hr class="line">
       
        <ul class="details-list">
        
            <li><i class="fas fa-home" style="color: #ff5361";></i>Entire Home
                <span>You will have the entire house for you.</span>
            </li>
            <li><i class="fas fa-paint-brush"  style="color: #ff5361";></i>Enhanced Clean
                <span>This host has comitted to WanderStays cleaning process.</span>
            </li>
            <li><i class="fas fa-map-marker-alt"  style="color: #ff5361";></i>Great Location
                <span>All of recent guests have gave the location 5 stars.</span>
            </li>
            <li><i class="fas fa-heart"  style="color: #ff5361";></i>Friendly host
                <span>All of recent guests have gave the host 5 stars.</span>
            </li>
        </ul>
        <hr class="line">
        <?php include 'calendar.php';?>
        <hr class="line">
        <a href="#" class="wr" onclick="showReviewForm()">Write Review</a>
        <br>
        <br>
        <div class="reviews"></div>
        <script src="js/review1.js"></script>
        
        <hr class="line">
        <div class="modal" id="reviewModal" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Write a Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="review-form">
                        <form action="submit-review.php" method="POST" onsubmit="showSuccessMessage()">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name"><br><br>
                            <label for="review">Review:</label>
                            <textarea id="review" name="review"></textarea><br><br>
                            <label for="rating">Rating:</label>
                            <input type="hidden" id="rating" name="rating">
                            <span class="fa fa-star" id="1-star"></span>
                            <span class="fa fa-star" id="2-star"></span>
                            <span class="fa fa-star" id="3-star"></span>
                            <span class="fa fa-star" id="4-star"></span>
                            <span class="fa fa-star" id="5-star"></span><br><br>
                            <input type="submit" value="Submit" style="background-color: #ff5361;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
       
        function showSuccessMessage() {
            alert("Successful!");
        }
    </script>
    






        <div class="home-desc">
            <p id="house-info"></p>
          </div>
          <script src="js/house1.js"></script>   
        <hr class="line">
        <div class="map">
            <h3>Location on map</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12593.378858252652!2d-0.7642481789936333!3d37.899004651266495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd630603aea171ad%3A0xcdea7fc495ea7764!2sDehesa%20de%20Campoamor%2C%20Alicante%2C%20Spain!5e0!3m2!1sen!2sbe!4v1686076566058!5m2!1sen!2sbe"width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="home-desc">
                <b><span id="map"></span></b>
              </div>
              
            <p>It feels like home.</p>
        </div>
        <hr class="line">
      
    </div>
    
    <?php include 'include/footer.php';?>
    
</body>
</html>