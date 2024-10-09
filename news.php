<?php
require_once 'header.php';
use App\classes\Helper;
use App\classes\Site;
?>
<div class="container mx-auto">
<h1 class="my-4 text-center">Ghana News</h1>
  <div class="btn-group btn-group-toggle d-flex flex-wrap justify-content-center" data-toggle="buttons" id="categoryButtons">
    <!-- Category buttons will be appended here dynamically -->
  </div>
  <div id="newsContainer" class="row mx-auto">
    <!-- News articles will be displayed here -->
  </div>
</div>


<?php
require_once 'footer.php';
?>

