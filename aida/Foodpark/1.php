<?php   include_once ('../menu.php'); ?>
<?php

    if(isset($_POST['submit']) and $_FILES){
	move_uploaded_file($_FILES['file']['tmp_name'], "../Foodpark/".$_FILES['file']['name']);
	echo "Файл додвно";
   } else echo "Error!";

?>
<ul><form  method="post" action="" enctype="multipart/form-data">
<p><input class="btn btn-default" type="file" name="file"><br></p>
<p><input class="btn btn-default" type="submit" name="submit" value="Завантажити" ></p>
</form><ul>

<?php $path = scandir("uploades");
foreach($path as $f){
	if($f != '.' and $f != '..'){
	echo $f."<br>";
	}
}

?> 

<center>
<html lang="ua">
<head>
<title>Foodpark</title>
<link rel="stylesheet" href="style.css" title="WebAugur's Style" type="text/css" -->
</head>
<body>
<div>
    
    <ul>
        <table border = "1" class="iksweb" >
<?php
Function fncLinkDir( $dirname )
  {
  /* Get rid of those stupid filenames  */
  /* Was I sleepy when I did this?  Alrighty then.  */
  if ( is_file( $DOCUMENT_ROOT.$REQUEST_URI ) )
    {
        $REQUEST_URI = ereg_replace( $mefile = strrchr( $REQUEST_URI, "/" ), "/", $REQUEST_URI );
    };

  /* Open Current Working Directory for reading.  */
  if( !$dirid = @opendir( $dirname.$recurse ) )
    {
        print " &lt; - Unable to Open Directory";
        return 1;
    };


	while ($entry = @readdir($dirid)) 
          {

              if ( strpos( $entry, "." ) === 0 )
               {
                   continue;
               }

            
              if ( strpos( $entry, "_vti_" ) === 0 )
               {
                   continue;
               }

              $dirEntries[] = $entry;
          }


          sort( $dirEntries );
          reset( $dirEntries );


          print "<ul>\n";

          $i = 0;
          while( $dirEntries[$i] )
            {
            $fileName = $dirname . "/" . $dirEntries[$i];
              $fileNameShort = $dirEntries[$i];

              if( is_dir( $fileName ) )

                {

                    print "\t<h3><li class=\"folder\"><a>$fileNameShort/</a></h3>\n";

        
                    fncLinkDir( $fileName );

       
                    print "</li>\n";
                }
              else  
  
                { 

                    print "\t<tr><td><h4><li class=\"link\"><a href=\"$fileName\">$fileNameShort</li></h4></td></tr>\n";
                }


              $i ++;
            }


          print "</ul></details>\n";

  };

$indexuri = explode("?", $REQUEST_URI);
print "<h1>Index of ".urldecode($indexuri[0])."</h1>\n";
fncLinkDir(".", $recurse, $REQUEST_URI, $DOCUMENT_ROOT);
?>	</center>
</ul>
<html>
<head>
<script type="text/javascript">
var changePage = function() {
    var iframe = document.getElementById("myiframe");  
    var select = document.getElementById("pageselected");
    var url = select.options[select.selectedIndex].value;
    iframe.src = url;
}
</script>
</head>


<style type="text/css">




 form {
    padding: 0; /* Убираем поля */
    margin-left: 370px; /* Отступ слева */
   }
table.iksweb{text-decoration: none;border-collapse:collapse;width:70%;text-align:center;}
	table.iksweb th{font-weight:normal;font-size:15px; color:#ffffff;background-color:#51626e;}
	table.iksweb td{font-size:12px;color:#850000;}
	table.iksweb td,table.iksweb th{white-space:pre-wrap;padding:7px 5px;line-height:12px;vertical-align: middle;border: 2px solid #3d3b47;}	table.iksweb tr:hover{background-color:#f9fafb}
	table.iksweb tr:hover td{color:#121212;cursor:default;}
</style>


</html>