fetch('js/gegevens.json')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    var house = data.houses[1]; // Assuming you want to display the first house in the JSON

    // Fill the HTML elements for house title
    var houseName = document.getElementById('house-name');
    
    var location = document.getElementById('location');
    var map = document.getElementById('map');
    // Fill the HTML elements for small details
    var houseDescription = document.getElementById('house-description');
    var houseDetails = document.getElementById('house-details');
    var housePrice = document.getElementById('house-price');
    var houseInfo = document.getElementById('house-info');
    document.getElementById('image-1').src = house.image_1_url;
    document.getElementById('image-2').src = house.image_2_url;
    document.getElementById('image-3').src = house.image_3_url;
    document.getElementById('image-4').src = house.image_4_url;
    document.getElementById('image-5').src = house.image_5_url;
    document.getElementById('image-6').src = house.image_6_url;
    document.getElementById('image-7').src = house.image_7_url;
    document.getElementById('image-8').src = house.image_8_url;
    document.getElementById('image-9').src = house.image_9_url;
    houseName.textContent = house.name + ' in ' + house.location;
   
    location.textContent = 'Location: ' + house.location + ', ' + house.country;
    houseInfo.textContent = house.info;
    houseDetails.textContent = house.persons + ' guests, \n' + house.amneties;
    housePrice.textContent = house.price;
    houseDescription.textContent = house.description;
    map.textContent = house.location + ', ' + house.country;
    
  })
  .catch(function(error) {
    console.log('Error:', error);
  });
