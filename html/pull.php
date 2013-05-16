<?

if (!empty($_POST['payload'])):

	$output = exec('git pull');
	mail("bryan@resen.co", "CalvinBecerra.com Push", $output, "From: CalvinBecerra.com <server@calvinbecerra.com>");

endif;

?>