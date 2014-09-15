<?php
require_once './'.$user->tipo.'/menu.php';
	echo '<section>';
		require_once './'.$user->tipo.'/'.$_GET['p'].'/form.php';
	echo '</section>';
?>