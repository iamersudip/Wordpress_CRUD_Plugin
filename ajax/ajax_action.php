<?php
add_action('wp_ajax_wqnew_entry', 'wqnew_entry_callback_function');
add_action('wp_ajax_nopriv_wqnew_entry', 'wqnew_entry_callback_function');

function wqnew_entry_callback_function() {
  global $wpdb;
  $wpdb->insert("wp_crud", array(
    "title" => $_POST['wqtitle'],
    "description" => $_POST['wqdescription'],
    "created_at" => time(),
    "updated_at" => time()
  ));

  $response = array('message'=>'Data Has Inserted Successfully');
  echo json_encode($response);
  exit();
  wp_die();
}



add_action('wp_ajax_wqedit_entry', 'wqedit_entry_callback_function');
add_action('wp_ajax_nopriv_wqedit_entry', 'wqedit_entry_callback_function');

function wqedit_entry_callback_function() {
  global $wpdb;
  $wpdb->update( "wp_crud", array(
    "title" => $_POST['wqtitle'],
    "description" => $_POST['wqdescription'],
    "updated_at" => time()
  ), array('id' => $_POST['wqentryid']) );

  $response = array('message'=>'Data Has Updated Successfully');
  echo json_encode($response);
  exit();
  wp_die();
}
