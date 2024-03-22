<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php  require_once 'header.php'; ?>
<?php
require_once 'inc/manager-db.php';


if(isset($_GET['continent'])){
  $continent = $_GET['continent'];
} else {
  $continent = "Asia";
}


$desPays = getCountriesByContinent($continent);




?>

<main role="main" class="flex-shrink-0">

  <div class="container">
    <h1>Les pays en <?php echo $continent; ?></h1>
    <h2>Nombre de Villes : <?php echo getNBVilles(); ?></h2>
    <h3>Nombre de Pays : <?php echo getNBPays(); ?></h3>

    <div>
     <table class="table">
         <tr>
           <th>Drapeau</th>
           <th>Nom</th>
           <th>Population</th>
           <th>Continent</th>
           <th>Capital</th>
           <th>Chef d'Etat</th>
           <th>Gouvernement</th>
           <th>Langue officiel</th>

           


         </tr>
       <?php foreach ($desPays as $pays){ ?>
          <tr>
            <td> <img src="images/drapeau/<?php if(($pays->Code2)){ echo strtolower($pays->Code2); } else {echo "as.png";} ?>.png"></td>
            <td> <a href="formulaire.php?continent=<?php echo $pays->Continent?>"><?php echo $pays->Name?></td>
            <td> <?php echo $pays->Population ?></td>
            <td> <?php echo $pays->Continent?></td>
            <td> <?php if(!empty($pays->Capital)){ echo getByCapital($pays->Capital); } else { echo "vide"; } ?></td>
            <td> <?php echo $pays->HeadOfState?></td>
            <td> <?php echo $pays->GovernmentForm?></td>
            <td> <?php echo getLangue( $pays->id )?></td>



            
            



          </tr>
      
       <?php } ?>
     </table>
    </div>
    
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
