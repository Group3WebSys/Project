<?php 
$user_input="07/06/1983";
try{
	$dob=new DateTime($user_input);
}catch(Exception $e)
{
	echo $e->getMessage()."<br />";
	echo $e->getCode()."<br />";
	die();
}
$dob_formatted=explode("/", $dob->format("m/d/Y"));
foreach($dob_formatted as $e)
{
	$e=intval($e);
}
echo intval($dob_formatted[0])."<br />";

echo json_encode(array("error"=>"None", "success"=>1));

?>

<p id="output"></p>

<script>

</script>