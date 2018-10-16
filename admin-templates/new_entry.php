<?php
if(isset($_REQUEST['entryid']) && $_REQUEST['entryid']!='') {
  global $wpdb;
  $data = $wpdb->get_row( "SELECT * FROM `wp_crud` WHERE id = '".$_REQUEST['entryid']."'" );
?>
  <div class="wrap wqmain_body">
    <h3 class="wqpage_heading">Edit Entry</h3>
    <div class="wqform_body">
      <form name="update_form" id="update_form">
        <input type="hidden" name="wqentryid" id="wqentryid" value="<?=$_REQUEST['entryid']?>" />
        <div class="wqlabel">Title</div>
        <div class="wqfield">
          <input type="text" class="wqtextfield" name="wqtitle" id="wqtitle" placeholder="Enter Your Title" value="<?=$data->title?>" />
        </div>
        <div id="wqtitle_message" class="wqmessage"></div>

        <div>&nbsp;</div>

        <div class="wqlabel">Description</div>
        <div class="wqfield">
          <textarea name="wqdescription" class="wqtextfield" id="wqdescription" placeholder="Enter Your Description"><?=$data->description?></textarea>
        </div>
        <div id="wqdescription_message" class="wqmessage"></div>

        <div>&nbsp;</div>

        <div><input type="submit" class="wqsubmit_button" id="wqedit" value="Edit" /></div>
        <div>&nbsp;</div>
        <div class="wqsubmit_message"></div>

      </form>
    </div>
  </div>
<?php
} else {
?>
<div class="wrap wqmain_body">
  <h3 class="wqpage_heading">New Entry</h3>
  <div class="wqform_body">
    <form name="entry_form" id="entry_form">

      <div class="wqlabel">Title</div>
      <div class="wqfield">
        <input type="text" class="wqtextfield" name="wqtitle" id="wqtitle" placeholder="Enter Your Title" value="" />
      </div>
      <div id="wqtitle_message" class="wqmessage"></div>

      <div>&nbsp;</div>

      <div class="wqlabel">Description</div>
      <div class="wqfield">
        <textarea name="wqdescription" class="wqtextfield" id="wqdescription" placeholder="Enter Your Description"></textarea>
      </div>
      <div id="wqdescription_message" class="wqmessage"></div>

      <div>&nbsp;</div>

      <div><input type="submit" class="wqsubmit_button" id="wqadd" value="Add" /></div>
      <div>&nbsp;</div>
      <div class="wqsubmit_message"></div>

    </form>
  </div>
</div>
<?php } ?>
