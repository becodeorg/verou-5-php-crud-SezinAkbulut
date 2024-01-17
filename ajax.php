

<?php
//print_r($_FILES);
//die;

$action = $_REQUEST['action'];

if (!empty($action)) {
    require_once 'classes/user.php';
    $obj = new User();
}

// Adding user action
if ($action == 'adduser' && !empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Check if 'photo' key exists in $_FILES and it's not empty
    $photo = (!empty($_FILES['photo'])) ? $_FILES['photo'] : null;

    $playerId = (!empty($_POST['userId'])) ? $_POST['userId'] : "";
//file(photo) upload
    $imagename = "";
    if (!empty($photo['name'])) {
        $imagename = $obj->uploadPhoto($photo);


    $playerData = [
        'name' => $name,
        'email' => $email,
        'mobile' => $mobile,
        'photo' => $imagename,
    ];
    }else{
        $playerData =[
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
        ];
    }
        $playerId = $obj->add($playerData);
        if (!empty($playerId)) {
            $player = $obj->getRow('id', $playerId);
            echo json_encode($player);
            exit();
        }
}
