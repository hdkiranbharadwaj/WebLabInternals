<html>
<body>
<h2>
Enter your info:</h2>
<form   method="POST">
<textarea id="info" name = "info" rows="6" cols="50"></textarea>
<br>
<br>
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</form>
<p><?php
if($_SERVER['REQUEST_METHOD']=='POST'){
        $text = $_POST['info'];
        if (!empty($text)){
                $file = fopen('./form.txt', "a");
                fwrite($file, $text."\n");
                fclose($file);
                echo $text;
                echo("<br>  Succesfully Submitted");
        }
        else{
        echo "PLEASE ENTER THE INFO";}

}
?></p>
</body>
</html>
<!--  Permission upgrade for the form.txt file  -->
<!-- chmod 666 form.txt
chown www-data:www-data form.txt
chmod 644 form.txt -->
