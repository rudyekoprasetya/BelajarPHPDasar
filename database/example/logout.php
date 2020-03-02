<?php
session_start();
$_SESSION['username']=NULL;
session_unset('username');
session_destroy();

?>
<script type="text/javascript">
  document.location.href='login.php';
</script>