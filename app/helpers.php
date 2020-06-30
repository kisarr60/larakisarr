<?php

if(! function_exists('page_title'))
{
	function page_title($title)
	{
		$base_title = 'Larakisarr - List of Artisans';

		if($title == '')
		{
			return $base_title;
		} else {
			return $title . ' | ' . $base_title;
		}
		
	}
}