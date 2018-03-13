<?php
/**
 * Created by PhpStorm.
 * User: qzhang
 * Date: 8/31/2017
 * Time: 9:07 AM
 */


//   homepage fields preprocess
//   is it a node?
if ((arg(0) == 'node') && (arg(1)>0)) {
    $node = node_load(arg(1));
    global $user;
    global $base_url;
    $name = $user->name;
    $node_wrapper = entity_metadata_wrapper('node', $node);
    $query = new EntityFieldQuery();
    $result = $query
        ->entityCondition('entity_type', 'node')
        ->propertyCondition('status', 1)
        ->propertyCondition('uid', $user->uid);
    $result = $query->execute();
    $nids = array_keys($result['node']);
    $nid = $nids[0];
    $imageEditLink = $base_url."/node/".$nid."/edit";
}

?>