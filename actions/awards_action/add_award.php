<?php 
    require_once dirname(__FILE__)."/../../controllers/awards_controller.php";

    $award_name = $_POST['award_name'];
    $award_description = $_POST['award_description'];
    // $award_image = $_POST['award_image'];

    $root_dir = ".\\..\\..\\images\\awards\\";
    $upload_root_dir = "../images/awards/";
    $file = $_FILES["award_image"];
    $file_dest = $root_dir ."/" .basename($file["name"]);
    $upload_file_dest = $upload_root_dir . basename($file["name"]);
    $file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));


    $checkAwardName=checkAward_ctr($award_name);
    if($checkAwardName == 0){
        $move = move_uploaded_file($file["tmp_name"], $file_dest);
        if ($move) {
            $result = createAward_ctr($award_name, $award_description, $upload_file_dest);
            if($result){
                echo "success";
                header("location:./../../admin/admin.php");
            }else{
                echo "failed";
            }
        }

    }
    else{
        echo "<script>
        alert('Award Category Already Exit')
        </script>";
    }

   
    ?>

   
