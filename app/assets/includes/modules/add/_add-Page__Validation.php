<?php
  include './assets/includes/base/_variables.php';

  if( isset($_POST['submit']) ){
    // Error Reporting
    
    // all variables
    include './assets/includes/modules/add/_add-page__form-variables.php';

    // Error Reporting
    include './assets/includes/modules/add/_add-page__error-reporting.php';

    // Query Executing
    include './assets/includes/modules/add/_add-page__process-data.php';
  }
?>