<?php

include 'header.php';
?>
<div class="container" style="margin-top:30px; height:600px;">
	<div class="row">
			<?php

			for ($x = 0; $x <= 10; $x++) {
				?>

				 <div class="card col-sm-3" style="width:400px">
            <img class="card-img-top" src="images/flower.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>

				<?php

				// echo "<div class='card bg-primary text-white'>
				// <div class='card-body'>Primary card $x</div>
				// <br>";
			}

			?>
	</div>
</div>
<?php
include 'footer.php';

?>