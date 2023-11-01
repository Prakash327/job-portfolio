<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
        .search-results {
  position: relative;
}

.search-results-banner {
  display: none; /* Hide the banner by default */
  position: absolute;
  top: 0;
  right: 0;
  width: 300px; /* Adjust the width as needed */
  height: 100%;
  background-color: #f1f1f1; /* Adjust the background color as needed */
  z-index: 999; /* Make sure the banner appears above other elements */
}

.show-banner {
  display: block !important; /* Override the display property to show the banner */
}

</style>
</head>
<body>
<form id="searchForm" method="POST">
  <div class="width-100 banner-section">
    <div class="container">
      <h1 class="banner-heading">Find The Best Job For Your Future</h1>
      <p class="banner-para">It's a long established fact that a reader will be distracted by the readable</p>
      <div class="search-sect">
        <input type="text" id="searchInput" class="search-textbox" placeholder="Search Company" name="search">
      </div>
      <div class="search-sect">
        <button id="searchButton" class="search-button" type="submit">Search</button>
      </div>
    </div>
  </div>
</form>
<div id="searchResults" class="search-results">
        <!-- Search results will be displayed here -->
        </div>
        

<div class="search-results">
  <div id="searchResultsBanner" class="search-results-banner">
    <!-- Banner content will be displayed here -->
  </div>
  <div id="searchResultsContent" class="search-results-content">
    <!-- Search results content will be displayed here -->
  </div>
</div>

<script>
  var searchForm = document.getElementById('searchForm');
  var searchInput = document.getElementById('searchInput');
  var searchResults = document.getElementById('searchResults');
  var searchResultsBanner = document.getElementById('searchResultsBanner');
  var searchResultsContent = document.getElementById('searchResultsContent');


  searchForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    var query = searchInput.value;
    var xhr = new XMLHttpRequest();

    xhr.open('POST', 'search.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          var response = xhr.responseText;
          searchResults.innerHTML = response;
        } else {
          console.error('Request failed. Returned status of ' + xhr.status);
        }
      }
    };

    xhr.send('search=' + encodeURIComponent(query));
  });
</script>

    
</body>
</html>