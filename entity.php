<?php

use classes\Entity;
use classes\ErrorMessage;
use classes\PreviewProvider;
use classes\SeasonProvider;

require_once ("includes/header.php");

if(!isset($_GET["id"])){
    ErrorMessage::show("No ID passed into page");
}

$entityId = $_GET["id"];
$entity = new Entity($con,$entityId);

$preview = new PreviewProvider($con, $userLoggedIn);
echo $preview->CreatePreviewVideo($entity);

$seasonProvider = new SeasonProvider($con,$userLoggedIn);
echo $seasonProvider->create($entity);

$categoryContainers = new \classes\CategoryContainers($con,$userLoggedIn);
echo $categoryContainers->showCategory($entity->getCategoryId(),"You might also like");
