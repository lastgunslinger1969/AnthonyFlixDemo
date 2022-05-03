<!DOCTYPE html>
<html>
<body>

<H1></H1>

<?php

use classes\CategoryContainers;
use classes\PreviewProvider;

require_once ("includes/header.php");

$preview = new PreviewProvider($con, $userLoggedIn);
echo $preview->CreatePreviewVideo(null);

$containers = new CategoryContainers($con, $userLoggedIn);
echo $containers->showAllCatergories();

?>
</body>
</html>