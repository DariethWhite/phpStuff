<?php
/* Basic PHP request.  returns POST requests.  Does not work with GET.
*  Currently untested
*/

$response = "";
if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST)) {
  foreach($_POST as $key=>$value) {
    $response .= $key . "=>" . $value . ",";
  }
  echo("Get Array = \"" . $response . "\"");
}
else {
  ?>
    Incorrect Request Type.
  <?php
}
