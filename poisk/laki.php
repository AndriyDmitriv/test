<?php
    if(isset($_POST['submit']) and $_FILES){
	move_uploaded_file($_FILES['file']['tmp_name'], "../aida/Lucky-Bull&Whisky-Bar/".$_FILES['file']['name']);
	echo "Файл додвно";
   } else echo "Error!";

?>
<form  method="post" action="" enctype="multipart/form-data">
<input class="button" type="file" name="file"><br>
<input class="button" type="submit" name="submit" value="Upload" >
</form>

<?php $path = scandir("uploades");
foreach($path as $f){
	if($f != '.' and $f != '..'){
	echo $f."<br>";
	}
}

?> 