<?php

if(isset($_SESSION['status_faculty']))
{
	?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
	<strong>Hey!</strong> <?php echo $_SESSION['status_faculty']; ?>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	 </button>
	</div>
	<?php
	unset($_SESSION['status_faculty']);
}
?>