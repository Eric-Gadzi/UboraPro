<?php
require_once("../controllers/awards_controller.php");
require_once("../controllers/users_controller.php");
session_start();

function display_search($award_name){
  $search_result = searchAward($award_name);
  if($search_result){
    foreach($search_result as $award){
      $award_id = $award['award_id'];
      $award_image = $award['award_image'];
      $award_name = $award['award_name'];
      $counter = 0;
      if($counter%2==0){
          awards_form_left_image($award_id, $award_image, $award_name);
      }else{
          awards_form_right_image($award_id, $award_image, $award_name);
      }

   
  }
  }else{
    echo "<script>alert('could not find award')</script>";
    display_all_awards();
  }

}

function display_all_awards()
{
    $all_awards = getAllAwards_ctr();
    // $counter = 0;
    foreach($all_awards as $award){
        $award_id = $award['award_id'];
        $award_image = $award['award_image'];
        $award_name = $award['award_name'];
        $counter = 0;
        if($counter%2==0){
            awards_form_left_image($award_id, $award_image, $award_name);
        }else{
            awards_form_right_image($award_id, $award_image, $award_name);
        }
        $counter++;
     
    }
}

function awards_form_right_image($award_id, $award_image, $award_name)
{
    echo "<img class='u-expanded-width-xs u-image u-image-circle u-preserve-proportions u-image-2' src=".$award_image." alt='' data-image-width='906' data-image-height='1280'>
        <div class='u-form u-form-1'>
          <form action='../actions/user_action/vote_process.php' class='u-clearfix u-form-spacing-10 u-form-vertical u-inner-form' source='email' name='form' style='padding: 10px;'>
            <div class='u-form-group u-form-input-layout-horizontal u-form-radiobutton u-label-top u-form-group-3'>
              <label class='u-label u-spacing-0 u-label-6'>$award_name</label>
            ";

        $award_details = getNomineesForAwards_ctr($award_id);
        foreach ($award_details as $award_info) {
            $nominee_name = $award_info['nominee_name'];
            $nominee_id = $award_info['nominee_id'];
        echo " <div class='u-input-row'>
                  <input type='radio' name='radiobutton' value='$nominee_id' required='required'>
                  <label class='u-label' for='radiobutton'>$nominee_name</label>
                </div>
                ";
    }
    echo "
    </div></div>
    <input name = 'award_id' type='hidden' value = '$award_id'>
    <div class='u-align-left u-form-group u-form-submit u-label-top'>
              <input type='submit' value='submit' class='u-form-control' disabled>
            </div>
            
          </form>
        </div>";
}

function awards_form_left_image($award_id, $award_image, $award_name)
{

    echo "<img class='u-expanded-width-xs u-image u-image-circle u-preserve-proportions u-image-3' src='$award_image' alt='' data-image-width='1766' data-image-height='1402'>
        <div class='u-form u-form-2'>
          <form action='../actions/user_action/vote_process.php' class='u-clearfix u-form-spacing-10 u-form-vertical u-inner-form' source='email' name='form' style='padding: 10px;'>
            <div class='u-form-group u-form-input-layout-horizontal u-form-radiobutton u-label-top u-form-group-1'>
              <label class='u-label u-spacing-0 u-label-1'>$award_name</label>
              <div class='u-form-radio-button-wrapper'>";
    $award_details = getNomineesForAwards_ctr($award_id);
    
    foreach ($award_details as $award_info) {
        $nominee_name = $award_info['nominee_name'];
        $nominee_id = $award_info['nominee_id'];

        echo "<div class='u-input-row'>
                  <input type='radio' name='radiobutton' value='$nominee_id' required='required'>
                  <label class='u-label' for='radiobutton'>$nominee_name</label>
                </div>
                ";
    }

    echo "
    </div> </div>
    <input name = 'award_id' type='hidden' value = '$award_id'>
    <div class='u-align-left u-form-group u-form-submit u-label-top'>
    ";
     
      $user_id = $_SESSION['user_id'];

      $hasVoted = userHasVoted_ctr($user_id, $award_id);
      if($hasVoted){
      echo "<input type='submit' value='Voted!' class='u-form-control' disabled>";
      }else{
        echo "<input type='submit' value='submit' class='u-form-control'>";
      }

    echo"      
            </div>
           
          </form>
        </div>";
}
