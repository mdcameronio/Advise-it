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
//            echo "woohoo config hiden new file";

        }
        catch (PDOException $e){
            echo "error connecting to db " . $e->getMessage();
        }
    }

    function savePlan($plan)
    {
        //define query
        $sql = "INSERT INTO plan(token, fall1, fall2, fall3, fall4, winter1, winter2, winter3, winter4, spring1, spring2, spring3, spring4, summer1, summer2, summer3, summer4, fall_notes, winter_notes, spring_notes, summer_notes)
                        VALUES (:token,:fall1,:fall2,:fall3,:fall4,:winter1,:winter2,:winter3,:winter4,:spring1,:spring2,:spring3,:spring4,:summer1,:summer2,:summer3,:summer4,:fall_notes,:winter_notes,:spring_notes,:summer_notes)";





//        $sql = "INSERT INTO planner( token, fall, winter, spring, summer, fall_notes, winter_notes, spring_notes, summer_notes)
//                             VALUES (:token,:fall,:winter,:spring,:summer,:fall_notes ,:winter_notes ,:spring_notes,:summer_notes)";
        //prepare statment
        $statement = $this->_dbh->prepare($sql);
        $token =$plan->getToken();
        $fall1 = $plan->getFall1();
        $fall2 = $plan->getFall2();
        $fall3 = $plan->getFall3();
        $fall4 = $plan->getFall4();
        $winter1=$plan->getWinter1();
        $winter2=$plan->getWinter2();
        $winter3=$plan->getWinter3();
        $winter4=$plan->getWinter4();
        $spring1 = $plan->getSpring1();
        $spring2 = $plan->getSpring2();
        $spring3 = $plan->getSpring3();
        $spring4 = $plan->getSpring4();
        $summer1 = $plan->getSummer1();
        $summer2 = $plan->getSummer2();
        $summer3 = $plan->getSummer3();
        $summer4 = $plan->getSummer4();
        $fallnote =$plan->getFallNotes();
        $winternote = $plan->getWinterNotes();
        $springnote = $plan->getSpringNotes();
        $summernote = $plan->getSummerNotes();

        //bind params
        $statement->bindParam(':token',$token);
        $statement->bindParam(':fall1',$fall1);
        $statement->bindParam(':fall2',$fall2);
        $statement->bindParam(':fall3',$fall3);
        $statement->bindParam(':fall4',$fall4);
        $statement->bindParam(':winter1',$winter1);
        $statement->bindParam(':winter2',$winter2);
        $statement->bindParam(':winter3',$winter3);
        $statement->bindParam(':winter4',$winter4);
        $statement->bindParam(':spring1',$spring1);
        $statement->bindParam(':spring2',$spring2);
        $statement->bindParam(':spring3',$spring3);
        $statement->bindParam(':spring4',$spring4);
        $statement->bindParam(':summer1',$summer1);
        $statement->bindParam(':summer2',$summer2);
        $statement->bindParam(':summer3',$summer3);
        $statement->bindParam(':summer4',$summer4);
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

}