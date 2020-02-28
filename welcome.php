<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css"> 
    
*{
    background-color:white;
}


}
</style>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        
    </style>
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        <a id ="home" href="index.php.php">Home</a>
       
    <form>
    <table>
        
        <h1> PREVENTIVE MAINTENANCE INSPECTION BASED ON MBM-2<h1>
        	
        	
        
    </fieldset>
    </table>
</form>
    </table>
<fieldset>
    <legend></legend>
        <form onsubmit="return false">
            <table>
        <legend>
        <tr>
            <td>
                <label for="uname">CUSTOMER</label>
            </td>
            <td>
                <input type="text" id="username" name="username" size="30" maxlength="100">
            </td>
        </tr>
        <tr>
            <td>
                <label for="uemail">ADDRESS</label>
            </td>
            <td>
                <input type="text" name="usemail"  size="30" maxlength="100">
            </td>
            
        
        <tr>
            <td>
                <label for="age">CITY/TOWN</label>
            </td>
            <td>
                <input type="text" name="userage" id="age" size="30" maxlength="100">
            </td>
        </tr>
    </legend>
    <legend>
</tr>
        <tr>
            <td>
                <label>EQUIPMENT NO</label>
            </td>
            <td>
                 <input type="text" name="userage" id="age" size="30" maxlength="8">
            </td>
        </tr>
        <tr>
            <td>
                    <label for="pass">Password</label>
            </td>
            <td>
                    <input type="password" id="pass" size="30" minlength="4">
            </td>
        </tr>
        <tr>
            <td>
                <label>Hobbies</label>
            </td>
            <td>
                <label>
                    <input type="checkbox" checked> Cricket
                </label>
                <label>
                    <input type="checkbox"> Football
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>job description</label>
            </td>
            <td>
                <textarea rows="4" cols="40"></textarea>
            </td>

        <tr>
            <td>
                <input type="submit" value="Submit">
                <input type="reset">
            </td>
        </tr>
</fieldset>
       

   
</body>



</html>