<?php


include "db.php";


if (isset($_POST['search'])) {

   
    $Name = $_POST['search'];

  
    $Query = "SELECT * FROM noytbuk WHERE Model LIKE '%$Name%' LIMIT 5";

    $ExecQuery = mysqli_query($connectionDB, $Query);

  
    echo '<ul>';
    
 

   
    while ($Result = mysqli_fetch_array($ExecQuery)) {
?>
   

       
            <a><table border="1">
              <table border="1"class="iksweb">  <?php  
                
 echo "<a href='?id=".(int)$Result['id']."'></a>";               

echo
                            
                            " <tr><td>Model</td><td>". $Result['Model']
                            ." <tr><td>C/N</td><td>". $Result['C/N']
                            ." <tr><td>IP</td><td>". $Result['IP']
                            ." <tr><td>Locaciy</td><td>". $Result['Locaciy']
                            ." <tr><td>Data</td><td> ". $Result['Data']
                            ." <tr><td>Aida</td><td> ". $Result['aida']."</td>
                             </tr>\n"; ?></table>
            </a> </table>
        </li>

<?php
    }
}
?>
    </ul>