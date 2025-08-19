<?php

	function get_scoutnet_api_url()	{
		$scoutnet_api_url = "www.scoutnet.se";
		return $scoutnet_api_url;
	}

	/*
	Function to get the value of the kår-id from the option page
	*/
	function scoutnet_get_option_kar_id()	{
		return 868;	
	}
	/*
	Function to get the value of the api-nyckel Kår deltajerad from the option page
	*/
	function scoutnet_get_option_api_nyckel_kar_full()	{
		return 'a806055ce87fb077687947dda17d4deeb53431c1';
	}
		
	/*
	 * Check if options to be able to use functions based on the detailed memberlist
	 */
	function scoutnet_get_member_list($args = "") {
		// detaljerad medlemslista /api/group/memberlist

		$karid = scoutnet_get_option_kar_id();
		$apinyckel = scoutnet_get_option_api_nyckel_kar_full();
		$apiurl = get_scoutnet_api_url();

		$result = @file_get_contents("https://$karid:$apinyckel@$apiurl/api/group/memberlist$args");

		if($result !== FALSE)	{
			return json_decode($result, true);
		}
	}




?>
