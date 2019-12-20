<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog Forums Plugin 2.8.0                                               |
// +---------------------------------------------------------------------------+
// | configuration_validation.php                                              |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2011 by the following authors:                              |
// |    Geeklog Community Members   geeklog-forum AT googlegroups DOT com      |
// |                                                                           |
// | Forum Plugin Authors                                                      |
// |    Mr.GxBlock                                        www.gxblock.com      |
// |    Matthew DeWyer   matt AT mycws DOT com            www.cweb.ws          |
// |    Blaine Lang      geeklog AT langfamily DOT ca     www.langfamily.ca    |
// +---------------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// +---------------------------------------------------------------------------+

if (stripos($_SERVER['PHP_SELF'], 'configuration_validation.php') !== false) {
    die('This file can not be used on its own!');
}

// General Forum Settings
$_CONF_VALIDATE['forum']['registration_required'] = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['registered_to_post']    = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['allow_notification']    = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['show_topicreview']      = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['allow_user_dateformat'] = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['use_pm_plugin']         = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['show_topics_perpage']   = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['show_posts_perpage']    = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['show_messages_perpage'] = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['show_searches_perpage'] = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['showblocks']            = [
    'rule' => ['inList', ['leftblocks', 'rightblocks', 'allblocks', 'noblocks'], true]
];
$_CONF_VALIDATE['forum']['usermenu']              = [
    'rule' => ['inList', ['blockmenu', 'navbar', 'none'], true]
];
$_CONF_VALIDATE['forum']['likes_forum'] = [
    'rule' => ['inList', [0, 1, 2], false]
];
$_CONF_VALIDATE['forum']['recaptcha'] = ['rule' => ['inList', ['0', '1', '2'], true]];

// Topic Posting Settings
$_CONF_VALIDATE['forum']['show_subject_length']   = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['min_username_length']   = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['min_subject_length']    = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['min_comment_length']    = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['views_tobe_popular']    = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['post_speedlimit']       = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['allowed_editwindow']    = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['allow_html']            = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['post_htmlmode']         = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['convert_break']         = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['use_censor']            = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['use_glfilter']          = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['use_geshi']             = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['use_spamx_filter']      = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['show_moods']            = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['allow_smilies']         = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['use_smilies_plugin']    = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['avatar_width']          = ['rule' => 'numeric'];

// Centerblock Settings
$_CONF_VALIDATE['forum']['show_centerblock']      = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['centerblock_homepage']  = ['rule' => 'boolean'];
$_CONF_VALIDATE['forum']['centerblock_numposts']  = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['cb_subject_size']       = ['rule' => 'numeric'];
$_CONF_VALIDATE['links']['centerblock_where']     = [
    'rule' => ['inList', [1, 2, 3], true]
];

// Sideblock Settings
$_CONF_VALIDATE['forum']['sideblock_numposts']    = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['sb_subject_size']       = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['sb_latestpostonly']     = ['rule' => 'boolean'];

// Rank Settings
$_CONF_VALIDATE['forum']['level1']                = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['level2']                = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['level3']                = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['level4']                = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['level5']                = ['rule' => 'numeric'];
$_CONF_VALIDATE['forum']['level1name']            = ['rule' => 'string'];
$_CONF_VALIDATE['forum']['level2name']            = ['rule' => 'string'];
$_CONF_VALIDATE['forum']['level3name']            = ['rule' => 'string'];
$_CONF_VALIDATE['forum']['level4name']            = ['rule' => 'string'];
$_CONF_VALIDATE['forum']['level5name']            = ['rule' => 'string'];
