<?php

/* 	

	AMXBans v6.0
	
	Copyright 2009, 2010 by AMXBans.de

	This file is part of AMXBans.

    AMXBans is free software, but it's licensed under the
	Creative Commons - Attribution-NonCommercial-ShareAlike 2.0

    AMXBans is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

    You should have received a copy of the cc-nC-SA along with AMXBans.  
	If not, see <http://creativecommons.org/licenses/by-nc-sa/2.0/>.

*/

// AMXBans DB structure v6.0

//_admins_servers
$table_create[$_SESSION["dbprefix"]."_admins_servers"]="`admin_id` int(11) DEFAULT NULL,
  `server_id` int(11) DEFAULT NULL,
  `custom_flags` varchar(32) NOT NULL,
  `use_static_bantime` enum('yes','no') NOT NULL DEFAULT 'yes'";

//_amxadmins
$table_create[$_SESSION["dbprefix"]."_amxadmins"]="`id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `access` varchar(32) DEFAULT NULL,
  `flags` varchar(32) DEFAULT NULL,
  `steamid` varchar(32) DEFAULT NULL,
  `nickname` varchar(32) DEFAULT NULL,
  `ashow` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `expired` int(11) DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
   KEY `steamid` (`steamid`)";
//_bans
$table_create[$_SESSION["dbprefix"]."_bans"]="`bid` int(11) NOT NULL AUTO_INCREMENT,
  `player_ip` varchar(32) DEFAULT NULL,
  `player_id` varchar(35) DEFAULT NULL,
  `player_nick` varchar(100) DEFAULT 'Unknown',
  `admin_ip` varchar(32) DEFAULT NULL,
  `admin_id` varchar(35) DEFAULT NULL,
  `admin_nick` varchar(100) DEFAULT 'Unknown',
  `ban_type` varchar(10) DEFAULT 'S',
  `ban_reason` varchar(100) DEFAULT NULL,
  `ban_created` int(11) DEFAULT NULL,
  `ban_length` int(11) DEFAULT NULL,
  `server_ip` varchar(32) DEFAULT NULL,
  `server_name` varchar(100) DEFAULT 'Unknown',
  `ban_kicks` int(11) NOT NULL DEFAULT '0',
  `expired` int(1) NOT NULL DEFAULT '0',
  `imported` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bid`),
  KEY `player_id` (`player_id`)";
//_bans_edits
$table_create[$_SESSION["dbprefix"]."_bans_edit"]="`id` int(11) NOT NULL AUTO_INCREMENT,
  `bid` int(11) NOT NULL,
  `edit_time` int(11) NOT NULL,
  `admin_nick` varchar(32) NOT NULL DEFAULT 'unknown',
  `edit_reason` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)";
//_bbcode
$table_create[$_SESSION["dbprefix"]."_bbcode"]="`id` int(11) NOT NULL AUTO_INCREMENT,
  `open_tag` varchar(32) DEFAULT NULL,
  `close_tag` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)";

//_comments
$table_create[$_SESSION["dbprefix"]."_comments"]="`id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) DEFAULT NULL,
  `comment` text,
  `email` varchar(100) DEFAULT NULL,
  `addr` varchar(32) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)";

//_files
$table_create[$_SESSION["dbprefix"]."_files"]="`id` int(11) NOT NULL AUTO_INCREMENT,
  `upload_time` int(11) DEFAULT NULL,
  `down_count` int(11) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  `demo_file` varchar(100) DEFAULT NULL,
  `demo_real` varchar(100) DEFAULT NULL,
  `file_size` int(11) DEFAULT NULL,
  `comment` text,
  `name` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `addr` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)";

//_levels
$table_create[$_SESSION["dbprefix"]."_levels"]="`level` int(12) NOT NULL DEFAULT '0',
  `bans_add` enum('yes','no') DEFAULT 'no',
  `bans_edit` enum('yes','no','own') DEFAULT 'no',
  `bans_delete` enum('yes','no','own') DEFAULT 'no',
  `bans_unban` enum('yes','no','own') DEFAULT 'no',
  `bans_import` enum('yes','no') DEFAULT 'no',
  `bans_export` enum('yes','no') DEFAULT 'no',
  `amxadmins_view` enum('yes','no') DEFAULT 'no',
  `amxadmins_edit` enum('yes','no') DEFAULT 'no',
  `webadmins_view` enum('yes','no') DEFAULT 'no',
  `webadmins_edit` enum('yes','no') DEFAULT 'no',
  `websettings_view` enum('yes','no') DEFAULT 'no',
  `websettings_edit` enum('yes','no') DEFAULT 'no',
  `permissions_edit` enum('yes','no') DEFAULT 'no',
  `prune_db` enum('yes','no') DEFAULT 'no',
  `servers_edit` enum('yes','no') DEFAULT 'no',
  `ip_view` enum('yes','no') DEFAULT 'no',
  PRIMARY KEY (`level`)";

//_logs
$table_create[$_SESSION["dbprefix"]."_logs"]="`id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` int(11) DEFAULT NULL,
  `ip` varchar(32) DEFAULT NULL,
  `username` varchar(32) DEFAULT NULL,
  `action` varchar(64) DEFAULT NULL,
  `remarks` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)";

//_modulconfig
$table_create[$_SESSION["dbprefix"]."_modulconfig"]="`id` int(11) NOT NULL AUTO_INCREMENT,
  `menuname` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `index` varchar(32) DEFAULT NULL,
  `activ` int(1) NOT NULL DEFAULT '1',
   PRIMARY KEY (`id`)";

//_reasons
$table_create[$_SESSION["dbprefix"]."_reasons"]="`id` int(11) NOT NULL AUTO_INCREMENT,
  `reason` varchar(100) DEFAULT NULL,
  `static_bantime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)";

//_reasons_set
$table_create[$_SESSION["dbprefix"]."_reasons_set"]="`id` int(11) NOT NULL AUTO_INCREMENT,
  `setname` varchar(32) DEFAULT NULL,
   PRIMARY KEY (`id`)";

//_reasons_to_set
$table_create[$_SESSION["dbprefix"]."_reasons_to_set"]="`id` int(11) NOT NULL AUTO_INCREMENT,
  `setid` int(11) NOT NULL,
  `reasonid` int(11) NOT NULL,
  PRIMARY KEY (`id`)";

//_serverinfo
$table_create[$_SESSION["dbprefix"]."_serverinfo"]="`id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` int(11) DEFAULT NULL,
  `hostname` varchar(100) DEFAULT 'Unknown',
  `address` varchar(100) DEFAULT NULL,
  `gametype` varchar(32) DEFAULT NULL,
  `rcon` varchar(32) DEFAULT NULL,
  `amxban_version` varchar(32) DEFAULT NULL,
  `amxban_motd` varchar(250) DEFAULT NULL,
  `motd_delay` int(10) DEFAULT '10',
  `amxban_menu` int(10) NOT NULL DEFAULT '1',
  `reasons` int(10) DEFAULT NULL,
  `timezone_fixx` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)";

//_smilies
$table_create[$_SESSION["dbprefix"]."_smilies"]="`id` int(5) NOT NULL AUTO_INCREMENT,
  `code` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
   PRIMARY KEY (`id`)";

//_usermenu
$table_create[$_SESSION["dbprefix"]."_usermenu"]="`id` int(11) NOT NULL AUTO_INCREMENT,
  `pos` int(11) DEFAULT NULL,
  `activ` tinyint(1) NOT NULL DEFAULT '1',
  `lang_key` varchar(64) DEFAULT NULL,
  `url` varchar(64) DEFAULT NULL,
  `lang_key2` varchar(64) DEFAULT NULL,
  `url2` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)";

//_webadmins
$table_create[$_SESSION["dbprefix"]."_webadmins"]="`id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `level` int(11) DEFAULT '99',
  `logcode` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `last_action` int(11) DEFAULT NULL,
  `try` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)";

//_webconfig
$table_create[$_SESSION["dbprefix"]."_webconfig"]="`id` int(11) NOT NULL AUTO_INCREMENT,
  `cookie` varchar(32) DEFAULT NULL,
  `bans_per_page` int(11) DEFAULT NULL,
  `design` varchar(32) DEFAULT NULL,
  `banner` varchar(64) DEFAULT NULL,
  `banner_url` varchar(128) NOT NULL,
  `default_lang` varchar(32) DEFAULT NULL,
  `start_page` varchar(64) DEFAULT NULL,
  `show_comment_count` int(1) DEFAULT '1',
  `show_demo_count` int(1) DEFAULT '1',
  `show_kick_count` int(1) DEFAULT '1',
  `demo_all` int(1) NOT NULL DEFAULT '0',
  `comment_all` int(1) NOT NULL DEFAULT '0',
  `use_capture` int(1) DEFAULT '1',
  `max_file_size` int(11) DEFAULT '2',
  `file_type` varchar(64) DEFAULT 'dem,zip,rar,jpg,gif',
  `auto_prune` int(1) NOT NULL DEFAULT '0',
  `max_offences` smallint(6) NOT NULL DEFAULT '10',
  `max_offences_reason` varchar(128) NOT NULL DEFAULT 'max offences reached',
  `use_demo` int(1) DEFAULT '1',
  `use_comment` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)";
	
//_flagged
$table_create[$_SESSION["dbprefix"]."_flagged"]="`fid` int(11) NOT NULL AUTO_INCREMENT,
  `player_ip` varchar(32) DEFAULT NULL,
  `player_id` varchar(35) DEFAULT NULL,
  `player_nick` varchar(100) DEFAULT 'Unknown',
  `admin_ip` varchar(32) DEFAULT NULL,
  `admin_id` varchar(35) DEFAULT NULL,
  `admin_nick` varchar(100) DEFAULT 'Unknown',
  `reason` varchar(100) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `server_ip` varchar(100) DEFAULT NULL,
   PRIMARY KEY (`fid`)
   KEY `player_id` (`player_id`)";
?>