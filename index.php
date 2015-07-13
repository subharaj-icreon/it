<html>
<?php
error_reporting(0);
//session_start();
?>
<script type="text/javascript">





	/*function validateForm() {
    var x = document.forms["form1"]["myusername"].value;
    var y = document.forms["form1"]["mypassword"].value;
    if (x==null || x=="" || y==null || y=="") {
        alert("Please enter the Username or Password");
        return false;
    }
}*/
function validations(form)
            {
          
                if(!form.myusername.value)
                {
                    alert("Please enter the Username/Password");
                    form.myusername.focus();            
                    return false;
                }
                else if(!form.mypassword.value)
                {
                    alert("Please enter the Username/Password");
                    form.mypassword.focus();   
                    return false;
                  
                }
//                             
                
        
            }
</script>
<style>
background {
    opacity: 0.4;
    filter: alpha(opacity=40);
}
</style>
<title>::Icreon Communications Hardware Inventory Web Portal::</title>
<body background="blue.jpg">
<Center><br><img src="icreon.gif" style="opacity: 0.7;"><br></Center>
<Center style="color: white; font-size: 11.5px">Integrated Solutions Since 1990</Center><br>
<h1><center style="color: white;"> Welcome to Icreon Communications</h1>
<script type='text/javascript'>

</script>
<div id='wrong'></div>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<form name="form1" method="post" action="checklogin.php" onsubmit="return validations(this);">
<td>

<?php

    $a = $_GET["check"];
if(empty($a)){

}else{
echo "<script type='text/javascript'> alert(' $a '); </script>";
}
?>
<table width="100%" style="background-color: transparent; border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" ">
<tr>
<td colspan="3" style="color: white;"><strong>IT-Administrator Login </strong></td>
</tr>
<tr width="78" style="color: white;">
<td>Username</td>
<td>:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr width="78" style="color: white;">
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login" style="background-color: transparent; color: white"><input type="reset" value="Reset" style="background-color: transparent; color: white"/></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</body>
</html>
