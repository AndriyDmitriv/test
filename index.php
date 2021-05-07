<!DOCTYPE html>
<center>
<html>

    <?php

       include_once ('menu.php'); 
    
    ?>
    	
<?php
 
$db_server = "localhost";
$db_user = "inventar_it";
$db_password = "08lns19lok@";
$db_name = "inventar_it"; 
 
$link = mysqli_connect($db_server, $db_user, $db_password, $db_name) or die(mysqli_connect_error($link));
 
mysqli_query($link, "SET NAMES 'utf8'");
 
$query = "SELECT * FROM noytbuk";
 
$result = mysqli_query($link, $query) or die(mysqli_error($link));
 
while ($row = mysqli_fetch_assoc($result) ) {      
    $mass[] = $row;  
}
 
$show = '<table id="info-table" border = "1" class="iksweb" >';

$show .= '<tr>';
foreach($mass[0] as $key => $val) {
$show .= '<th>'.$key.'</th>';
}
 
foreach ($mass as $value) {                
    $show .= '<tr>';                              
    foreach ($value as $subvalue) {      
        $show .= '<td>'.$subvalue.'</td>';
    }
    $show .= '<td><font size="5" color="red" face="Arial"><a  href="?del='.$value['id'].'">X</a></td>';
    $show .= '</tr>';
}
 
$show .= '</table>';
 
if(!empty($_GET['del'])){
    $queryDel = "DELETE FROM `noytbuk` WHERE id=".$_GET['del'];
    mysqli_query($link, $queryDel) or die(mysqli_error($link));
}
mysqli_close($link);
 




?>





</head>
<body>
    <?=$show?>
</body>
 
</html>
<center>
<?php

if(isset($_POST['Model']) && isset($_POST['C/N']) && isset($_POST['IP'])&& isset($_POST['Locaciy']) && isset($_POST['Data'])&& isset($_POST['aida'])){
 

     $link = mysqli_connect($db_server, $db_user, $db_password, $db_name)
        or die("Помилка " . mysqli_error($link)); 
     echo stripslashes($textos);
     
    
    $mod =  htmlentities(mysqli_real_escape_string($link, $_POST['Model']));
    $cn =   htmlentities(mysqli_real_escape_string($link, $_POST['C/N']));
    $ip =  htmlentities(mysqli_real_escape_string($link, $_POST['IP']));
    $loc =  htmlentities(mysqli_real_escape_string($link, $_POST['Locaciy']));
    $data =   htmlentities(mysqli_real_escape_string($link, $_POST['Data']));
    $aida =  htmlentities(mysqli_real_escape_string($link, $_POST['aida']));
   
     
    $query ="INSERT INTO noytbuk VALUES(NULL,'$mod','$cn','$ip','$loc','$data','$aida') ";
    

    $result = mysqli_query($link, $query) or die("Eror " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Дані додаео</span>";
    }
 
    mysqli_close($link);
}
?>


</center>
<h2>Добавить новую модель</h2>
<form method="POST">
  <div >
											<table >  
 <table>    
 <tr><td> Модель:</td><td><input type="text" name="Model" /></td><td> Серійни номер:</td><td><input type="text" name="C/N" /></td><td> IP:</td><td><input type="text" name="IP" /></p> </td></tr>   




  <tr><td> Локація:</td><td><input type="text" name="Locaciy" /></td><td> Дата видачі:</td><td> <input type="text" name="Data" /></td><td> Aida:</td><td>  <input type="text" name="aida" /></p></td></tr> 
<table ><p></p>  <input type="submit" value="Добавить" class="btn btn-default">
    <h1></h1>
    

</form>
</body>

	    

	    			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 
    <script type="text/javascript" src="scnout.js"></script>
 
    <link rel="stylesheet" type="text/css" href="style.css">

<div class="container">
   </div>
    <div id="display"></div>
</body>
					

<script>
function tableSearch() {
    var phrase = document.getElementById('search-text');
    var table = document.getElementById('info-table');
    var regPhrase = new RegExp(phrase.value, 'i');
    var flag = false;
    for (var i = 1; i < table.rows.length; i++) {
        flag = false;
        for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
            flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
            if (flag) break;
        }
        if (flag) {
            table.rows[i].style.display = "";
        } else {
            table.rows[i].style.display = "none";
        }

    }
}</script>
<style type="text/css">









table.iksweb{text-decoration: none;border-collapse:collapse;width:70%;text-align:center;}
	table.iksweb th{font-weight:normal;font-size:15px; color:#ffffff;background-color:#51626e;}
	table.iksweb td{font-size:12px;color:#850000;}
	table.iksweb td,table.iksweb th{white-space:pre-wrap;padding:7px 5px;line-height:12px;vertical-align: middle;border: 2px solid #3d3b47;}	table.iksweb tr:hover{background-color:#f9fafb}
	table.iksweb tr:hover td{color:#121212;cursor:default;}
</style>


</html>