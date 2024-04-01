<?php

require('../../model/usermodel.php');

deleteemployee($_POST['id']);

header('Location:../../view/admin/admin.php');

?>