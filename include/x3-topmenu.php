<?php 

$qs=$_GET["qs"];

if ($qs=="luxura-x3")
{
	echo "<div class='menu-item colorize active'><a href='?qs=luxura-x3'><span class='glyphicon glyphicon-collapse-up'></span><br><span>Intro</span></a></div>";
}
else 
{
	echo "<div class='menu-item'><a href='?qs=luxura-x3'><span class='glyphicon glyphicon-collapse-up'></span><br><span>Intro</span></a></div>";
}

if ($qs=="luxura-x3-highlights-features")
{
	echo "<div class='menu-item active'><a href='?qs=luxura-x3-highlights-features'><span class='glyphicon glyphicon-star'></span><br><span>Highlights & Features</span></a></div>";
}
else
{
	echo "<div class='menu-item'><a href='?qs=luxura-x3-highlights-features'><span class='glyphicon glyphicon-star'></span><br><span>Highlights & Features</span></a></div>";
}

if ($qs=="luxura-x3-specifications")
{
	echo "<div class='menu-item active'><a href='?qs=luxura-x3-specifications'><span class='glyphicon glyphicon-list'></span><br><span>Specifications</span></a></div>";
}
else
{
	echo "<div class='menu-item'><a href='?qs=luxura-x3-specifications'><span class='glyphicon glyphicon-list'></span><br><span>Specifications</span></a></div>";
}

if ($qs=="luxura-x3-photo-video")
{
	echo "<div class='menu-item active'><a href='?qs=luxura-x3-photo-video'><span class='glyphicon glyphicon-picture'></span><br><span>Photo & Video</span></a></div>";
}
else
{
	echo "<div class='menu-item'><a href='?qs=luxura-x3-photo-video'><span class='glyphicon glyphicon-picture'></span><br><span>Photo & Video</span></a></div>";
}

if ($qs=="luxura-x3-maintenance")
{
	echo "<div class='menu-item active'><a href='?qs=luxura-x3-maintenance'><span class='glyphicon glyphicon-wrench'></span><br><span>Maintenance</span></a></div>";	
}
else
{
	echo "<div class='menu-item'><a href='?qs=luxura-x3-maintenance'><span class='glyphicon glyphicon-wrench'></span><br><span>Maintenance</span></a></div>";
}

?>