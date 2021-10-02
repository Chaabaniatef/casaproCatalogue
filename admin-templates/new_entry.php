<?php
if(isset($_REQUEST['entryid']) && $_REQUEST['entryid']!='') {
  global $wpdb;
  $data = $wpdb->get_row( "SELECT * FROM `wp_reseller` WHERE id = '".$_REQUEST['entryid']."'" );
?>
  <div class="wrap wqmain_body">
    <h3 class="wqpage_heading">Modification</h3>
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
  <h3 class="wqpage_heading">Nouveau</h3>
  <div class="wqform_body">
    <form name="entry_form" id="entry_form">

      <div class="wqlabel">Raison Social</div>
      <div class="wqfield">
        <input type="text" class="wqtextfield" name="resellerRS"  placeholder="Raison Social" value="" required/>
      </div>
      <div>&nbsp;</div>
      <div class="wqlabel">Prénom responsable</div>
      <div class="wqfield">
        <input type="text" class="wqtextfield" name="name"  placeholder="Prénom responsable" value=""  />
      </div>
      <div>&nbsp;</div>
      <div class="wqlabel">Nom responsable</div>
      <div class="wqfield">
        <input type="text" class="wqtextfield" name="surname"  placeholder="Nom responsable" value="" />
      </div>
      <div>&nbsp;</div>
      <div class="wqlabel">E-mail</div>
      <div class="wqfield">
        <input type="mail" class="wqtextfield" name="mail"  placeholder="E-mail" value="" required />
      </div>
      <div>&nbsp;</div>
      <div class="wqlabel">Téléphone</div>
      <div class="wqfield">
        <input type="phone" class="wqtextfield" name="tel"  placeholder="Téléphone" value="" />
      </div>
      <div>&nbsp;</div>
      <div class="wqlabel">Mot de Passe</div>
      <div class="wqfield">
        <input type="password" class="wqtextfield" name="passCatalogue"  placeholder="Mot de Passe" value="" required/>
      </div>

      <div>&nbsp;</div>
      
     

      <div><input type="submit" class="wqsubmit_button" id="" value="Ajouter" /></div>
      <div>&nbsp;</div>

    </form>
  </div>
</div>
<?php } ?>
