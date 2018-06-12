<?php
/**
 * Created by PhpStorm.
 * User: qzhang
 * Date: 8/31/2017
 * Time: 9:07 AM
 */


//   homepage fields pre-process
//   is it a node?
//if ((arg(0) == 'node') && (arg(1)>0))
global $user;
global $base_url;
$uid = $user->uid;
$nid = "0";
$query = new EntityFieldQuery();
$imageEditLink = $photoURL = "";
//if user is admin, show web admin's photo
if (1 == $uid) {
    $photoURL = $base_url . "/sites/default/files/styles/small/public/directory/headshot.jpg";
}
//make sure the query does not run when user is not logged in(uid = 0)
else if (0 != $uid) {
    $result = $query
        ->entityCondition('entity_type', 'node')
        ->propertyCondition('status', 1)
        ->propertyCondition('type', 'person')
        ->propertyCondition('uid', $user->uid);
    $result = $query->execute();
    //get nid of nodes that created by current user->should be the node of related "person" content type
    if (!empty($result['node'])) {
        $nids = array_keys($result['node']);
        //get the first node
        $nid = $nids[0];
    }
    //get url for user to edit "person" node profile`
    $imageEditLink = $base_url."/node/".$nid."/edit";

    $node_wrapper = entity_metadata_wrapper('node', $nid);
    //get image of user profile photo
    if (!empty($node_wrapper->field_user_photo->value()['uri'])) {
        $uri = $node_wrapper->field_user_photo->value()['uri'];
        //Use image style with cropping
        $photoURL = image_style_url("user_image", $uri);

        //In case image style is deleted
//            if (!file_exists(image_style_path('user_image', $uri))) {
//                $photoURL = file_create_url($uri);
//            }
    }
    //for user who does not have profile image yet
    else {
        $photoURL = $base_url . "/sites/default/files/directory/avatar.png";
    }
}
//show default avatar for on login page when user is still anonymous
else {
    $photoURL = $base_url . "/sites/default/files/directory/avatar.png";
}




?>