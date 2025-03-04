var exclusivesContainer = document.querySelector('.exclusives');

fetch('js/gegevens.json')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    data.houses.forEach(function(house, index) {
      // Create the elements
      var houseDiv = document.createElement('div');
      var image = document.createElement('img');
      var span = document.createElement('span');
      var heading = document.createElement('h3');
      var price = document.createElement('p');
      var moreInfoLink = document.createElement('a');
     
      // Set the content and attributes
      image.src = house.image_url;
      heading.textContent = house.location;
      price.textContent = house.price;
      moreInfoLink.href = 'house' + (index + 1) + '.php'; 
      moreInfoLink.textContent = 'More Info';
      // Append the elements
      span.appendChild(heading);
      span.appendChild(price);
      span.appendChild(document.createElement('br'));
      span.appendChild(moreInfoLink);
      houseDiv.appendChild(image);
      houseDiv.appendChild(span);

      exclusivesContainer.appendChild(houseDiv);
    });
  })
  .catch(function(error) {
    console.log('Error:', error);
  });
