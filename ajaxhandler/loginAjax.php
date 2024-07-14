<?php
$path=$_SERVER['DOCUMENT_ROOT'];
require_once $path."/attendanceapp/database/database.php";
require_once $path."/attendanceapp/database/facultyDetails.php";
//THIS CODE HELP RETRIVE THE UN AND PW AND TO RETURN IF THE USER IS AUTNENTICATED OF NOT
$action=$_REQUEST["action"];  //RETRIVES ACTION PARAMETER FROM THE REQUEST
if(!empty($action))           //ENSURES ACTION PARAMETER IS NOT EMPTY
{
    if($action=="verifyUser")
    {      
        //RETRIVES USERNAME PASSWORD FROM POST REQ
          $un=$_POST["user_name"];
          $pw=$_POST["password"];
          //check if exists in database
          $dbo=new Database();
          $fdo=new faculty_details();
          $rv=$fdo->verifyUser($dbo,$un,$pw);
          if($rv['status']=="ALL OK")
          {
            session_start();
            $_SESSION['current_user']=$rv['id'];
          }
          for($i=0;$i<100000;$i++)
          {
            for($j=0;$j<2000;$j++)
            {
              
            }
          }
          //SEND RESPONSE 
          echo json_encode($rv);
    }
}
?>