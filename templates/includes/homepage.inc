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
    $node_wrapper = entity_metadata_wrapper('node', $node);

    //    print banner image and text
    $bannerImage = $node_wrapper->field_banner->value();
    $imageUrl = file_create_url($bannerImage['uri']);
    $bannerText = $node_wrapper->field_text_banner->value();

    //    print about section text with format
    $aboutTextField = $node_wrapper->field_about_text->value();
    $aboutText = check_markup($aboutTextField['value'], $aboutTextField['format']);
    $aboutImage = $node_wrapper->field_hp_image->value();
    $aboutUrl = file_create_url($aboutImage['uri']);

    //    video section
    $video = render(field_view_field('node', $node, 'field_videos'));
    $videoTextField = $node_wrapper->field_video_intro->value();
    $videoText = check_markup($videoTextField['value'], $videoTextField['format']);
}

?>