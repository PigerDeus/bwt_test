<?php
  include_once ROOT. '/models/Registration.php';
  class RegistrationController {

    public function actionIndex() {

      require_once(ROOT.'/views/registration.php');

      return true;
    }
  }
 ?>
