<?
php
$org=$_POST['org'];
$org=$_POST['des'];

if(isset($_POST['org']) && isset ($_POST['des']))
{

}
?>
<iframe
width="750"
height ="550"
frameborder="0" style="border
src="https://maps.googleapis.com/maps/embed/v1/directions?key=AIzaSyAwH5F7MxOgNRXDcesHJDebSmmdJb_iwBk&origin=<?php echo $org;?>$destination=<?php echo $des;?>" allowfullscreen>

</iframe>
