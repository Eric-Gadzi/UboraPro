<?php 
    require_once dirname(__FILE__)."/../classes/award_class.php";


    function createAward_ctr($award_name, $award_description, $award_image){
        $award = new Awards();

        return $award->createAward($award_name, $award_description, $award_image);
    }

    function getAnAward_ctr($award_id){
        $award = new Awards();

        return $award->getAnAward($award_id);
    }
    function getAllAwards_ctr(){
        $award =new Awards();
        return $award->getAllAwards();
    }

    function searchAward($award_name){
        $award =new Awards();
        return $award->searchAward($award_name);
    }

    function getAllAwardsAndNominees_ctr(){
        $award = new Awards();

        return $award->getAllAwardsAndNominees();
    }

    function getAllAwardsAndNomineesA_ctr(){
        $award = new Awards();

        return $award->getAllAwardsAndNomineesA();
    }

    function getNomineesForAwards_ctr($award_id){
        $award = new Awards();

        return $award->getNomineesForAnAward($award_id);
    }

    function deleteAward_ctr($award_id){
        $award = new Awards();

        return $award->deleteAward($award_id);
    }

    function updateAward_ctr($award_id, $award_name, $award_description, $award_image){
        $award = new Awards();

        return $award->updateAward($award_id, $award_name, $award_description, $award_image);
    }

    function addNominee_ctr($award_id, $nominee_name, $nominee_description, $nominee_image){
        $award = new Awards();

        return $award->addNominee($award_id, $nominee_name, $nominee_description, $nominee_image);

    }

    function countNomimeeVocountNomimeeVotesUnderAnAward_ctr($award_id,$nominee_id){
        $award = new Awards();

        return $award->countNomimeeVotesUnderAnAward($award_id,$nominee_id);
    }

    function  updateANominee_ctr($award_id,$nominee_id, $nominee_name, $nominee_description, $nominee_image){
        $award = new Awards();

        return $award->updateANominee($award_id,$nominee_id, $nominee_name, $nominee_description, $nominee_image);
    }

    function deleteANominee_ctr($nominee_id){
        $award = new Awards();

        return $award->deleteANominee($nominee_id);
    }

    function deleteANomineeForAnAward_ctr($award_id, $nominee_id){
        $award = new Awards();

        return $award->deleteANomineeForAnAward_ctr($award_id, $nominee_id);
    }

    function checkAward_ctr($award_name){
        $award = new Awards();
        return $award->checkAward($award_name);
    }