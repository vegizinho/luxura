<?php

class core
{
	function getPage($page)
	{
		$filename = "$page".".php";
		$path = 'include'.'/'.$filename;
// 		echo $filename;
// 		exit;
		
		if(file_exists($path))
		{
			require_once($path);
		}
		
	}
}