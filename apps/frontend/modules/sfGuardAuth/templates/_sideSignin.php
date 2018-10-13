<?php use_helper('Validation', 'I18N') ?>

<div id="sf_guard_auth_form">
<?php echo form_tag('@sf_guard_signin') ?>

  <fieldset>

    <div class="form-row" id="sf_guard_auth_username">
      <?php
      echo form_error('username'), 
      label_for('username', __('Identifiant:')),
      input_tag('username', $sf_data->get('sf_params')->get('username'));
      ?>
    </div>

    <div class="form-row" id="sf_guard_auth_password">
      <?php
      echo form_error('password'), 
        label_for('password', __('Mot de passe:')),
        input_password_tag('password');
      ?>
    </div>
    <div class="form-row" id="sf_guard_auth_remember">
      <?php
      echo label_for('remember', __('Se souvenir de moi?')),
      checkbox_tag('remember');
      ?>
    </div>
  </fieldset>

  <?php 
//  echo submit_tag(__('Ok')), 
//  link_to(__('Mot de passse oublié ?'), '@sf_guard_password', array('id' => 'sf_guard_auth_forgot_password')) 
  echo submit_tag(__('Ok'));
  ?>
</form>
</div>
