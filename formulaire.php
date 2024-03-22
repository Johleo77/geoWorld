<?php  require_once 'header.php';

require_once 'inc/manager-db.php';
require_once 'index2.php';




if(isset($_GET['continent'])){
  $continent = $_GET['continent'];
} else {
  $continent = "Asia";
}

?>

<tr>
   <td> <img src="ImagesC/<?php echo $continent?>.png"></td>