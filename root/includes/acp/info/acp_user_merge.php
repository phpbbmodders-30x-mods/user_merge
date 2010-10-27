<?php
/**
*
*===================================================================
*
*  User Merge -- ACP Module Info File
*-------------------------------------------------------------------
*	Script info:
* Version:		1.0.0
* Copyright:	(c) 2009 - phpBBModders.net
* License:		http://opensource.org/licenses/gpl-license.php | GNU Public License v2
* Package:		ACP
*
*===================================================================
*
*/

/**
* @package module_install
*/
class acp_user_merge_info
{
	function module()
	{
		global $user;
		$user->add_lang('mods/info_acp_user_merge');
		return array(
			'filename'	=> 'acp_user_merge',
			'title'		=> 'ACP_USER_MERGE',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'default'	=> array('title' => 'ACP_USER_MERGE', 'auth' => 'acl_a_user', 'cat' => array('ACP_CAT_USERS')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>