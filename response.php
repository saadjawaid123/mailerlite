<?php

header('Content-Encoding: UTF-8');
header('Content-type: text/csv; charset=UTF-8');

$data = array();

if ($_POST['data'] == 'editsubscriber') {
    $data['status'] = false;
    $data['msg'] = 'Something went wrong, please try again later';

//$data['status'] = true;
//$data['msg'] = 'Subscriber updated successfully';
}

if ($_POST['data'] == 'confirmDeleteBtn') {
    $data['status'] = false;
    $data['msg'] = 'Something went wrong, please try again later';

//    $data['status'] = true;
//    $data['msg'] = 'Subscriber deleted successfully';
}

if ($_POST['data'] == 'addSubscriber') {
//    $data['status'] = false;
//    $data['msg'] = 'Something went wrong, please try again later';

    $data['status'] = true;
    $data['msg'] = 'Subscriber deleted successfully';
}

$json = json_encode($data);
echo $json;
