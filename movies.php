<?php
use classes\CategoryContainers;
use classes\PreviewProvider;

require_once ("includes/header.php");

$preview = new PreviewProvider($con, $userLoggedIn);
echo $preview->createMoviesPreviewVideo();

$containers = new CategoryContainers($con, $userLoggedIn);
echo $containers->showMovieCatergories();
?>