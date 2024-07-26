<html>
<body>
<form method="POST">
<input name="userid" id = "userid" placeholder="USER" required/>
<input type="password"  name="pass" id="pass" placeholder="password"/>
<input type="submit" value="Login"/>
<input type="reset" value="Clear"/>
</form>
<p>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $user=$_POST['userid'];
        $pass=$_POST['pass'];
        $file = fopen("cred.txt", "r");
        $content = trim(fgets($file));

        if($content == $user.":".$pass){
                echo "Authenticated!!";
        }
        else{
                echo "Check the credentials";
        }
        fclose($file);
}?>
</p>
</body>
</html>
<!-- content inside the login.txt file  -->
<!-- login.txt admin:admin123 -->
