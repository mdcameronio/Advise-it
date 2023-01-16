<?php
require $_SERVER['DOCUMENT_ROOT'].'/../pdo_config.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

class DataLayter
{
    private $_dbh;

    function __construct()
    {
        try{
            //instantiate a pdo database object
            $this->_dbh = new PDO(DB_DSN,DB_USERNAME,DB_PASSWORD);
//            echo "woohoo config hiden new file";

        }
        catch (PDOException $e){
            echo "error connecting to db " . $e->getMessage();
        }
    }

    function savePlan($plan)
    {
        //define query
        $sql = "INSERT INTO planner( token, fall, winter, spring, summer, fall_notes, winter_notes, spring_notes, summer_notes)
                             VALUES (:token,:fall,:winter,:spring,:summer,:fall_notes ,:winter_notes ,:spring_notes,:summer_notes)";
        //prepare statment
        $statement = $this->_dbh->prepare($sql);
        $token =$plan->getToken();
        $fall = $plan->getFall();
        $winter=$plan->getWinter();
        $spring = $plan->getSpring();
        $summer = $plan->getSummer();
        $fallnote =$plan->getFallNotes();
        $winternote = $plan->getWinterNotes();
        $springnote = $plan->getSpringNotes();
        $summernote =     $plan->getSummerNotes();

        //bind params
        $statement->bindParam(':token',$token);
        $statement->bindParam(':fall',$fall);
        $statement->bindParam(':winter',$winter);
        $statement->bindParam(':spring',$spring);
        $statement->bindParam(':summer',$summer);
        $statement->bindParam(':fall_notes',$fallnote);
        $statement->bindParam(':winter_notes',$winternote);
        $statement->bindParam(':spring_notes',$springnote);
        $statement->bindParam(':summer_notes',$summernote);
        //exicute querey
        $statement->execute();

        //prosess results
        $id = $this->_dbh->lastInsertId();

        return $id;
    }

    function checkToken($token)
    {
        //define querey
        $sql = "SELECT token FROM planner WHERE token =:token ";
        //prepare statment
        $statement = $this->_dbh->prepare($sql);
        //bind pramas
        $statement->bindParam(':token',$token);
        //execute qurey
        $statement->execute();
        //process result
        $result =$statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

}