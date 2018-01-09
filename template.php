<?php

//page--content-type-name.tpl.php
function startupgrowth_ciw_preprocess_page(&$vars, $hook) {


    // Get path arguments.
    $args = arg();
    // Do we have a node?
    if (isset($vars['node']) && !isset($args[2])) {

        // Ref suggestions cuz it's stupid long.
        $suggests = &$vars['theme_hook_suggestions'];


        // Remove first argument of "node".
        unset($args[0]);

        // Set type.
        $type = "page__type_{$vars['node']->type}";

        // Bring it all together.
        $suggests = array_merge(
            $suggests,
            array($type),
            theme_get_suggestions($args, $type)
        );


        drupal_add_css(
            path_to_theme('theme', 'startupgrowth_ciw') .'/CSS/types/'. $vars['node']->type .'.css',
            array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => True)
        );


    }


}

function startupgrowth_ciw_preprocess_search_result(&$variables) {

    $node = $variables['result']['node'];

    if (is_object($node) && $node->nid) { // if the result is a node we can load the teaser
        $variables['full'] = node_view($node, 'teaser');
    }
}

function startupgrowth_ciw_breadcrumb(&$vars){

    $breadcrumb = $vars['breadcrumb'];

    if (!empty($breadcrumb)) {
        $breadcrumb[] = drupal_get_title();
        return '<div>' . implode(' <span class="breadcrumb-separator"></span>', $breadcrumb) . '</div>';


    }

}



?>