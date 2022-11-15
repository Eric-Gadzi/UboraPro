<?php 
    require_once("../classes/award_class.php");


    function createAward_ctr($award_name, $award_description, $award_image){
        $award = new Awards;

        return $award->createAward($award_name, $award_description, $award_image);
    }

    function getAnAward_ctr($award_id){
        $award = new Awards;

        return $award->getAnAward($award_id);
    }

    function getAllAwardsAndNominees_ctr(){
        $award = new Awards;

        return $award->getAllAwardsAndNominees();
    }

    



    function getNomineesForAwards_ctr($award_id){
        $award = new Awards;

        return $award->getNomineesForAwards($award_id);
    }

    function deleteAward_ctr($award_id){
        $award = new Awards;

        return $award->deleteAward($award_id);
    }

    function updateAward_ctr($award_id, $award_name, $award_description, $award_image){
        $award = new Awards;

        return $award->updateAward($award_id, $award_name, $award_description, $award_image);
    }

    function addNominee_ctr($award_id, $nominee_name, $nominee_description, $nominee_image){
        $award = new Awards;

        return $award->addNominee($award_id, $nominee_name, $nominee_description, $nominee_image);

    }

    function countNomimeeVocountNomimeeVotesUnderAnAward_ctr($award_id,$nominee_id){
        $award = new Awards;

        return $award->countNomimeeVotesUnderAnAward($award_id,$nominee_id);
    }