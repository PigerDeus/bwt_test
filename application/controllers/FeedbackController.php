<?php
  include_once ROOT. '/models/Feedback.php';
  class FeedbackController {

    public function actionIndex() {

      require_once(ROOT.'/views/feedback.php');

      return true;
    }
  }
 ?>
