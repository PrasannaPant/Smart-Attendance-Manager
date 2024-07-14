<?php
$path=$_SERVER['DOCUMENT_ROOT'];
require_once $path."/attendanceapp/database/database.php";
class SessionDetails
{
    public function getSessions($dbo)// dbo IS DATABASE CONNECTION OBJECT RECIVED AS AN ARGUMENT
        {
        $rv=[];
        $c="select * from session_details";   //THIS LINE DEFINES A QUERY TO SELECT ALL FROM SESSION TABLE
        $s=$dbo->conn->prepare($c);           //PREPARES A STATEMENT TO EXECUTE
        try{
            $s->execute();
            $rv=$s->fetchAll(PDO::FETCH_ASSOC); //FETCHES ALL THE RESULT IN THE FORM OF ASSOCIATIVE ARRAY


        }
        catch(Exception $e)
        {

        }
        return $rv;
        }
}
?>