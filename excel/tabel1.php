



<?php   include_once ('header.php'); ?>


<center>
<html lang="ua">
<head>
<title>Foodpark</title>
<link rel="stylesheet" href="style.css" title="WebAugur's Style" type="text/css" -->
</head>
<body>
<div>
    
    <ul>
        <table id="info-table" border = "1" class="iksweb" >
<?php
Function fncLinkDir( $dirname )
  {

  if ( is_file( $DOCUMENT_ROOT.$REQUEST_URI ) )
    {
        $REQUEST_URI = ereg_replace( $mefile = strrchr( $REQUEST_URI, "/" ), "/", $REQUEST_URI );
    };


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
    padding: 0; 
    margin-left: 370px; 
   }
table.iksweb{text-decoration: none;border-collapse:collapse;width:70%;text-align:center;}
	table.iksweb th{font-weight:normal;font-size:15px; color:#ffffff;background-color:#51626e;}
	table.iksweb td{font-size:12px;color:#850000;}
	table.iksweb td,table.iksweb th{white-space:pre-wrap;padding:7px 5px;line-height:12px;vertical-align: middle;border: 2px solid #3d3b47;}	table.iksweb tr:hover{background-color:#f9fafb}
	table.iksweb tr:hover td{color:#121212;cursor:default;}
</style>
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
}
</script>

</html>