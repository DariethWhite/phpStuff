<?php
/* Basic PHP request.  returns GET requests.  Does not work with POST.
*  Currently untested
*/

$response = "";
if($_SERVER['REQUEST_METHOD'] == "GET" && !empty($_GET)) {
  foreach($_GET as $key=>$value) {
    $response .= $key . "=>" . $value . ",";
  }
  echo("Get Array = \"" . $response . "\"");
}
else {
  ?>
    Incorrect Request Type.
  <?php
}
