
// <-----
// var searchForm = document.getElementById('searchForm');
//   var searchInput = document.getElementById('searchInput');
//   var searchResults = document.getElementById('searchResults');

//   searchForm.addEventListener('submit', function(event) {
//     event.preventDefault(); // Prevent form submission

//     var query = searchInput.value;
//     var xhr = new XMLHttpRequest();

//     xhr.open('POST', 'search.php', true);
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//     xhr.onreadystatechange = function() {
//       if (xhr.readyState === XMLHttpRequest.DONE) {
//         if (xhr.status === 200) {
//           var response = xhr.responseText;
//           searchResults.innerHTML = response;
//         } else {
//           console.error('Request failed. Returned status of ' + xhr.status);
//         }
//       }
//     };

//     xhr.send('search=' + encodeURIComponent(query));
//   });------>

var searchForm = document.getElementById('searchForm');
var searchInput = document.getElementById('searchInput');
var searchLocation = document.getElementById('searchLocation');
var searchCategory = document.getElementById('searchCategory');
var searchResultsBanner = document.getElementById('searchResultsBanner');

searchForm.addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission

  var query = searchInput.value;
  var location = searchLocation.value;
  var category = searchCategory.value;
  var xhr = new XMLHttpRequest();

  xhr.open('POST', 'search.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        var response = xhr.responseText;
        searchResultsBanner.innerHTML = response;
        searchResultsBanner.classList.add('show-banner'); // Show the banner
      } else {
        console.error('Request failed. Returned status of ' + xhr.status);
      }
    }
  };

  var formData = new FormData();
  formData.append('search', query);
  formData.append('searchlocation', location);
  formData.append('searchall', category);

  xhr.send(formData);
});
