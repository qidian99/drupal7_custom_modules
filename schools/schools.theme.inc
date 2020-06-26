<?php
/*
 * hook_menu to load tpl files from theme folder
 * i.e sites/all/themes/custom/{current_theme_name}/templates/books
 * current_theme_name = fiction 
 */
function schools_theme()
{
  // themes/bartik
  $path_to_theme = drupal_get_path('theme', variable_get('theme_default', 'schools'));
  $themes = array();
  $themes['schools_list'] = array(
    'template' => 'schools-list',
    'path' => $path_to_theme . '/templates/schools',
  );
  $themes['get_school'] = array(
    'template' => 'get-school',
    'path' => $path_to_theme . '/templates/schools',
  );
  $themes['edit_school'] = array(
    'template' => 'edit-school',
    'path' => $path_to_theme . '/templates/schools',
  );
  return $themes;
}