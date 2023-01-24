<?php
require $_SERVER['DOCUMENT_ROOT'].'/../pdo_config.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

class data
{
    private $_dbh;

    function __construct()
    {
        try{
            //instantiate a pdo database object
            $this->_dbh = new PDO(DB_DSN,DB_USERNAME,DB_PASSWORD);


        }
        catch (PDOException $e){
            echo "error connecting to db " . $e->getMessage();
        }
    }

    /**
     * this function saves the plan object to the data base
     * and returns the id
     *
     * @param $plan object
     * @return string
     */
    function savePlan($plan)
    {
        //define query
        $sql = "INSERT INTO plan(token,  fall_notes, winter_notes, spring_notes, summer_notes,last_update)
                        VALUES (:token,:fall_notes,:winter_notes,:spring_notes,:summer_notes,:last_update)";

        //prepare statment
        $statement = $this->_dbh->prepare($sql);
        $token =$plan->getToken();

        $fallnote =$plan->getFallNotes();
        $winternote = $plan->getWinterNotes();
        $springnote = $plan->getSpringNotes();
        $summernote = $plan->getSummerNotes();
        $lastUpdate = $plan->getDate();

        //bind params
        $statement->bindParam(':token',$token);
        $statement->bindParam(':fall_notes',$fallnote);
        $statement->bindParam(':winter_notes',$winternote);
        $statement->bindParam(':spring_notes',$springnote);
        $statement->bindParam(':summer_notes',$summernote);
        $statement->bindParam(':last_update',$lastUpdate);
        //exicute querey
        $statement->execute();

        //prosess results
        $id = $this->_dbh->lastInsertId();

        return $id;
    }

    /**
     * this function updates data base record it updates the table row given a token related to it
     * @param $planned
     * @return string
     */
    function updatePlan($planned){

        $sql = "  UPDATE plan SET fall_notes=:fall_notes, winter_notes =:winter_notes,spring_notes= :spring_notes,summer_notes= :summer_notes,last_update=:last_update WHERE  token = :token ";

        $statement = $this->_dbh->prepare($sql);
        $token =$planned->getToken();
        $fallNotes = $planned->getfallNotes();
        $winterNotes = $planned->getWinterNotes();
        $springNotes = $planned->getSpringNotes();
        $summerNotes = $planned->getSummerNotes();
        $lastUpdate = $planned->getDate();

        $statement->bindParam(':token',$token);
        $statement->bindParam(':fall_notes',$fallNotes);
        $statement->bindParam(':winter_notes',$winterNotes);
        $statement->bindParam(':spring_notes',$springNotes);
        $statement->bindParam(':summer_notes',$summerNotes);
        $statement->bindParam(':last_update',$lastUpdate);
        $statement->execute();

        //prosess results
        $id = $this->_dbh->lastInsertId();

        return $id;
    }

    /**
     * this function takes a token and check the datbase if it allready exist the return will be
     * a array empty if not found or full of tokens it did find
     * @param $token   6 char string
     * @return array|false
     */
    function checkToken($token)
    {
        //define querey
        $sql = "SELECT token FROM plan WHERE token =:token ";
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

    /**
     * this function gets info related to a token
     * from the data base the return is a assoc array of the tokens row
     * @param $token 6 char string
     * @return array|false
     */
    function getPlan($token)
    {
        //define query
        $sql = "SELECT * FROM plan WHERE token = :token";
        //prepar statment
        $statement = $this->_dbh->prepare($sql);
        //bind prams
        $statement->bindParam(':token',$token);
        //execute querey
        $statement->execute();
        //prosess result
        $result =$statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

}