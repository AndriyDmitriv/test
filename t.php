<?php

$db_server = "localhost";
$db_user = "inventar_it";
$db_password = "08lns19lok@";
$db_name = "inventar_it"; 
    
    //Переменные для запроса вывода и сортировки
    $u = 'Найменування';
    $e = 'Тип';
    $st = 'Стан';
    
    $d = 'Коментар';
   
    
      
    $mysqli = new mysqli ( $db_server, $db_user, $db_password, $db_name);
      if ($mysqli->connect_errno)
        die ('Ошибка! Не удалось подключиться к базе данных!' . $mysqli->connect_errno);
            
    
    if (isset($_GET['page']))
      {
        $page = $_GET['page'];
      }	
    else
      $page = 1;
    
    $msg_on_page = 5;	//Количество записей на странице
    $start_from = ($page - 1) * $msg_on_page;
    $sql = "SELECT `parking`, `Найменування`, `Тип`, `Стан`, `Коментар`
        FROM `user_data` 
        ORDER BY $st $d LIMIT $start_from, $msg_on_page";
        
    $result = mysqli_query($mysqli,$sql);
    
      if (!$result)
        die('Error: ' . mysqli_error($mysqli));
      else
        {
          echo "<table border = '1'>
            <tr>
              <th>Имя пользователя</th>
              <th>E-mail</th>
              <th>Homepage</th>
              <th>Комментарий</th>
              <th>Дата добавления</th>
            </tr>";
      
          while ($row = mysqli_fetch_array($result))
            {
              echo "<tr>";
              echo "<td>" . $row['username'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['homepage'] . "</td>";
              echo "<td>" . $row['msg'] . "</td>";
              echo "<td>" . $row['send_time'] . "</td>";
            }
                
          echo "</table>";
      }		 
    
    
  //------------------------------------------------------------------------------------------------------		
    
  
  //Pagination
  $sql = "SELECT COUNT(id) FROM user_data";
  $result = mysqli_query($mysqli,$sql);
  
  if (!$result)
    die('Error: ' . mysqli_error($mysqli));
      
  else
    {
      $row = mysqli_fetch_array($result);
      $total_records = $row[0];
      $total_records = ceil($total_records / $msg_on_page);
      echo "<br>";
      for ($i = 1; $i <= $total_records; $i++)
      echo "<a href = 'index.php?page=" . $i . "'> " . $i . " </a>";
                    
    }		 
  
  mysqli_close($mysqli);		

?>