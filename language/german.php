<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog Forums Plugin 2.9.0                                               |
// +---------------------------------------------------------------------------+
// | german.php                                                                |
// | Language defines for all text                                             |
// +---------------------------------------------------------------------------+
// | Copyright (C) 200? by the following authors:                              |
// |    Dirk Haun        dirk AT haun-online DOT de                            |
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
    'statslabel' => 'Gesamte Forenbeitr�ge',
    'statsheading1' => 'Forum Top10 der aufgerufenen Themen',
    'statsheading2' => 'Forum Top10 der beantworteten Themen',
    'statsheading3' => 'Keine Themen zum Report',
    'useradminmenu' => 'Forum-Einstellungen',
    'access_denied' => 'Zugriff verweigert',
    'autotag_desc_forum' => '[forum: id alternate title] - Displays a link to a forum topic using the text \'here\' as the title. An alternate title may be specified but is not required.'
);

$LANG_GF01 = array(
    'FORUM' => 'Forum',
    'FORUMS' => 'Forums',
    'FORUMCATEGORYNAME' => '%s Forum Category',
    'FORUMNAME' => '%s Forum',
    'ALL' => 'All',
    'YES' => 'Ja',
    'NO' => 'Nein',
    'NEW' => 'Neu',
    'NEXT' => 'weiter',
    'ERROR' => 'Fehler!',
    'CONFIRM' => 'Best�tigen',
    'UPDATE' => 'Update',
    'SAVE' => 'Sichern',
    'CANCEL' => 'Abbruch',
    'ON' => 'Am: ',
    'ON2' => '&nbsp;&nbsp;<b>Am: </b>',
    'BY' => 'Von: ',
    'RE' => 'Re: ',
    'DATE' => 'Datum',
    'VIEWS' => 'Gelesen',
    'REPLIES' => 'Antworten',
    'NAME' => 'Name:',
    'DESCRIPTION' => 'Beschreibung: ',
    'TOPIC' => 'Thema',
    'TOPICS' => 'Themen',
    'TOPICSUBJECT' => 'Betreff',
    'HOMEPAGE' => 'Home',
    'SUBJECT' => 'Betreff',
    'HELLO' => 'Hallo ',
    'MOVED' => 'Verschoben',
    'POSTS' => 'Beitr�ge',
    'LASTPOST' => 'Letzter Beitrag',
    'POSTEDON' => 'Geschrieben am',
    'POSTEDBY' => 'Geschrieben von',
    'PAGES' => 'Seiten',
    'TODAY' => 'Heute um ',
    'REGISTERED' => 'Mitglied seit',
    'ORDERBY' => 'Sortieren nach:&nbsp;',
    'ORDER' => 'Order:',
    'USER' => 'User',
    'GROUP' => 'Group',
    'ANON' => 'Gast: ',
    'ADMIN' => 'Admin',
    'AUTHOR' => 'Autor',
    'NOMOOD' => 'Keine Stimmung',
    'REQUIRED' => '[ben�tigt]',
    'OPTIONAL' => '[optional]',
    'SUBMIT' => 'Abschicken',
    'PREVIEW' => 'Vorschau',
    'REMOVE' => 'L�schen',
    'EDIT' => '�ndern',
    'DELETE' => 'L�schen',
    'MERGE' => 'Merge',
    'OPTIONS' => 'Optionen:',
    'MISSINGSUBJECT' => 'Leerer Betreff',
    'MIGRATE_NOW' => 'Migrate Now',
    'FILTERLIST' => 'Gefiltertes',
    'SELECTFORUM' => 'Select Forum',
    'DELETEAFTER' => 'Delete after',
    'TITLE' => 'Title',
    'COMMENTS' => 'Kommentare',
    'SUBMISSIONS' => 'Submissions',
    'HTML_FILTER_MSG' => 'Gefiltertes HTML erlaubt',
    'HTML_FULL_MSG' => 'Alle HTML-Tags erlaubt',
    'HTML_MSG' => 'HTML erlaubt',
    'CENSOR_PERM_MSG' => 'Beitr�ge "entsch�rfen"',
    'ANON_PERM_MSG' => 'Beitr�ge von G�sten',
    'POST_PERM_MSG1' => 'Schreiben erlaubt',
    'POST_PERM_MSG2' => 'G�ste k�nnen schreiben',
    'GO' => 'los',
    'STATUS' => 'Status:',
    'ONLINE' => 'online',
    'OFFLINE' => 'offline',
    'back2parent' => 'Parent Topic',
    'forumname' => '',
    'category' => 'Kategory: ',
    'loginreqview' => '<b>Sorry you must %s register</a> or %s login </a> to use these forums</b>',
    'loginreqpost' => '<b>Sorry you must register or login to post on these forums</b>',
    'nolastpostmsg' => 'n/v',
    'no_one' => 'No one.',
    'back2top' => 'Back to top',
    'TEXTMODE' => 'Text-Modus',
    'HTMLMODE' => 'HTML-Modus',
    'TopicPreview' => 'Vorschau',
    'moderator' => 'Moderator',
    'admin' => 'Admin',
    'DATEADDED' => 'Hinzugef�gt',
    'PREVTOPIC' => 'Vorheriges Thema',
    'NEXTTOPIC' => 'N�chstes Thema',
    'RESYNC' => 'ReSync',
    'RESYNCCAT' => 'ReSync Category Forums',
    'EDITICON' => '�ndern',
    'QUOTEICON' => 'Zitat',
    'ProfileLink' => 'Profil',
    'WebsiteLink' => 'Website',
    'PMLink' => 'PM',
    'EmailLink' => 'E-Mail',
    'FORUMSUBSCRIBE' => 'Forum abonnieren',
    'FORUMUNSUBSCRIBE' => 'Forum-Abo beenden',
    'FORUMSUBSCRIBE_TRUE' => 'Abonnieren:Aktiviert',
    'FORUMSUBSCRIBE_FALSE' => 'Abonnieren:Behinderte',
    'NEWTOPIC' => 'Neues Thema',
	'NEWPOSTS' => 'New Posts',
	'NEWFORUMPOSTS' => 'New Form Posts',
    'POSTREPLY' => 'Antwort schreiben',
    'SubscribeLink' => 'Abonnieren',
    'unSubscribeLink' => 'Abo beenden',
    'SubscribeLink_TRUE' => 'Abonnieren:Aktiviert',
    'SubscribeLink_FALSE' => 'Abonnieren:Behinderte',
    'SUBSCRIPTIONS' => 'Abonnements',
    'TOP' => 'Top of Post',
    'PRINTABLE' => 'Druckf�hige Version',
	'printed_subject' => 'Forum Subject: %s',
    'USERPREFS' => 'Forum-Einstellungen',
    'SPEEDLIMIT' => '"Your last comment was %s seconds ago.<br' . XHTML . '>This site requires at least %s seconds between forum posts."',
    'ACCESSERROR' => 'ACCESS ERROR',
    'ACTIONS' => 'Aktionen',
    'DELETEALL' => 'Alle ausgew�hlten Eintr�ge l�schen',
    'DELCONFIRM' => 'Bist Du sicher, dass Du die ausgew�hlten Eintr�ge l�schen willst?',
    'DELALLCONFIRM' => 'Bist Du sicher, dass Du ALLE ausgew�hlten Eintr�ge l�schen willst?',
	'DELCONFIRM_PARENT' => 'Are you sure you want to Delete this parent topic? It means that any replies it has will also be deleted.',
	'DELALLCONFIRM_PARENT' => 'Are you sure you want to Delete ALL selected records? If you have selected parent topics, then any replies to those topics will also be deleted. Parent Topics are the ones that show Views greater than 0.',
    'STARTEDBY' => 'Begonnen von ',
    'WARNING' => 'Warnung',
    'MODERATED' => 'Moderatoren: %s',
    'LASTREPLYBY' => 'Letzter Beitrag von:&nbsp;%s',
    'UID' => 'UID',
    'FORUMMENU' => 'Forum Menu',
    'INDEXPAGE' => 'Alle Foren',
    'FEATURE' => 'Feature',
    'SETTING' => 'Einstellung',
    'MARKALLREAD' => 'Als gelesen markieren',
    'MSG_NO_CAT' => 'No Categories or Forums Defined',
    'FORUMPOSTS' => 'Forum Posts',
	'MESSAGE' => 'Message',
	'HERE' => 'here',
    'CODE' => 'Code',
    'FONTCOLOR' => 'Schriftfarbe',
    'FONTSIZE' => 'Schriftgr��e',
    'CLOSETAGS' => 'Tags schlie�en',
    'CODETIP' => 'Tip: Styles can be applied quickly to selected text',
    'TINY' => 'Winzig',
    'SMALL' => 'Klein',
    'NORMAL' => 'Normal',
    'LARGE' => 'Gro�',
    'HUGE' => 'Riesig',
    'DEFAULT' => 'Standard',
    'DKRED' => 'Dunkelrot',
    'RED' => 'Rot',
    'ORANGE' => 'Orange',
    'BROWN' => 'Braun',
    'YELLOW' => 'Gelb',
    'GREEN' => 'Gr�n',
    'OLIVE' => 'Olive',
    'CYAN' => 'Cyan',
    'BLUE' => 'Blau',
    'DKBLUE' => 'Dunkelblau',
    'INDIGO' => 'Indigo',
    'VIOLET' => 'Lila',
    'WHITE' => 'Wei�',
    'BLACK' => 'Schwarz',
    'b_help' => 'Fettschrift: [b]text[/b]',
    'i_help' => 'Schr�g gestellt: [i]text[/i]',
    'u_help' => 'Unterstrichen: [u]text[/u]',
    'q_help' => 'Zitat: [quote]text[/quote]',
    'c_help' => 'Quelltext: [code]code[/code]',
    'l_help' => 'Liste: [list]text[/list]',
    'o_help' => 'Nummerierte Liste: [olist]text[/olist]',
    'p_help' => '[img]http://image_url[/img] oder [img w=100 h=200][/img]',
    'w_help' => 'URL: [url]http://url[/url] or [url=http://url]URL text[/url]',
    'a_help' => 'Alle offenen BBcode-Tags schlie�en',
    's_help' => 'Schriftfarbe: [color=red]text[/color]  Tipp: Du kannst auch color=#FF0000 benutzen',
    'f_help' => 'Schriftgr��e: [size=7]small text[/size]',
    'h_help' => 'Ausf�hrliche Hilfe'
);

$LANG_GF02 = array(
    'msg01' => 'Sorry you must register to use these forums',
    'msg02' => 'You should not be here!<br' . XHTML . '>Restricted access to this forum only',
    'msg03' => 'Please wait while you are redirected',
    'msg05' => '<center><em>Sorry, es wurden noch keine Themen erstellt.</center></em>',
    'msg07' => 'Wer ist online?',
    'msg14' => 'Sorry, Du wurdest vom Erstellen von Eintr�gen verbannt.<br' . XHTML . '>',
    'msg15' => 'Wenn Du glaubst das sei falsch, kontaktiere den <a href="mailto:%s?subject=G�stebuch IP-Bann">Site Admin</a>.',
    'msg18' => 'Fehler! Es wurden nicht alle ben�tigten Felder ausgef�llt oder die Eintr�ge waren zu kurz.',
    'msg19' => 'Dein Beitrag wurde ver�ffentlicht.',
    'msg22' => '- Neuer Beitrag im Forum',
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
    'msg33' => 'Autor: ',
    'msg36' => 'Stimmung:',
    'msg38' => 'Bei Antworten benachrichtigen ',
    'msg40' => '<br' . XHTML . '>Sorry, aber Du hast schon eingestellt, dass Dir Antworten auf dieses Thema mitgeteilt werden.<br' . XHTML . '><br' . XHTML . '>',
    'msg44' => '<p style="margin:0px; padding:5px;">Du hast keine Benachrichtigungen aktiviert.</p>',
    'msg49' => '(%s Mal gelesen) ',
    'msg55' => 'Beitrag gel�scht.',
    'msg56' => 'IP gebannet.',
	'msg57' => 'IP removed from being Banned.',
    'msg59' => 'Normales Thema',
    'msg60' => 'Neuer Beitrag',
    'msg61' => 'Wichtiges Thema',
    'msg62' => 'Benachrichtigung bei neuen Beitr�gen',
    'msg64' => 'Bist Du sicher, dass Du das Thema %s mit dem Title: %s l�schen willst?',
    'msg65' => '<br' . XHTML . '>Dies ist ein Grundsatzthema. Also werden alle Antworten, die hier gepostet werden, gel�scht.',
    'msg68' => 'Do you really want to remove the ban for the ip address: %s?',
    'msg69' => 'Bist Du wirklich sicher, dass Du die IP-Addresse %s bannen willst?',
    'msg71' => 'Keine Funktion gew�hlt. W�hle einen Eintrag und dann eine Moderatorfunktion.<br' . XHTML . '>Notiz: Du musst Moderator sein um diese Funktion zu �ndern.',
    'msg72' => 'Sobald diese Nachricht online ist hast Du keine Rechte mehr die Funktion der Moderation durchzuf�hren.',
    'msg74' => 'Die %s letzten Forumsbeitr',
    'msg75' => 'Top %s Themen nach Aufrufe',
    'msg76' => 'Top %s Themen nach Beitr�gen',
    'msg77' => '<br' . XHTML . '><p style="padding-left:10px;">You should not be here!<br' . XHTML . '>Restricted access to this forum only.</p>',
    'msg83' => '<br' . XHTML . '><br' . XHTML . '><p>You need to be signed in to use this forum feature.</p>',
    'msg84' => 'Alle Themen als gelesen markieren',
    'msg85' => 'Seite:',
    'msg86' => '&nbsp;Letzte %s Beitr�ge&nbsp;',
    'msg87' => '<br' . XHTML . '>Warning: This topic has been locked by the moderator.<br' . XHTML . '>No additional posts are permitted',
    'msg88' => 'Mitglieder',
    'msg88b' => 'Nur im Forum aktive Mitglieder',
    'msg89' => 'Meine Benachrichtigungen',
    'msg101' => 'Forumrichtlinien:',
    'msg103' => 'Zum Forum:',
    'msg106' => 'Forum w�hlen',
    'msg108' => 'Aktives Forum',
    'msg109' => 'Thema geschlossen',
    'msg110' => 'Transferring to message edit page..',
    'msg111' => 'Neue Beitr�ge seit Deinem letzten Besuch',
    'msg112' => 'Alle neuen Beitr�ge anzeigen',
    'msg113' => 'Neue Beitr�ge anzeigen',
    'msg114' => 'Thema geschlossen',
    'msg115' => 'Wichtiges Thema mit neuen Beitr�gen',
    'msg116' => 'Geschlossenes Thema mit neuen Beitr�gen',
    'msg117' => 'Suchen',
    'msg118' => 'Im Forum Suchen',
    'msg119' => 'Ergebnisse f�r die Suche nach:',
    'msg120' => 'Beliebteste Themen, sortiert nach',
    'msg121' => 'Zeitzone: %s. Es ist jetzt %s Uhr.',
    'msg122' => 'Beliebtheits-Limit',
    'msg123' => 'Anzahl Beitr�ge, ab denen ein Thema als beliebt gilt',
    'msg126' => 'Suchergebnisse',
    'msg127' => 'Anzahl Zeilen im Suchergebnis',
    'msg128' => 'Mitglieder pro Seite',
    'msg129' => 'F�r die Mitglieder-Liste',
    'msg130' => 'Beitr�ge von G�sten',
    'msg131' => 'Beitr�ge von nicht-angemeldeten Usern zeigen?',
    'msg132' => 'Immer benachrichtigen',
    'msg133' => 'Automatische Benachrichtigung f�r alle Themen, die ich beginne oder kommentiere?',
    'msg134' => 'Abonnement zugef�gt',
    'msg135' => 'Du wirst nun �ber alle Beitr�ge in diesem Forum benachrichtigt.',
    'msg136' => 'Du musst ein Forum w�hlen um es zu abonnieren.',
    'msg137' => 'Benachrichtigung f�r Thema aktiviert',
	'msg138a' => 'Listed below are all the forum topics you have subscribed to. This means for these subscriptions you will receive an email notification when someone replies to one of your subscribed topics.',
	'msg138b' => 'Listed below are all the forums you have subscribed to. This means for these subscriptions you will receive an email notification when a new topic is created in one of these forums, or someone replies to a topic. Please note that deleting a forum subscription will also delete any Topic Exception Notifications associated with the forum (but not any individual topic notifications).',
	'msg138c' => 'Listed below are all the topics that belong to the forum(s) you have subscribed to (see Forum Notifications), but you have unsubscribed from and chosen not to receive any more topic reply email notifications for.',
	'msg139a' => 'Listed below are all the forum topics the user you are viewing has subscribed to. This means for these subscriptions the user will receive an email notification when someone replies to one of their subscribed topics. If "All Users" are selected then the User column contains the name of the account the notification is for.',
	'msg139b' => 'Listed below are all the forums the user you are viewing has subscribed to. This means for these subscriptions the user will receive an email notification when a new topic is created in one of these forums, or someone replies to a topic. Please note that deleting a forum subscription will also delete any Topic Exception Notifications associated with the forum (but not any individual topic notifications).  If "All Users" are selected then the User column contains the name of the account the notification is for.',
	'msg139c' => 'Listed below are all the topics that belong to the forum(s) the user has subscribed to (see Forum Notifications), but they have unsubscribed from and chosen not to receive any more topic reply email notifications for. If "All Users" are selected then the User column contains the name of the account the notification is for.',
    'msg142' => 'Benachrichtigung gespeichert.',
    'msg144' => 'Zur�ck zum Thema',
    'msg146' => 'L�schung erfolgreich',
    'msg147' => 'Forum [druckbare Version des Themas %s]',
    'msg148' => '<a href="javascript:history.back()">Zur�ck.</a>',
	'msg149' => 'Forum post canceled.',
    'msg155' => 'Keine Forums-Beitr�ge.',
    'msg156' => 'Gesamtanzahl Forums-Beitr�ge',
    'msg157' => 'Die letzten 10 Forums-Beitr�ge',
    'msg158' => 'Die letzten 10 Forums-Beitr�ge von ',
    'msg159' => 'Are you sure you want to DELETE these selected Moderator records?',
    'msg160' => 'View last page of topic',
    'msg163' => 'Post moved',
    'msg164' => 'Mark all Categories and Topics Read',
    'msg166' => 'ERROR: Invalid topic or Topic not found',
    'msg167' => 'Notification Option',
    'msg168' => 'Setting of No will disable email notifictions',
    'msg169' => 'Return to Members listing',
    'msg170' => 'Aktuelle Themen im Forum',
    'msg171' => 'Forum Access Error',
    'msg172' => 'Topic does not exist. It possibly has been deleted',
    'msg173' => 'Transferring to Post Message page..',
    'msg174' => 'Unable to BAN Member - Invalid or Empty IP Address',
    'msg175' => 'Zur�ck zur Forum-�bersicht',
    'msg176' => 'Mitglied ausw�hlen',
    'msg177' => 'Alle Mitglieder',
    'msg178' => 'Nur die Start-Postings',
    'msg179' => 'Erzeugt in %s Sekunden',
    'msg180' => 'Forum Posting Alert',
    'msg181' => 'You don\'t have access to any other forum as a moderator',
    'msg182' => 'Moderator Confirmation',
    'msg183' => 'New topic was created from this post in forum: %s',
    'msg184' => 'Nur einmal benachrichtigen',
    'msg185' => 'Soll f�r neue Beitr�ge seit meinem letzten Besuch nur eine Benachrichtigung geschickt werden?',
    'msg186' => 'New Topic Title',
    'msg187' => 'Return to topic - click <a href="%s">here</a>',
    'msg188' => 'Zum letzten Beitrag springen',
    'msg189' => 'Error: You can not edit this post anymore',
    'msg190' => 'Stille �nderung',
	'msg190b' => 'When enabled and the forum post is saved, no notifications will be sent to users subscribed to this topic (or forum) about this update, and the forum post date will not be changed to the current date and time.',
    'msg191' => 'Edit not permitted. Allowable edit timeframe expired or you need moderator rights',
    'msg192' => 'Completed ... Migrated %s topics and %s comments.',
    'msg193' => 'STORY&nbsp;&nbsp;TO&nbsp;&nbsp;FORUM&nbsp;&nbsp;MIGRATION&nbsp;&nbsp;UTILITY',
    'msg194' => 'Wenig aktives Forum',
    'msg195' => 'Zum Forum springen',
    'msg196' => 'Zur Forum-�bersicht',
    'msg197' => 'Alle Themen als gelesen markieren',
    'msg198' => 'Forum-Einstellungen anpassen',
    'msg199' => 'Benachrichtigungs-E-Mails an- und abstellen',
    'msg200' => 'Liste aller User dieser Website',
    'msg201' => 'Liste der beliebtesten Forum-Themen',
	'popularforumtopics' => 'Popular Forum Topics',
	'poptopisby' => 'Popular Topics by %s',
	'by' => 'By',
	'replies' => 'Replies',
	'views' => 'Views',
	'forumsearchresults' => 'Forum Search Results',
	'forumsearchfor' => 'Forum Search results for "%s"',
    'msg202' => 'Keine neuen Beitr�ge',
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
    'quietforum' => 'Keine neuen Beitr�ge'
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
    'delete' => 'Beitrag l�schen',
    'edit' => 'Beitrag �ndern',
    'move' => 'Thema verschieben',
    'split' => 'Thema aufteilen',
	'banippost'         => 'Ban IP from Posting',
    'banippostremove'   => 'Remove Ban for IP from Posting',
    'banip'             => 'Ban IP from Site',
    'banipremove'       => 'Remove Ban for IP from Site',
    'banipmsg'      	=> 'IP has been banned from site',
    'banipremovemsg'	=> 'Ban has been removed for IP from Site',  
    'movetopic' => 'Thema verschieben',
    'movetopicmsg' => '<br' . XHTML . '>Topic to be moved: "<b>%s</b>"',
    'splittopicmsg' => '<br' . XHTML . '>Create a new Topic with this post: "<b>%s</b>"<br' . XHTML . '><em>By:</em>&nbsp;%s&nbsp <em>On:</em>&nbsp;%s',
    'selectforum' => 'Select new forum:',
    'lockedpost' => 'Add Reply Post',
    'splitheading' => 'Split thread option:',
    'splitopt1' => 'Move all posts from this point',
    'splitopt2' => 'Move only this one post'
);

$LANG_GF04 = array(
    'label_forum' => 'Forenprofil',
    'label_location' => 'Standort',
    'label_aim' => 'AIM Handhabe',
    'label_yim' => 'YIM Handhabe',
    'label_icq' => 'ICQ Identit�t',
    'label_msnm' => 'MS Messengername',
    'label_interests' => 'Interessen',
    'label_occupation' => 'Besch�ftigung'
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
    1 => 'Statistik',
    2 => 'Einstellungen',
    3 => 'Foren',
    4 => 'Moderatoren',
    5 => 'Konvertieren',
    6 => 'Beitr�ge',
	7 => 'Subscriptions',
    8 => 'IP-Verw.'
);

$LANG_GF07 = array(
    1 => 'View Forums',
    2 => 'Einstellungen',
    3 => 'Beliebte Themen',
    4 => 'Abonnements',
    5 => 'Mitglieder'
);

$LANG_GF08 = array(
    1 => 'Benachrichtigungen f�r Themen',
    2 => 'Benachrichtigungen f�r ganze Foren',
    3 => 'Ausnahmen'
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
    'gfstats' => 'Forumsstatistik',
    'statsmsg' => 'Hier ist die aktuelle Statistik f�r Dein Forum:',
    'totalcats' => 'Kategorien insgesamt:',
    'totalforums' => 'Foren gesamt:',
    'totaltopics' => 'Themen gesamt:',
    'totalposts' => 'Beitr�ge gesamt:',
    'totalviews' => 'Aufrufe gesamt:',
    'avgpmsg' => 'Durchschnittliche Beitr�ge pro:',
    'category' => 'Kategorie:',
    'forum' => 'Forum:',
    'topic' => 'Thema:',
    'avgvmsg' => 'Durchschnittliche Aufrufe pro:'
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
    'gfboard' => 'Discussion Forum Board Admin',
    'addcat' => 'F�ge eine Kategorie hinzu',
    'addforum' => 'F�ge ein Forum hinzu',
    'catorder' => 'Kategorienreihenfolge',
    'catadded' => 'Kategorie zugef�gt.',
    'catdeleted' => 'Kategorie gel�scht',
    'catedited' => 'Kategorie bearbeitet.',
    'forumadded' => 'Forum zugef�gt.',
    'forumaddError' => 'Error Adding Forum.',
    'forumdeleted' => 'Forum gel�scht',
    'forummerged' => 'Forum Merged',
    'forumnotmerged' => 'Forum cannot be merged since no other forums available to be merged with.',
    'forumedited' => 'Forum bearbeitet',
    'forumordered' => 'Forenreihenfolge bearbeitet',
    'back' => 'Zur�ck',
    'addnote' => 'Notiz: Du kannst dies sp�ter erneut �ndern.',
    'editforumnote' => '<br' . XHTML . '>Bearbeite Forumdetails f�r: <b>"%s"</b>',
    'deleteforumnote1' => 'M�chtest Du das Forum <b>"%s"</b>&nbsp;l�schen?',
    'deleteforumnote2' => 'Alle geposteten Themen unter diesem werden mitgel�scht.',
    'mergeforumnote1' => 'Merge the forum <b>"%s"</b> with?',
    'mergeforumnote2' => 'Forum to merge into:',
    'editcatnote' => '<br' . XHTML . '>Bearbeite Kategoriedetails f�r: <b>"%s"</b>',
    'deletecatnote1' => 'M�chtest Du die Kategorie <b>"%s"</b>&nbsp;l�schen?',
    'deletecatnote2' => 'Alle Foren und gepostete Themen dieser Kategorie werden ebenfalls gel�scht.',
    'undercat' => 'Unterkategorie',
    'groupaccess' => 'Gruppenzugriff: ',
    'action' => 'Aktionen',
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
    'mod_title' => 'Forummoderatoren',
    'allforums' => 'All Forums',
    'namerequired' => 'Name is required.',
	'resyncedmsg' => 'ReSynch and Clean completed for selected category or forum.<br><ul><li>%s topic posts re-synced.</li><li>%s orphan topic records (those without a parent topic) found and fixed.</li><li>%s orphan records found and cleaned from all other Forum tables.</li></ul>'
);

$LANG_GF95 = array(
    'header1' => 'Discussion Board Messages',
    'header2' => 'Discussion Board Messages for forum&nbsp;&raquo;&nbsp;%s',
    'notyet' => 'Eigenschaft ist noch nicht implementiert worden',
    'delall' => 'Alles l�schen',
    'delallmsg' => 'Bist Du sicher, dass Du alle Nachrichten von: %s l�schen willst?',
    'underforum' => '<b>Unterforum: %s (ID #%s)',
    'moderate' => 'Moderiert',
    'nomess' => 'Es wurden noch keine Nachrichten gepostet!'
);

$LANG_GF96 = array(
    'ip' => 'IP',
    'enterip' => 'Enter below an IP address to ban',
    'gfipman' => 'IP-Verwaltung',
    'ban' => 'Bann',
    'noips' => '<p style="margin:0px; padding:5px;">Es wurden noch keine IPs gebannt!</p>',
    'unban' => 'Entbannen',
    'ipbanned' => 'IP-Addresse gebannt',
    'banip' => 'Bann-IP Best�tigung',
    'banipmsg' => 'Bist Du sicher, dass Du die IP %s bannen willst?',
    'specip' => 'Bitte spezifiziere eine IP-Addresse zum bannen!',
    'ipunbanned' => 'IP-Address entbannt.',
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
    0 => array('Ja' => 1, 'Nein' => 0),
    1 => array('Ja' => true, 'Nein' => false),
    5 => array('Top Of Page' => 1, 'After Featured Story' => 2, 'Bottom Of Page' => 3),
    6 => array('Left Blocks' => 'leftblocks', 'Right Blocks' => 'rightblocks', 'All Blocks' => 'allblocks', 'No Blocks' => 'noblocks'),
    7 => array('Block Menu' => 'blockmenu', 'Navigation Bar' => 'navbar', 'None' => 'none'),
    12 => array('Kein Zugang' => 0, 'Nur lesen' => 2, 'Lesen-schreiben' => 3),
    13 => array('No access' => 0, 'Use' => 2),
    14 => array('No access' => 0, 'Read-Only' => 2),
    15 => array('All' => 'TOPIC_ALL_OPTION', 'Homepage Only' => 'TOPIC_HOMEONLY_OPTION', 'Select Topics' => 'TOPIC_SELECTED_OPTION'),
    16 => array('Disabled' => RECAPTCHA_NO_SUPPORT, 'reCAPTCHA V2' => RECAPTCHA_SUPPORT_V2, 'reCAPTCHA V2 Invisible' => RECAPTCHA_SUPPORT_V2_INVISIBLE),
    41 => array('False' => 0, 'Likes and Dislikes' => 1, 'Likes Only' => 2)
);

?>
