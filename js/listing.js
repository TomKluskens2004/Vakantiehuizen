var housesContainer = document.getElementById('houses-container');

fetch('js/gegevens.json')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    data.houses.forEach(function(house, index) {
      // Create the elements
      var houseDiv = document.createElement('div');
      houseDiv.className = 'house';

      var houseImgDiv = document.createElement('div');
      houseImgDiv.className = 'house-img';
      var houseImg = document.createElement('img');
      houseImg.src = house.image_1_url;
      houseImgDiv.appendChild(houseImg);

      var houseInfoDiv = document.createElement('div');
      houseInfoDiv.className = 'house-info';
      var nameP = document.createElement('p');
      nameP.textContent = house.name + ' in ' + house.location; // Include location in the name
      var descH3 = document.createElement('h3');
      descH3.textContent = house.description;
      var amnetiesP = document.createElement('p');
      amnetiesP.textContent = house.amneties;
      
      var housePriceDiv = document.createElement('div');
      housePriceDiv.className = 'house-price';
      var personsP = document.createElement('p');
      personsP.textContent = house.persons + ' guests';
      var priceH4 = document.createElement('h4');
      priceH4.textContent = house.price;
      var moreInfoLink = document.createElement('a');
      moreInfoLink.href = 'house' + (index + 1) + '.php'; 
      moreInfoLink.textContent = 'More Info';


      // Append the elements
      houseInfoDiv.appendChild(nameP);
      houseInfoDiv.appendChild(descH3);
      houseInfoDiv.appendChild(amnetiesP);
      housePriceDiv.appendChild(document.createElement('br'));
      housePriceDiv.appendChild(document.createElement('br'));
      housePriceDiv.appendChild(personsP);
      housePriceDiv.appendChild(priceH4);
      housePriceDiv.appendChild(document.createElement('br'));
      houseInfoDiv.appendChild(housePriceDiv);
      housePriceDiv.appendChild(moreInfoLink);
      houseDiv.appendChild(houseImgDiv);
      houseDiv.appendChild(houseInfoDiv);
      housesContainer.appendChild(houseDiv);
    });
  })
  .catch(function(error) {
    console.log('Error:', error);
  });
