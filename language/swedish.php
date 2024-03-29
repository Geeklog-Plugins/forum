<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog Forums Plugin 2.9.0                                               |
// +---------------------------------------------------------------------------+
// | swedish.php                                                               |
// | Language defines for all text                                             |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2003 by the following authors:                              |
// |    Insikt           postmaster AT insikt DOT org                          |
// |                                                                           |
// | Copyright (C) 2000,2001 by the following authors:                         |
// |    Tony Bibbs       tony AT tonybibbs DOT com                             |
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

global $LANG32;

###############################################################################
# Array Format:
# $LANGXX[YY]:  $LANG - variable name
#               XX    - file id number
#               YY    - phrase id number
###############################################################################

$LANG_GF00 = array(
    'pluginlabel' => 'Forum',
    'searchlabel' => 'Forum',
    'statslabel' => 'Totalt antal inl�gg',
    'statsheading1' => 'Topp-10 l�sta �mnen',
    'statsheading2' => 'Topp-10 besvarade �mnen',
    'statsheading3' => 'Inga �mnen att rapportera',
    'useradminmenu' => 'Foruminst�llningar',
    'access_denied' => '�tkomst nekad',
    'autotag_desc_forum' => '[forum: id alternate title] - Displays a link to a forum topic using the text \'here\' as the title. An alternate title may be specified but is not required.'
);

$LANG_GF01 = array(
    'FORUM' => 'Forum',
    'FORUMS' => 'Forums',
    'FORUMCATEGORYNAME' => '%s Forum Category',
    'FORUMNAME' => '%s Forum',
    'ALL' => 'All',
    'YES' => 'Ja',
    'NO' => 'Nej',
    'NEW' => 'Nya',
    'NEXT' => 'N�sta',
    'ERROR' => 'Fel!',
    'CONFIRM' => 'Bekr�fta',
    'UPDATE' => 'Uppdatera',
    'SAVE' => 'Spara',
    'CANCEL' => 'Avbryt',
    'ON' => ' ',
    'ON2' => '&nbsp;&nbsp;<b>On: </b>',
    'BY' => 'Av: ',
    'RE' => '�mne: ',
    'DATE' => 'Datum',
    'VIEWS' => 'L�sta',
    'REPLIES' => 'Svar',
    'NAME' => 'Namn:',
    'DESCRIPTION' => 'Beskrivning: ',
    'TOPIC' => '�mne',
    'TOPICS' => '�mnen:',
    'TOPICSUBJECT' => 'Titel�mne',
    'HOMEPAGE' => 'Home',
    'SUBJECT' => '�mne',
    'HELLO' => 'Hej ',
    'MOVED' => 'Moved',
    'POSTS' => 'Postningar',
    'LASTPOST' => 'Senaste Inl�gg',
    'POSTEDON' => 'Posted on',
    'POSTEDBY' => 'Posted By',
    'PAGES' => 'Sidor',
    'TODAY' => 'Idag klockan ',
    'REGISTERED' => 'Registrerad',
    'ORDERBY' => 'Sorteringsordning:',
    'ORDER' => 'Ordning:',
    'USER' => 'Anv�ndare',
    'GROUP' => 'Group',
    'ANON' => 'Anonym: ',
    'ADMIN' => 'Admin',
    'AUTHOR' => 'F�rfattare',
    'NOMOOD' => 'No Mood',
    'REQUIRED' => '[Kr�vs]',
    'OPTIONAL' => '[Valfritt]',
    'SUBMIT' => 'Skicka',
    'PREVIEW' => 'F�rhandsgrandska',
    'REMOVE' => 'Ta bort',
    'EDIT' => 'Redigera',
    'DELETE' => 'Ta bort',
    'MERGE' => 'Merge',
    'OPTIONS' => 'Val:',
    'MISSINGSUBJECT' => '�mne tomt',
    'MIGRATE_NOW' => 'Migrate Now',
    'FILTERLIST' => 'Filter List',
    'SELECTFORUM' => 'Select Forum',
    'DELETEAFTER' => 'Delete after',
    'TITLE' => 'Title',
    'COMMENTS' => 'Comments',
    'SUBMISSIONS' => 'Submissions',
    'HTML_FILTER_MSG' => 'Filtered HTML Allowed',
    'HTML_FULL_MSG' => 'Full HTML Allowed',
    'HTML_MSG' => 'HTML Allowed',
    'CENSOR_PERM_MSG' => 'Censored Content',
    'ANON_PERM_MSG' => 'View Anonymous Posts',
    'POST_PERM_MSG1' => 'Able to post',
    'POST_PERM_MSG2' => 'Anonymous users can post',
    'GO' => 'GO',
    'STATUS' => 'Status:',
    'ONLINE' => 'online',
    'OFFLINE' => 'offline',
    'back2parent' => 'F�reg�ende �mne',
    'forumname' => '',
    'category' => 'Kategori: ',
    'loginreqview' => '<b>Du m�ste tyv�rr %s registrera dig</a> eller %s logga in </a> f�r att anv�nda detta forum</b>',
    'loginreqpost' => '<b>Du m�ste tyv�rr registrera dig eller logga in f�r att skriva inl�gg p� dessa forum</b>',
    'nolastpostmsg' => 'N/A',
    'no_one' => 'Ingen.',
    'back2top' => 'Tillbaks till toppen',
    'TEXTMODE' => 'Text Mode:',
    'HTMLMODE' => 'HTML Mode:',
    'TopicPreview' => 'F�rhandsgrandska �mne',
    'moderator' => 'Moderator',
    'admin' => 'Admin',
    'DATEADDED' => 'Tillagd',
    'PREVTOPIC' => 'F�reg�ende �mne',
    'NEXTTOPIC' => 'N�sta �mne',
    'RESYNC' => 'Synkronisera',
    'RESYNCCAT' => 'ReSync Category Forums',
    'EDITICON' => 'Edit',
    'QUOTEICON' => 'Quote',
    'ProfileLink' => 'Profile',
    'WebsiteLink' => 'Website',
    'PMLink' => 'PM',
    'EmailLink' => 'Email',
    'FORUMSUBSCRIBE' => 'Subscribe to this forum',
    'FORUMUNSUBSCRIBE' => 'Un-Subscribe to this forum',
    'FORUMSUBSCRIBE_TRUE' => 'Subscribe:Enabled',
    'FORUMSUBSCRIBE_FALSE' => 'Subscribe:Disabled',
    'NEWTOPIC' => 'New Topic',
	'NEWPOSTS' => 'New Posts',
	'NEWFORUMPOSTS' => 'New Form Posts',
    'POSTREPLY' => 'Post Reply',
    'SubscribeLink' => 'Subscribe',
    'unSubscribeLink' => 'Un-Subscribe',
    'SubscribeLink_TRUE' => 'Subscribe:Enabled',
    'SubscribeLink_FALSE' => 'Subscribe:Disabled',
    'SUBSCRIPTIONS' => 'Subscriptions',
    'TOP' => 'Top of Post',
    'PRINTABLE' => 'Printable Version',
	'printed_subject' => 'Forum Subject: %s',
    'USERPREFS' => 'User Preferences',
    'SPEEDLIMIT' => '"Your last comment was %s seconds ago.<br' . XHTML . '>This site requires at least %s seconds between forum posts."',
    'ACCESSERROR' => 'ACCESS ERROR',
    'ACTIONS' => 'Actions',
    'DELETEALL' => 'Delete all selected records',
    'DELCONFIRM' => 'Are you sure you want to Delete selected records?',
    'DELALLCONFIRM' => 'Are you sure you want to Delete ALL selected records?',
	'DELCONFIRM_PARENT' => 'Are you sure you want to Delete this parent topic? It means that any replies it has will also be deleted.',
	'DELALLCONFIRM_PARENT' => 'Are you sure you want to Delete ALL selected records? If you have selected parent topics, then any replies to those topics will also be deleted. Parent Topics are the ones that show Views greater than 0.',	
    'STARTEDBY' => 'Started by:',
    'WARNING' => 'Warning',
    'MODERATED' => 'Moderators: %s',
    'LASTREPLYBY' => 'Last reply by:&nbsp;%s',
    'UID' => 'UID',
    'FORUMMENU' => 'Forum Menu',
    'INDEXPAGE' => 'Forum Index',
    'FEATURE' => 'Feature',
    'SETTING' => 'Setting',
    'MARKALLREAD' => 'Mark All Read',
    'MSG_NO_CAT' => 'No Categories or Forums Defined',
    'FORUMPOSTS' => 'Forum Posts',
	'MESSAGE' => 'Message',
	'HERE' => 'here',
    'CODE' => 'Code',
    'FONTCOLOR' => 'Font Color',
    'FONTSIZE' => 'Font Size',
    'CLOSETAGS' => 'Close Tags',
    'CODETIP' => 'Tip: Styles can be applied quickly to selected text',
    'TINY' => 'Tiny',
    'SMALL' => 'Small',
    'NORMAL' => 'Normal',
    'LARGE' => 'Large',
    'HUGE' => 'Huge',
    'DEFAULT' => 'Default',
    'DKRED' => 'Dark Red',
    'RED' => 'Red',
    'ORANGE' => 'Orange',
    'BROWN' => 'Brown',
    'YELLOW' => 'Yellow',
    'GREEN' => 'Green',
    'OLIVE' => 'Olive',
    'CYAN' => 'Cyan',
    'BLUE' => 'Blue',
    'DKBLUE' => 'Dark Blue',
    'INDIGO' => 'Indigo',
    'VIOLET' => 'Violet',
    'WHITE' => 'White',
    'BLACK' => 'Black',
    'b_help' => 'Bold text: [b]text[/b]',
    'i_help' => 'Italic text: [i]text[/i]',
    'u_help' => 'Underline text: [u]text[/u]',
    'q_help' => 'Quote text: [quote]text[/quote]',
    'c_help' => 'Code display: [code]code[/code]',
    'l_help' => 'List: [list]text[/list]',
    'o_help' => 'Ordered list: [olist]text[/olist]',
    'p_help' => '[img]http://image_url[/img]  or [img w=100 h=200][/img]',
    'w_help' => 'Insert URL: [url]http://url[/url] or [url=http://url]URL text[/url]',
    'a_help' => 'Close all open bbCode tags',
    's_help' => 'Font color: [color=red]text[/color]  Tip: you can also use color=#FF0000',
    'f_help' => 'Font size: [size=7]small text[/size]',
    'h_help' => 'Click to view more detailed help'
);

$LANG_GF02 = array(
    'msg01' => 'Sorry you must register to use these forums',
    'msg02' => 'You should not be here!<br' . XHTML . '>Restricted access to this forum only',
    'msg03' => 'Please wait while you are redirected',
    'msg05' => '<center><em>Inga �mnen har skapats �nnu.</em></center>',
    'msg07' => 'Anv�ndare Online:',
    'msg14' => 'Du har blivit avst�ngd och f�r inte delta.<br' . XHTML . '>',
    'msg15' => 'Om du tycker att detta inte st�mmer, kontakta <A HREF="mailto:%s?subject=Guestbook IP Ban">Site Admin</A>.',
    'msg18' => 'Problem! Alla f�lten �r inte ifyllda eller f�r kort skrivna.',
    'msg19' => 'Ditt meddelande har postats.',
    'msg22' => '- Forum Inl�ggsnotis',
	'reply_to_thread_msg' => "A reply has been made to the thread '%s' by %s.",
	'topic_started_msg' => "This topic was started by %s in the %s forum.",
	'view_reply_at_msg' => "You may view the reply at:",
	'new_topic_msg' => "A new topic '%s' has been posted by %s in the '%s' forum on the %s website.",
	'view_topic_at_msg' => "You may view it at:",
	'edit_to_post_msg' => "An edit has been made to a post in the thread '%s' by %s.",
	'view_edit_at_msg' => "You may view the edited post at:",
	'stop_reply_notify_msg' => "You are receiving this email because you have chosen to be notified when a reply has been made to this topic. To stop receiving notifications on this topic go to:",
	'stop_new_notify_msg' => "You are receiving this email because you have chosen to be notified when a new topic has been posted to this forum. To stop receiving notifications for this forum go to:",
	'great_day_msg' => "Have a great day!",
    'msg33' => 'Namn: [Kr�vs]',
    'msg36' => 'Hum�r: [Valfritt]',
    'msg38' => 'Meddela mig vid svar ',
    'msg40' => '<br' . XHTML . '>Du har redan bett om att f� meddelande vid svar p� detta �mne.<br' . XHTML . '><br' . XHTML . '>',
    'msg44' => 'Du har inga nya rapporter.',
    'msg49' => '(L�st %s g�nger) ',
    'msg55' => 'Inl�gget raderat.',
    'msg56' => 'IP Bannlyst.',
	'msg57' => 'IP removed from being Banned.',
    'msg59' => 'Normalt �mne',
    'msg60' => 'Nytt inl�gg',
    'msg61' => 'Klistrat �mne',
    'msg62' => 'Meddela mig vid svar',
    'msg64' => '�r du s�ker p� att du vill ta bort �mnet %s som heter: %s ?',
    'msg65' => '<br' . XHTML . '>Detta �r ett huvud�mne, s� alla svar som postats i kedjan kommer ocks� raderas.',
    'msg68' => 'Do you really want to remove the ban for the ip address: %s?',
    'msg69' => 'Vill du verkligen utesluta ipadressen %s?',
    'msg71' => 'Ingen funktion �r vald, v�lj en post och sedan en moderatorfunktion.<br' . XHTML . '>OBS! Du m�ste vara moderator f�r att f� utf�ra dessa funktioner.',
    'msg72' => 'Om meddelandet �r online s� har du inte r�tt att utf�ra denna moderatorfunktion.',
    'msg74' => 'Senaste %s foruminl�gg',
    'msg75' => 'Topp %s �mnen efter visningar',
    'msg76' => 'Topp %s �mnen efter postningar',
    'msg77' => '<br' . XHTML . '>Du skall inte vara h�r!<br' . XHTML . '>Detta forum har begr�nsad tillg�ng.',
    'msg83' => '<br' . XHTML . '>Du m�ste vara inloggad f�r att anv�nda denna funktion.<br' . XHTML . '><br' . XHTML . '>',
    'msg84' => 'Markera alla �mnen som l�sta',
    'msg85' => 'G� till sida:',
    'msg86' => '&nbsp;Senaste %s inl�ggen av&nbsp;',
    'msg87' => '<br' . XHTML . '>Varning: Detta �mnet �r l�st av moderatorn.<br' . XHTML . '>Inga fler inl�gg �r till�tna',
    'msg88' => 'Mitt forums medlemmar',
    'msg88b' => 'Forum Activity Only',
    'msg89' => 'Mina aktiva bevakningar',
    'msg101' => 'Forum Regler:',
    'msg103' => 'Hoppa till forum:',
    'msg106' => 'V�lj ett forum',
    'msg108' => 'Normalt Forum',
    'msg109' => 'L�st �mne',
    'msg110' => 'G�r till sida f�r meddelanderedigering..',
    'msg111' => 'Nya inl�gg sedan senaste bes�ket:',
    'msg112' => 'L�s nya inl�gg',
    'msg113' => 'L�s nya inl�gg i detta forum',
    'msg114' => 'L�st �mne',
    'msg115' => 'Klistrat �mne M/ Nya inl�gg',
    'msg116' => 'L�st �mne M/ Nya inl�gg',
    'msg117' => 'S�k alla',
    'msg118' => 'S�k i detta forum',
    'msg119' => 'S�kresultat:',
    'msg120' => 'Mest l�sta inl�gg',
    'msg121' => 'All times are %s. Klockan �r nu %s.',
    'msg122' => 'Popul�r Gr�ns:',
    'msg123' => 'Antal inl�gg innan popul�rgr�nsen uppn�s',
    'msg126' => 'S�k rader:',
    'msg127' => 'Antal rader att visa i s�kresultat',
    'msg128' => 'Medlemmar per sida:',
    'msg129' => 'For the Members listing screen',
    'msg130' => 'Visa anonyma inl�gg:',
    'msg131' => 'Till�ter dig att filtrera bort anonyma inl�gg?',
    'msg132' => 'Meddela alltid:',
    'msg133' => 'Aktivera automatisk bevakning p� alla dina �mnen',
    'msg134' => 'Prenumerationen �r upplagd',
    'msg135' => 'Du kommer nu meddelas om alla nya inl�gg p� detta forum.',
    'msg136' => 'Du m�ste v�lja ett forum att prenumerera p�.',
    'msg137' => 'Bevakning av �mnet �r aktiverat',
	'msg138a' => 'Listed below are all the forum topics you have subscribed to. This means for these subscriptions you will receive an email notification when someone replies to one of your subscribed topics.',
	'msg138b' => 'Listed below are all the forums you have subscribed to. This means for these subscriptions you will receive an email notification when a new topic is created in one of these forums, or someone replies to a topic. Please note that deleting a forum subscription will also delete any Topic Exception Notifications associated with the forum (but not any individual topic notifications).',
	'msg138c' => 'Listed below are all the topics that belong to the forum(s) you have subscribed to (see Forum Notifications), but you have unsubscribed from and chosen not to receive any more topic reply email notifications for.',
	'msg139a' => 'Listed below are all the forum topics the user you are viewing has subscribed to. This means for these subscriptions the user will receive an email notification when someone replies to one of their subscribed topics. If "All Users" are selected then the User column contains the name of the account the notification is for.',
	'msg139b' => 'Listed below are all the forums the user you are viewing has subscribed to. This means for these subscriptions the user will receive an email notification when a new topic is created in one of these forums, or someone replies to a topic. Please note that deleting a forum subscription will also delete any Topic Exception Notifications associated with the forum (but not any individual topic notifications).  If "All Users" are selected then the User column contains the name of the account the notification is for.',
	'msg139c' => 'Listed below are all the topics that belong to the forum(s) the user has subscribed to (see Forum Notifications), but they have unsubscribed from and chosen not to receive any more topic reply email notifications for. If "All Users" are selected then the User column contains the name of the account the notification is for.',
    'msg142' => 'Bevakning sparad.',
    'msg144' => '�terg� till �mne',
    'msg146' => 'Raderat',
    'msg147' => 'Forum [utskriftsv�nlig version av �mne %s]',
    'msg148' => 'Tryck <a href="javascript:history.back()">H�R</a> f�r att �terv�nda',
	'msg149' => 'Forum post canceled.',
    'msg155' => 'Inga inl�gg.',
    'msg156' => 'Totalt antal foruminl�gg',
    'msg157' => 'Senaste 10 inl�ggen',
    'msg158' => 'Senaste 10 inl�ggen av ',
    'msg159' => 'Are you sure you want to DELETE these selected Moderator records?',
    'msg160' => 'View last page of topic',
    'msg163' => 'Post moved',
    'msg164' => 'Mark all Categories and Topics Read',
    'msg166' => 'ERROR: Invalid topic or Topic not found',
    'msg167' => 'Notification Option',
    'msg168' => 'Setting of No will disable email notifictions',
    'msg169' => 'Return to Members listing',
    'msg170' => 'Latest Forum Posts',
    'msg171' => 'Forum Access Error',
    'msg172' => 'Topic does not exist. It possibly has been deleted',
    'msg173' => 'Transferring to Post Message page..',
    'msg174' => 'Unable to BAN Member - Invalid or Empty IP Address',
    'msg175' => 'Return to Forum Listing',
    'msg176' => 'Select a member',
    'msg177' => 'All Members',
    'msg178' => 'Parent Posts Only',
    'msg179' => 'Content generated in: %s seconds',
    'msg180' => 'Forum Posting Alert',
    'msg181' => 'You don\'t have access to any other forum as a moderator',
    'msg182' => 'Moderator Confirmation',
    'msg183' => 'New topic was created from this post in forum: %s',
    'msg184' => 'Notify Once Only',
    'msg185' => 'Notifications will only be sent once for forums and topics which have multiple new posts since your last visit.',
    'msg186' => 'New Topic Title',
    'msg187' => 'Return to topic - click <a href="%s">here</a>',
    'msg188' => 'Click to go directly to last post',
    'msg189' => 'Error: You can not edit this post anymore',
    'msg190' => 'Silent Edit',
	'msg190b' => 'When enabled and the forum post is saved, no notifications will be sent to users subscribed to this topic (or forum) about this update, and the forum post date will not be changed to the current date and time.',
    'msg191' => 'Edit not permitted. Allowable edit timeframe expired or you need moderator rights',
    'msg192' => 'Completed ... Migrated %s topics and %s comments.',
    'msg193' => 'STORY&nbsp;&nbsp;TO&nbsp;&nbsp;FORUM&nbsp;&nbsp;MIGRATION&nbsp;&nbsp;UTILITY',
    'msg194' => 'Quiet Forum',
    'msg195' => 'Click to Jump to Forum',
    'msg196' => 'View the main forum index',
    'msg197' => 'Mark all Categories read',
    'msg198' => 'Update your forum settings',
    'msg199' => 'View or remove forum notifications',
    'msg200' => 'Site members report',
    'msg201' => 'Popular topics',
	'popularforumtopics' => 'Popular Forum Topics',
	'poptopisby' => 'Popular Topics by %s',
	'by' => 'By',
	'replies' => 'Replies',
	'views' => 'Views',
	'forumsearchresults' => 'Forum Search Results',
	'forumsearchfor' => 'Forum Search results for "%s"',
    'msg202' => 'No new posts',
	'msg203' => 'No posts found.',
    'msg300' => 'This Forum Post by an anonymous user has been blocked. To enable see your <a href="/forum/userprefs.php">Forum User Preferences</a>.',
	'msg301' 	=> 'Really mark all topics in all forums and categories read?',
	'msg301a' 	=> 'All topics in all forums and categories have now been marked as read.',
	'msg302' 	=> 'Really mark all topics read in this forum?',
	'msg302a' 	=> 'All topics in this forum have now been marked as read.',
	'msg303' 	=> 'Really mark all topics in all forums in this category read?',
	'msg303a' 	=> 'All topics in all forums from this category have now been marked as read.',
    'PostReply' => 'Post New Reply',
    'PostTopic' => 'Post New Topic',
    'EditTopic' => 'Edit Topic',
    'quietforum' => 'Forum has no new topics'
);
$LANG_GF02['adminconfirmation']   = 'Administrator Confirmation';
$LANG_GF02['num_forumposts']   = '%s Forum Post(s)';
$LANG_GF02['gl_topics_desc']   = '<em>Important:</em> These are Geeklog Topics (which you have Edit access for) which can be assigned to the root parent forum topic post (which then applies to the entire fourm topic) or the Forum, or Category itself. If Geeklog Topics are assigned to the Category or Forum they will then be inherited by and items below it (unless that item is assigned to another Geeklog Topic).<br' . XHTML . '><br' . XHTML . '>Since Blocks (and their positions) are assigned to Geeklog Topics this allows you to select the Geeklog Topic you want and then have these Blocks display for the forum topic. This also allows the blocks postion "Forum Show Topic" to be used more effectively.<br' . XHTML . '><br' . XHTML . '>The Geeklog Topic assignment(s) for forum topics does not affect the permissions of the forum (like it does with articles). If the visitor has access to view the forum post but not the topic assigned to it then "All Topics" is assumed. If no Geeklog Topics are assigned to the forum topic then the default "All Topics" is assumed.';
$LANG_GF02['gl_topics_inherit_category'] = '%s (inherited from Category)';
$LANG_GF02['gl_topics_inherit_forum'] = '%s (inherited from Forum)';
$LANG_GF02['gl_topics_inherit_config'] = '%s (inherited from Config)';
$LANG_GF02['gl_topics_assigned']   = 'Geeklog Topic Assigned:';
$LANG_GF02['gl_printed_subject']   = 'Forum Subject: %s';

$LANG_GF03 = array(
    'delete' => 'Radera inl�gg',
    'edit' => 'Redigera inl�gg',
    'move' => 'Flytta �mne',
    'split' => 'Split Topic',
    'banippost'         => 'Ban IP from Posting',
    'banippostremove'   => 'Remove Ban for IP from Posting',
    'banip'             => 'Ban IP from Site',
    'banipremove'       => 'Remove Ban for IP from Site',
    'banipmsg'      	=> 'IP has been banned from site',
    'banipremovemsg'	=> 'Ban has been removed for IP from Site',  
    'movetopic' => 'Flytta �mne',
    'movetopicmsg' => '<br' . XHTML . '> Du har tillst�nd att flytta �mnet <b>%s</b> till f�ljande forum:',
    'splittopicmsg' => '<br' . XHTML . '>Create a new Topic with this post: "<b>%s</b>"<br' . XHTML . '><em>By:</em>&nbsp;%s&nbsp <em>On:</em>&nbsp;%s',
    'selectforum' => 'Select new forum:',
    'lockedpost' => 'Add Reply Post',
    'splitheading' => 'Split thread option:',
    'splitopt1' => 'Move all posts from this point',
    'splitopt2' => 'Move only this one post'
);

$LANG_GF04 = array(
    'label_forum' => 'Forum Profil',
    'label_location' => 'Plats',
    'label_aim' => 'AIM-Namn',
    'label_yim' => 'YIM-Namn',
    'label_icq' => 'ICQ-Identitet',
    'label_msnm' => 'MS Messenger-Namn',
    'label_interests' => 'Intressen',
    'label_occupation' => 'Syssels�ttning'
);

$LANG_GF05 = array(
    'aim_link' => '&nbsp;<a href="aim:goim?screenname=',
    'aim_linkend' => '>',
    'aim_hello' => '&amp;message=Hi.+Are+you+there?',
    'aim_alttext' => 'AIM:&nbsp;',
    'icq_link' => '&nbsp;',
    'icq_alttext' => 'ICQ #:&nbsp;',
    'msn_link' => '&nbsp;<a href="javascript:MsgrApp.LaunchIMUI(',
    'msn_linkend' => ')">',
    'msn_alttext' => 'Messenger:&nbsp;',
    'yim_link' => '&nbsp;<a href="ymsgr:sendIM?',
    'yim_linkend' => '">',
    'yim_alttext' => 'YIM:&nbsp;'
);

$LANG_GF06 = array(
    1 => 'Statistics',
    2 => 'Settings',
    3 => 'Forums',
    4 => 'Moderator',
    5 => 'Convert',
    6 => 'Messages',
	7 => 'Subscriptions',
    8 => 'IP Mgmt'
);

$LANG_GF07 = array(
    1 => 'View Forums',
    2 => 'Preferences',
    3 => 'Popular Topics',
    4 => 'Subscriptions',
    5 => 'Members'
);

$LANG_GF08 = array(
    1 => 'Topic Notifications',
    2 => 'Track Forum Notifications',
    3 => 'Topic Exception Notifications'
);

$LANG_GF09 = array(
    'edit' => 'Edit',
    'email' => 'Email',
    'home' => 'Home',
    'lastpost' => 'Last Post',
    'pm' => 'PM',
    'profile' => 'Profile',
    'quote' => 'Quote',
    'website' => 'Website',
    'newtopic' => 'New Topic',
    'replytopic' => 'Post Reply'
);

/* Block Locations */
$LANG_GF20 = array (
    'blocks_showtopic_name'     => 'Forum Show Topic',
    'blocks_showtopic_desc'     => 'Displays blocks right after every X number of topic posts.'
);

$LANG_GF91 = array(
    'gfstats' => 'Geekforum Statistik',
    'statsmsg' => 'Nuvarande statistik f�r ditt forum:',
    'totalcats' => 'Totalt antal Kategorier:',
    'totalforums' => 'Totalt antal Forum:',
    'totaltopics' => 'Totalt antal �mnen:',
    'totalposts' => 'Totalt antal Inl�gg:',
    'totalviews' => 'Totalt antal Visningar:',
    'avgpmsg' => 'Genomsnittligt antal inl�gg per:',
    'category' => 'Kategori:',
    'forum' => 'Forum:',
    'topic' => 'Topic:',
    'avgvmsg' => 'Genomsnittligt antal visningar per:'
);

// User Preference Page
$LANG_GF92 = array (
    'userpreferences'    => 'User Preferences',
    'setsavemsg'         => 'Settings saved.',
    'topicspp'           => 'Topics Per Page',
    'topicsppdscp'       => 'Number of topics to display when viewing the forum index',
    'postspp'            => 'Posts Per Page',
    'postsppdscp'        => 'Number of posts to show per page',
    'newpp'              => 'New Posts Per Page',
    'newppdscp'          => 'Number of new posts to show on the new posts page',
    'popularpp'     	 => 'Popular Posts Per Page',
    'popularppdscp'      => 'Number of posts to show on the popular page',
    'popularl'     		 => 'Popular Limit',
    'popularldscp'       => 'Number of posts or views before calling a topic popular',
    'searchpp'         	 => 'Search Results Per Pages',
    'searchppdscp'       => 'Number of search results to display on the search page',
    'memberspp'          => 'Users Per Page',
    'membersppdscp'      => 'Number of Users to show on the Users report page',
    'viewap'         	 => 'View Anonymous Posts',
    'viewapdscp'         => 'Setting of No will filter out anonymous posts',
    'alwaysn'            => 'Always Notify',
    'alwaysndscp'        => 'Setting of Yes will enable auto notification for any topics you create or reply',
    'notifyoo'			 => 'Notify Once Only', 
    'notifyoodscp'   	 => 'Notifications will only be sent once for forums and topics which have multiple new posts since your last visit.', 
    'showiframe'         => 'Show Topic Review',
    'showiframedscp'     => 'Show Topic Review frame at bottom when replying to a topic',
    'gfsettings'         => 'Forum Settings'
);

$LANG_GF93 = array(
    'gfboard' => 'Geekforum �mnesomr�den',
    'addcat' => 'L�gg till kategori',
    'addforum' => 'L�gg till forum',
    'catorder' => 'Kategori-Ordning',
    'catadded' => 'Kategori Tillagd.',
    'catdeleted' => 'Kategori Borttagen',
    'catedited' => 'Kategori Redigerad.',
    'forumadded' => 'Forum tillagt.',
    'forumaddError' => 'Error Adding Forum.',
    'forumdeleted' => 'Forum borttaget',
    'forummerged' => 'Forum Merged',
    'forumnotmerged' => 'Forum cannot be merged since no other forums available to be merged with.',
    'forumedited' => 'Forum redigerat',
    'forumordered' => 'Forum-Ordning Redigerad',
    'back' => 'Tillbaks',
    'addnote' => 'OBS: Du kan �ndra detta senare.',
    'editforumnote' => '<br' . XHTML . '>�ndra egenskaper i forum f�r: <b>"%s"</b>',
    'deleteforumnote1' => 'Vill du ta bort forumet <b>"%s"</b>&nbsp;?',
    'deleteforumnote2' => 'Alla �mnen som postats under kommer ocks� att raderas.',
    'mergeforumnote1' => 'Merge the forum <b>"%s"</b> with?',
    'mergeforumnote2' => 'Forum to merge into:',
    'editcatnote' => '<br' . XHTML . '>Redigera kategoriegenskaper f�r: <b>"%s"</b>',
    'deletecatnote1' => 'Vill du radera kategorin <b>"%s"</b>&nbsp;?',
    'deletecatnote2' => 'Alla forum och �mnen som skickats under dessa forum kommer ocks� att raderas.',
    'undercat' => 'Under kategori',
    'groupaccess' => 'Grupp Access: ',
    'action' => 'Actions',
    'forumdescription' => 'Forum Description',
    'posts' => 'Posts',
    'ordertitle' => 'Order',
    'ModEdit' => 'Edit',
    'ModMove' => 'Move',
    'ModStick' => 'Stick',
    'ModBan' => 'Ban',
    'addmoderator' => 'Add Record',
    'delmoderator' => " Delete\nSelected",
    'moderatorwarning' => '<b>Warning: No Forums Defined</b><br' . XHTML . '><br' . XHTML . '>Setup Forum Categories and Add at least 1 forum<br' . XHTML . '>before attempting to add Modertators',
    'private' => 'Private Forum',
    'filtertitle' => 'Select Moderator records to view',
    'addmessage' => 'Add new Moderator',
    'allowedfunctions' => 'Allowed Functions',
    'userrecords' => 'User Records',
    'grouprecords' => 'Group Records',
    'filterview' => 'Filter View',
    'readonly' => 'Readonly Forum',
    'readonlydscp' => 'Only the Moderator can post to this forum',
    'hidden' => 'Hidden Forum',
    'hiddendscp' => 'Forum does not show in the forum index',
    'hideposts' => 'Hide New posts',
    'hidepostsdscp' => 'Updates will not show in the New Posts Blocks or RSS Feeds',
    'mod_title' => 'Forum Moderatorer',
    'allforums' => 'All Forums',
    'namerequired' => 'Name is required.',
	'resyncedmsg' => 'ReSynch and Clean completed for selected category or forum.<br><ul><li>%s topic posts re-synced.</li><li>%s orphan topic records (those without a parent topic) found and fixed.</li><li>%s orphan records found and cleaned from all other Forum tables.</li></ul>'
);

$LANG_GF95 = array(
    'header1' => 'Discussion Board Messages',
    'header2' => 'Discussion Board Messages for forum&nbsp;&raquo;&nbsp;%s',
    'notyet' => 'Funktionen har inte lagts till �n',
    'delall' => 'Radera alla',
    'delallmsg' => '�r du s�ker p� att du vill radera alla meddelanden fr�n: %s?',
    'underforum' => '<b>Under Forum: %s (ID #%s)',
    'moderate' => 'Moderera',
    'nomess' => 'Det har inte skickats n�gra meddelanden �n! '
);

$LANG_GF96 = array(
    'ip' => 'IP',
    'enterip' => 'Enter below an IP address to ban',
    'gfipman' => 'IP-Hantering',
    'ban' => 'Banna',
    'noips' => '<p style="margin:0px; padding:5px;">Inga ipdresser har bannats �nnu!</p>',
    'unban' => 'Ta bort ban',
    'ipbanned' => 'Bannad IPAdress',
    'banip' => 'Bekr�fta bannad ip',
    'banipmsg' => '�r du s�ker p� att du vill banna %s?',
    'specip' => 'Specificera en ipadress som skall bannas!',
    'ipunbanned' => 'IPAdressen bannas inte l�ngre.',
    'noip' => 'You did not provide an IP address!'
);

$LANG_GF97 = array (
    'gfsubscriptions' => 'Forum Subscriptions'
);

$LANG_GF_SMILIES = array(
    'biggrin' => 'Big Grin',
    'smile' => 'Smile',
    'frown' => 'Frown',
    'eek' => 'Geek',
    'confused' => 'Confused',
    'cool' => 'Cool',
    'lol' => 'LOL',
    'angry' => 'Angry',
    'razz' => 'Razz',
    'oops' => 'Oops!',
    'surprise' => 'Surprised!',
    'cry' => 'Cry',
    'evil' => 'Evil',
    'twisted' => 'Twisted',
    'rolleye' => 'Rolling Eyes',
    'wink' => 'Wink',
    'exclaim' => 'Exclaimation',
    'question' => 'Question',
    'idea' => 'Idea',
    'arrow' => 'Arrow',
    'neutral' => 'Neutral',
    'green' => 'Mr. Green',
    'sick' => 'Sick',
    'tired' => 'Tired',
    'monkey' => 'Monkey'
);
$PLG_forum_MESSAGE1 = 'Forum Plugin Upgrade: Update completed successfully.';
$PLG_forum_MESSAGE2 = 'Forum Plugin upgrade: We are unable to update this version automatically. Refer to the plugin documentation.';
$PLG_forum_MESSAGE5 = 'Forum Plugin Upgrade failed - check error.log';

// Messages for the plugin upgrade
$PLG_forum_MESSAGE3001 = '';
$PLG_forum_MESSAGE3002 = $LANG32[9];

// Localization of the Admin Configuration UI
$LANG_configsections['forum'] = array(
    'label' => 'Forum',
    'title' => 'Forum Configuration'
);

$LANG_confignames['forum'] = array(
    'registration_required' => 'Login Required to View Posts?',
    'registered_to_post' => 'Login Required to Post?',
    'allow_notification' => 'Allow Notification?',
    'show_topicreview' => 'Show Topic Review when Replying?',
    'allow_user_dateformat' => 'Allow User defined Date Format?',
    'use_pm_plugin' => 'Use Private Message Plugin?',
    'show_topics_perpage' => 'Number of Topics to Show per Page',
    'show_posts_perpage' => 'Number of Posts to Show per Page',
    'show_messages_perpage' => 'Number of Message Lines per Page',
    'show_searches_perpage' => 'Number of Search Results per Page',
    'showblocks' => 'Block Columns to Show with Forum',
    'usermenu' => 'Type of User Menu',
    'likes_forum' => 'Forum Likes',
    'recaptcha' => 'reCAPTCHA',
    'show_subject_length' => 'Max Length of Subject',
    'min_username_length' => 'Min Length of Username',
    'min_subject_length' => 'Min Length of Subject',
    'min_comment_length' => 'Min Length of Post Content',
    'views_tobe_popular' => 'Number of Views to have Popular',
    'post_speedlimit' => 'Posting Speedlimit(sec)',
    'allowed_editwindow' => 'Timeframe(sec) to Allow Edit Posts',
    'allow_html' => 'Allow HTML Mode?',
    'post_htmlmode' => 'Set HTML Mode as Default?',
    'convert_break' => 'Convert Newlines to HTML &lt;BR&gt;?',
    'use_censor' => 'Use Geeklog Censoring?',
    'use_glfilter' => 'Use Geeklog Filtering?',
    'use_geshi' => 'Use Geshi Code Formatting?',
    'use_spamx_filter' => 'Use Spam-X Plugin?',
    'show_moods' => 'Enable Moods?',
    'allow_smilies' => 'Enable Smilies?',
    'use_smilies_plugin' => 'Use Smilies Plugin?',
    'avatar_width' => 'Width of Member Avatar',
    'show_centerblock' => 'Enable Centerblock?',
    'centerblock_homepage' => 'Enable Homepage Only?',
    'centerblock_numposts' => 'Number of Posts to Show',
    'cb_subject_size' => 'Max Length of Subject',
    'centerblock_where' => 'Placement on Page',
    'sideblock_numposts' => 'Number of Posts to Show',
    'sb_subject_size' => 'Max Length of Subject',
    'sb_latestpostonly' => 'Show Latest Post Only?',
    'sideblock_enable' => 'Enabled',
    'sideblock_isleft' => 'Display Block on Left',
    'sideblock_order' => 'Block Order',
    'sideblock_topic_option' => 'Topic Options',
    'sideblock_topic' => 'Topic',
    'sideblock_group_id' => 'Group',
    'sideblock_permissions' => 'Permissions',
    'level1' => 'Number of Posts of Level1',
    'level2' => 'Number of Posts of Level2',
    'level3' => 'Number of Posts of Level3',
    'level4' => 'Number of Posts of Level4',
    'level5' => 'Number of Posts of Level5',
    'level1name' => 'Name of Level1',
    'level2name' => 'Name of Level2',
    'level3name' => 'Name of Level3',
    'level4name' => 'Name of Level4',
    'level5name' => 'Name of Level5',
    'menublock_enable' => 'Enabled',
    'menublock_isleft' => 'Display Block on Left',
    'menublock_order' => 'Block Order',
    'menublock_topic_option' => 'Topic Options',
    'menublock_topic' => 'Topic',
    'menublock_group_id' => 'Group',
    'menublock_permissions' => 'Permissions'
);

$LANG_configsubgroups['forum'] = array(
    'sg_main' => 'Main Settings'
);

$LANG_tab['forum'] = array(
    'tab_main' => 'General Forum Settings',
    'tab_topicposting' => 'Topic Posting',
    'tab_centerblock' => 'Centerblock',
    'tab_sideblock' => 'Sideblock',
    'tab_rank' => 'Rank',
    'tab_menublock' => 'Menu Block'
);

$LANG_fs['forum'] = array(
    'fs_main' => 'General Forum Settings',
    'fs_topicposting' => 'Topic Posting',
    'fs_centerblock' => 'Centerblock',
    'fs_sideblock' => 'Sideblock',
    'fs_sideblock_settings' => 'Block Settings',
    'fs_sideblock_permissions' => 'Block Permissions',
    'fs_rank' => 'Rank',
    'fs_menublock' => 'Menu Block',
    'fs_menublock_settings' => 'Block Settings',
    'fs_menublock_permissions' => 'Block Permissions'
);

// Note: entries 0, 1, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['forum'] = array(
    0 => array('True' => 1, 'False' => 0),
    1 => array('True' => true, 'False' => false),
    5 => array('Top Of Page' => 1, 'After Featured Story' => 2, 'Bottom Of Page' => 3),
    6 => array('Left Blocks' => 'leftblocks', 'Right Blocks' => 'rightblocks', 'All Blocks' => 'allblocks', 'No Blocks' => 'noblocks'),
    7 => array('Block Menu' => 'blockmenu', 'Navigation Bar' => 'navbar', 'None' => 'none'),
    12 => array('No access' => 0, 'Read-Only' => 2, 'Read-Write' => 3),
    13 => array('No access' => 0, 'Use' => 2),
    14 => array('No access' => 0, 'Read-Only' => 2),
    15 => array('All' => 'TOPIC_ALL_OPTION', 'Homepage Only' => 'TOPIC_HOMEONLY_OPTION', 'Select Topics' => 'TOPIC_SELECTED_OPTION'),
    16 => array('Disabled' => RECAPTCHA_NO_SUPPORT, 'reCAPTCHA V2' => RECAPTCHA_SUPPORT_V2, 'reCAPTCHA V2 Invisible' => RECAPTCHA_SUPPORT_V2_INVISIBLE),
    41 => array('False' => 0, 'Likes and Dislikes' => 1, 'Likes Only' => 2)
);

?>
