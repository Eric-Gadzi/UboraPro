<?php 
require_once dirname(__FILE__)."/../settings/db_class.php";

class Awards extends db_connection{

    function createAward($award_name, $award_description, $award_image){
        $sql = "INSERT INTO `award`(`award_name`, `award_description`, `award_image`) VALUES ('$award_name','$award_description','$award_image')";

        return $this->db_query($sql);
    }

    //get only award without nominees
    function getAnAward($award_id){
        $sql = "SELECT * FROM `award` WHERE `award_id`= '$award_id'";

        return $this->fetchOne($sql);
    }

    function getAllAwards(){
        $sql = "SELECT * FROM `award`";

        return $this->fetchAllData($sql);
    }

    function searchAward($award_name){
        $sql = "SELECT * FROM `award` where award_name LIKE '%$award_name%'";

        return $this->fetchAllData($sql);
    }

    // this function would be used for display all awards and nominee
    function getAllAwardsAndNomineesA(){
        $sql = "SELECT award.award_id as award_id ,award.award_name as award_name,award.award_description as award_description,award.award_image as award_image,nominee.nominee_id as nominee_id,nominee.nominee_name as nominee_name,nominee.nominee_description as nominee_description,nominee.nominee_image as nominee_image FROM `award` ,nominee WHERE award.award_id=nominee.award_id";

        return $this->fetchAllData($sql);
    }

    // this function would be used for display all awards and nominee
    function getAllAwardsAndNominees(){
        $sql = "SELECT award.award_id,award.award_name,award.award_description,award.award_image,nominee.nominee_id,nominee.nominee_name,nominee.nominee_description,nominee.nominee_image FROM `award` ,nominee WHERE award.award_id=nominee.award_id";

        return $this->fetchAllData($sql);
    }
    
    // this would list the nominees under a particular award. This is suitable for a single view
    function  getNomineesForAnAward($award_id){
        $sql = "SELECT * FROM `nominee` WHERE award_id='$award_id'";

        return $this->fetchAllData($sql);
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

    function deleteANomineeForAnAward_ctr($award_id, $nominee_id){
        
    }

    function updateANominee($award_id,$nominee_id, $nominee_name, $nominee_description, $nominee_image){
        $sql = "UPDATE `nominee` SET `nominee_name`='$nominee_name',`award_id`='$award_id',`nominee_description`='$nominee_description',`nominee_image`='$nominee_image' WHERE `nominee_id`='$nominee_id' ";

        return $this->db_query($sql);
    }

    // Check if an Award Exist
    function checkAward($award_name){
        $sql="SELECT * FROM `award` WHERE award_name='$award_name' ";

        
        $result = $this->fetchOne($sql);
        
        return $this->countData();
    }

    

}


?>