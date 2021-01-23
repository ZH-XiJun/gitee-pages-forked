<?$action=$_GET['action'];
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("script.sh");
}
?>