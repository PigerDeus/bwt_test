<?php
  include_once ROOT. '/models/Feedback.php';
  class ListfeedbackController {

    public function actionIndex() {

      require_once(ROOT.'/views/listfeedback.php');

      return true;
    }
  }
 ?>
