<?php
/* Basic PHP request.  returns get requests.  Does not work woth post.
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
