<?php 
require_once("../settings/db_class.php");

class Awards extends db_connection{

    function createAward($award_name, $award_description, $award_image){
        $sql = "INSERT INTO `award`(`award_name`, `award_description`, `award_image`) VALUES ('$award_name',' $award_description','$award_image'";

        return $this->db_query($sql);
    }

    function getAnAward($award_id){
        $sql = "SELECT * FROM `award` WHERE `award_id`= '$award_id'";

        return $this->fetchOne($sql);
    }

    // this function would be used for display all awards and nominee
    function getAllAwardsAndNominees(){
        $sql = "SELECT * FROM `award`";

        return $this->fetchAllData($sql);
    }
    
    // this would list the nominees under a particular award. This is suitable for a single view
    function getNomineesForAnAward($award_id){
        $sql = "SELECT * FROM `nominee` WHERE award_id='$award_id'";

        return $this->fetchOne($sql);
    }
    

    function deleteAward($award_id){
        $sql = "DELETE FROM `award` WHERE `award_id`='$award_id' ";

        return $this->db_query($sql);
    }

    function updateAward($award_id, $award_name, $award_description, $award_image){
        $sql = "UPDATE `award` SET `award_name`='$award_name',`award_description`='$award_description',`award_image`='$award_image' WHERE `award_id`='$award_id'";

        return $this->db_query($sql);
    }

    function addNominee($award_id, $nominee_name, $nominee_description, $nominee_image){
        $sql = "INSERT INTO `nominee`(`award_id`, `nominee_name`, `nominee_description`, `nominee_image`) VALUES ('$award_id','$nominee_name','$nominee_description','$nominee_image')";

        return $this->db_query($sql);
    }

    function countNomimeeVotesUnderAnAward($award_id,$nominee_id){
        $sql = "SELECT  `user_id` FROM `vote` WHERE `nominee_id` = '$nominee_id' and  `award_id` = '$award_id' ";

        $result = $this->fetchAllData($sql);
        
        return $this->countData();
    }

    function deleteANominee($nominee_id){
        $sql = "DELETE FROM `nominee` WHERE `nominee_id` = '$nominee_id' ";

        return $this->db_query($sql);
        
    }

    function updateANominee($award_id,$nominee_id, $nominee_name, $nominee_description, $nominee_image){
        $sql = "UPDATE `nominee` SET `nominee_name`='$nominee_name',`award_id`='$award_id',`nominee_description`='$nominee_description',`nominee_image`='$nominee_image' WHERE `nominee_id`='$nominee_id'";

        return $this->db_query($sql);
    }

}


?>