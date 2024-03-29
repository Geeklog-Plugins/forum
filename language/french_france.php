<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog Forums Plugin 2.9.0                                               |
// +---------------------------------------------------------------------------+
// | french_france.php                                                         |
// | Language defines for all text                                             |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2011 by the following authors:                              |
// |    Geeklog Community Members   geeklog-forum AT googlegroups DOT com      |
// |                                                                           |
// | Copyright (C) 2000,2001 by the following authors:                         |
// |    Tony Bibbs       tony AT tonybibbs DOT com                             |
// |                                                                           |
// | forum Plugin Authors                                                      |
// |    Mr.GxBlock                                        www.gxblock.com      |
// |    Matthew DeWyer   matt AT mycws DOT com            www.cweb.ws          |
// |    Blaine Lang      geeklog AT langfamily DOT ca     www.langfamily.ca    |
// |                                                                           |
// | Translation Author :                                                      |
// |    David Gaussinel  geeklog AT wipsa DOT net                              | 
// |    Ben              ben AT geeklog DOT fr                                 |
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
    'statslabel' => 'Total de contributions dans le forum',
    'statsheading1' => 'Les 10 sujets les plus lus du forum',
    'statsheading2' => 'Les 10 sujets du forum comportant le plus de r�ponses',
    'statsheading3' => 'Aucun sujet',
    'useradminmenu' => 'Pr�f�rences du forum',
    'access_denied' => 'Acc�s r�serv� aux membres',
    'autotag_desc_forum' => '[forum: id titre alternatif] - Affiche un lien vers un sujet du forum en utilisant le texte "ici" comme titre. Un titre alternatif peut �tre sp�cifi�.'
);

$LANG_GF01 = array(
    'FORUM' => 'Forum',
    'FORUMS' => 'Forums',
    'FORUMCATEGORYNAME' => '%s Forum Category',
    'FORUMNAME' => '%s Forum',
    'ALL' => 'Tous',
    'YES' => 'Oui',
    'NO' => 'Non',
    'NEW' => 'Nouveau',
    'NEXT' => 'Suivant',
    'ERROR' => 'Erreur!',
    'CONFIRM' => 'Confirmer',
    'UPDATE' => 'Mise � jour',
    'SAVE' => 'Sauver',
    'CANCEL' => 'Annuler',
    'ON' => 'Le ',
    'ON2' => '&nbsp;&nbsp;<b>On: </b>',
    'BY' => 'Par : ',
    'RE' => 'Re : ',
    'DATE' => 'Date',
    'VIEWS' => 'Vu',
    'REPLIES' => 'R�ponses',
    'NAME' => 'Nom :',
    'DESCRIPTION' => 'Description : ',
    'TOPIC' => 'Sujet',
    'TOPICS' => 'Sujets',
    'TOPICSUBJECT' => 'Contributions',
    'HOMEPAGE' => 'Accueil',
    'SUBJECT' => 'Sujet',
    'HELLO' => 'Bonjour ',
    'MOVED' => 'D�plac�',
    'POSTS' => 'Contributions',
    'LASTPOST' => 'Derni�re',
    'POSTEDON' => 'Post� le',
    'POSTEDBY' => 'Post� par',
    'PAGES' => 'Pages',
    'TODAY' => 'Aujourd\'hui � ',
    'REGISTERED' => 'Enregistr�',
    'ORDERBY' => 'Ordre:&nbsp;',
    'ORDER' => 'Ordre:',
    'USER' => 'Utilisateur',
    'GROUP' => 'Groupe',
    'ANON' => 'Anonyme: ',
    'ADMIN' => 'Admin',
    'AUTHOR' => 'Auteur',
    'NOMOOD' => 'Aucune humeur',
    'REQUIRED' => '[Requis]',
    'OPTIONAL' => '[Optionel]',
    'SUBMIT' => 'Poster',
    'PREVIEW' => 'Pr�visualiser',
    'REMOVE' => 'Enlever',
    'EDIT' => 'Editer',
    'DELETE' => 'Effacer',
    'MERGE' => 'Merge',
    'OPTIONS' => 'Options',
    'MISSINGSUBJECT' => 'Sujet vide',
    'MIGRATE_NOW' => 'Migrer maintenant',
    'FILTERLIST' => 'Filtrer la liste',
    'SELECTFORUM' => 'Choisir le forum',
    'DELETEAFTER' => 'Supprimer apr�s',
    'TITLE' => 'Titre',
    'COMMENTS' => 'Commentaires',
    'SUBMISSIONS' => 'Soumissions',
    'HTML_FILTER_MSG' => 'HTML filtr� permis',
    'HTML_FULL_MSG' => 'Tout HTML autoris�',
    'HTML_MSG' => 'HTML autoris�',
    'CENSOR_PERM_MSG' => 'Contr�le vocabulaire',
    'ANON_PERM_MSG' => 'Vous pouvez lire ce forum',
    'POST_PERM_MSG1' => 'Vous pouvez poster dans ce forum',
    'POST_PERM_MSG2' => 'Les anonymes peuvent dans ce forum',
    'GO' => 'Ok',
    'STATUS' => 'Status :',
    'ONLINE' => 'en ligne',
    'OFFLINE' => 'hors ligne',
    'back2parent' => 'Sujet Parent',
    'forumname' => '',
    'category' => 'Cat�gorie: ',
    'loginreqview' => '<B>Merci de vous %s inscrire</A> ou vous %s identifier</A> pour utiliser ce forum.</B>',
    'loginreqpost' => '<B>Merci de vous inscrire ou vous identifier pour utiliser ce forum. Vous allez �tre redirig�.</B>',
    'nolastpostmsg' => 'N/A',
    'no_one' => 'Aucun.',
    'back2top' => 'Retour en haut',
    'TEXTMODE' => 'Mode Texte',
    'HTMLMODE' => 'Mode HTML',
    'TopicPreview' => 'Pr�visualisation de la R�ponse',
    'moderator' => 'Moderateur',
    'admin' => 'Admin',
    'DATEADDED' => 'Ajout� le',
    'PREVTOPIC' => 'Sujet Pr�c�dent',
    'NEXTTOPIC' => 'Sujet Suivant',
    'RESYNC' => 'ReSynchroniser',
    'RESYNCCAT' => 'ReSynchroniser les cat�gories',
    'EDITICON' => '&nbsp;Editer&nbsp;',
    'QUOTEICON' => '&nbsp;Citer&nbsp;',
    'ProfileLink' => '&nbsp;Profile&nbsp;',
    'WebsiteLink' => '&nbsp;Site web&nbsp;',
    'PMLink' => '&nbsp;Envoyer un Message Priv�&nbsp;',
    'EmailLink' => '&nbsp;Email&nbsp;',
    'FORUMSUBSCRIBE' => 'Surveiller ce forum',
    'FORUMUNSUBSCRIBE' => 'Ne plus surveiller ce forum',
    'FORUMSUBSCRIBE_TRUE' => 'Souscription : Activ�e',
    'FORUMSUBSCRIBE_FALSE' => 'Souscription : D�sactiv�e',
    'NEWTOPIC' => 'Nouveau Sujet',
	'NEWPOSTS' => 'New Posts',
	'NEWFORUMPOSTS' => 'New Form Posts',
    'POSTREPLY' => 'R�pondre',
    'SubscribeLink' => 'Surveiller',
    'unSubscribeLink' => 'Ne plus souscrire � ce forum',
    'SubscribeLink_TRUE' => 'Souscription : Activ�e',
    'SubscribeLink_FALSE' => 'Souscription : D�sactiv�e',
    'SUBSCRIPTIONS' => 'Souscriptions',
    'TOP' => 'En haut',
    'PRINTABLE' => 'Version imprimante',
	'printed_subject' => 'Forum Subject: %s',
    'USERPREFS' => 'Pr�f�rences utilisateur',
    'SPEEDLIMIT' => '"Votre dernier message a �t� post� il y a %s secondes.<br' . XHTML . '>Pour des raisons de s�curit�, %s secondes sont n�cessaires entre chacune de vos publication."',
    'ACCESSERROR' => 'ACCESS ERROR',
    'ACTIONS' => 'Actions',
    'DELETEALL' => 'Supprimer tous les enregistrements s�lectionn�s',
    'DELCONFIRM' => 'Etes-vous s�re de vouloir supprimer les enregistrements s�lectionn�s ?',
    'DELALLCONFIRM' => 'Etes-vous s�re de vouloir supprimer TOUS les enregistrements s�lectionn�s ?',
	'DELCONFIRM_PARENT' => 'Are you sure you want to Delete this parent topic? It means that any replies it has will also be deleted.',
	'DELALLCONFIRM_PARENT' => 'Are you sure you want to Delete ALL selected records? If you have selected parent topics, then any replies to those topics will also be deleted. Parent Topics are the ones that show Views greater than 0.',
    'STARTEDBY' => 'Commenc� par',
    'WARNING' => 'Attention',
    'MODERATED' => 'Mod�rateurs: %s',
    'LASTREPLYBY' => 'Derni�re r�ponse par :&nbsp;%s',
    'UID' => 'UID',
    'FORUMMENU' => 'Forum Menu',
    'INDEXPAGE' => 'Index du forum',
    'FEATURE' => 'Fonction',
    'SETTING' => 'R�glage',
    'MARKALLREAD' => 'Marquer tout comme lu',
    'MSG_NO_CAT' => 'Aucune cat�gorie ou forum d�finis',
    'FORUMPOSTS' => 'Forum Posts',
	'MESSAGE' => 'Message',
	'HERE' => 'here',
    'CODE' => 'Code',
    'FONTCOLOR' => 'Couleur de police',
    'FONTSIZE' => 'Taille de police',
    'CLOSETAGS' => 'Fermer les balises',
    'CODETIP' => 'Astuce: Les styles peuvent �tre rapidement appliqu�s en s�lectionnant le texte',
    'TINY' => 'Tr�s petit',
    'SMALL' => 'Petit',
    'NORMAL' => 'Normal',
    'LARGE' => 'Grand',
    'HUGE' => 'Tr�s grand',
    'DEFAULT' => 'D�faut',
    'DKRED' => 'Rouge fonc�',
    'RED' => 'Rouge',
    'ORANGE' => 'Orange',
    'BROWN' => 'Marron',
    'YELLOW' => 'Jaune',
    'GREEN' => 'Vert',
    'OLIVE' => 'Olive',
    'CYAN' => 'Cyan',
    'BLUE' => 'Bleu',
    'DKBLUE' => 'Bleu fonc�',
    'INDIGO' => 'Indigo',
    'VIOLET' => 'Violet',
    'WHITE' => 'Blanc',
    'BLACK' => 'Noir',
    'b_help' => 'Gras : [b]texte[/b]',
    'i_help' => 'Italique : [i]texte[/i]',
    'u_help' => 'Soulign� : [u]texte[/u]',
    'q_help' => 'Citation : [quote]texte[/quote]',
    'c_help' => 'Code : [code]code[/code]',
    'l_help' => 'Liste : [list]texte[/list]',
    'o_help' => 'Liste ordonn�e : [olist]texte[/olist]',
    'p_help' => '[img]http://image_url[/img]  ou [img w=100 h=200][/img]',
    'w_help' => 'URL : [url]http://url[/url] ou [url=http://url]URL texte[/url]',
    'a_help' => 'Fermer tous les tags ouverts',
    's_help' => 'Couleur : [color=red]text[/color]  Astuce: Vous pouvez aussi utiliser color=#FF0000',
    'f_help' => 'Taille : [size=x-small]Petit texte[/size]',
    'h_help' => 'Cliquez pour plus d\'aide'
);

$LANG_GF02 = array(
    'msg01' => 'Vous devez vous connecter � l\'espace membre pour consulter les forum.',
    'msg02' => 'Ce forum est en acc�s restreint.',
    'msg03' => 'Merci de patienter, vous allez �tre redirig�.',
    'msg05' => '<CENTER><em>D�sol�, aucun sujet n\'a encore �t� post�.</em></CENTER>',
    'msg07' => 'Utilisateurs en ligne :',
    'msg14' => 'D�sol�, Vous avez �t� banni du forum.<br' . XHTML . '>',
    'msg15' => 'Si vous pensez que c\'est une erreur, contactez <A HREF="mailto:%s?subject=forum IP Ban">l\'administrateur</A>.',
    'msg18' => 'Erreur! Tous les champs requis n\'ont pas �t� remplis ou sont trop courts.',
    'msg19' => 'Votre message a �t� post�.',
    'msg22' => '- Notification de r�ponse au sujet',
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
    'msg33' => 'Auteur : ',
    'msg36' => 'Humeur',
    'msg38' => ' M\'avertir des r�ponses ',
    'msg40' => '<br' . XHTML . '>D�sol�, mais vous avez d�j� abonn� aux r�ponses de ce sujet.<br' . XHTML . '><br' . XHTML . '>',
    'msg44' => '<p style="margin:0px; padding:5px;">Vous ne surveillez aucun sujet actuellement.</p>',
    'msg49' => '(Lu %s fois) ',
    'msg55' => 'Contribution effac�e.',
    'msg56' => 'IP Bannie.',
	'msg57' => 'IP removed from being Banned.',
    'msg59' => 'Sujet Normal',
    'msg60' => 'Nouvelle Contribution',
    'msg61' => ' Sujet important',
    'msg62' => 'M\'avertir en cas de r�ponse',
    'msg64' => 'Etes vous s�r de vouloir effacer le sujet %s : %s ?',
    'msg65' => '<br' . XHTML . '>Ceci est un sujet parent, toutes les r�ponses post�es seront aussi effac�es.',
    'msg68' => 'Do you really want to remove the ban for the ip address: %s?',
    'msg69' => 'Voulez vous vraiment bannir l\'adresse IP : %s?',
    'msg71' => 'Aucune fonction s�lectionn�e, choisissez une contribution puis une fonction de mod�ration.<br' . XHTML . '>Note: Vous devez �tre mod�rateur pour utiliser ces fonctions.',
    'msg72' => 'Attention,  vous n\'avez pas le droit d\'utiliser cette fonction de mod�ration.',
    'msg74' => '%s Derni�res Contributions Post�es',
    'msg75' => 'Les %s sujets les plus affich�s',
    'msg76' => 'Les %s sujets avec le plus de r�ponses',
    'msg77' => '<br' . XHTML . '><p style="padding-left:10px;">Vous ne devriez pas �tre ici !<br' . XHTML . '>Acc�s restreint � ce forum seulement.<p />',
    'msg83' => '<br' . XHTML . '><br' . XHTML . '>Vous avez besoin d\'�tre authentifi� pour utiliser cette fonction du forum.<p />',
    'msg84' => 'Marquer tout comme lu',
    'msg85' => 'Page :',
    'msg86' => '10 derni�res contributions par : ',
    'msg87' => '<br' . XHTML . '>Avertissement : Ce sujet a �t� verrouill� par un mod�rateur.<br' . XHTML . '>Aucune nouvelle contribution n\'est possible.',
    'msg88' => 'Liste des membres',
    'msg88b' => 'Voir seulement les membres actifs dans le forum',
    'msg89' => 'Les sujets que je surveille',
    'msg101' => 'R�gles du forum :',
    'msg103' => 'Aller dans le forum :',
    'msg106' => 'Choisir un forum',
    'msg108' => 'Forum actif',
    'msg109' => ' Sujet Verrouill�',
    'msg110' => 'Transfert � la page d\'�dition...',
    'msg111' => 'Nouvelles contributions depuis votre derni�re visite :',
    'msg112' => 'Lire nouveaux messages',
    'msg113' => 'Nouveaux messages',
    'msg114' => 'Sujet clos',
    'msg115' => 'Nouveau sujet important',
    'msg116' => 'Nouveau sujet clos',
    'msg117' => 'Chercher dans tous les forums',
    'msg118' => 'Chercher dans ce forum',
    'msg119' => 'R�sultats de la recherche dans le forum pour la requ�te :',
    'msg120' => 'Sujets les plus populaires par ',
    'msg121' => 'Le fuseau horaire est %s. Il est maintenant %s.',
    'msg122' => 'Minimum Populaire :',
    'msg123' => 'Nombre de contributions d\'un sujet avant de l\'appeller populaire',
    'msg126' => 'Lignes de Recherche :',
    'msg127' => 'Nombre de lignes � afficher dans les r�sultats d\'une recherche',
    'msg128' => 'Membres par Page :',
    'msg129' => 'Nombre de membres � afficher dans la page listant les membres',
    'msg130' => 'Contributions Anonymes :',
    'msg131' => 'Configur� � Non va cacher les messages sans auteur',
    'msg132' => 'Surveillance :',
    'msg133' => 'Configur� � Oui va activer la surveillance automatique pour n\'importe quel sujet o� vous �crivez',
    'msg134' => 'Surveillance ajout�e',
    'msg135' => 'Vous serez averti de toutes les contributions de ce forum.',
    'msg136' => 'Vous devez choisir un forum � surveiller.',
    'msg137' => 'Surveillance pour le sujet activ�',
	'msg138a' => 'Listed below are all the forum topics you have subscribed to. This means for these subscriptions you will receive an email notification when someone replies to one of your subscribed topics.',
	'msg138b' => 'Listed below are all the forums you have subscribed to. This means for these subscriptions you will receive an email notification when a new topic is created in one of these forums, or someone replies to a topic. Please note that deleting a forum subscription will also delete any Topic Exception Notifications associated with the forum (but not any individual topic notifications).',
	'msg138c' => 'Listed below are all the topics that belong to the forum(s) you have subscribed to (see Forum Notifications), but you have unsubscribed from and chosen not to receive any more topic reply email notifications for.',
	'msg139a' => 'Listed below are all the forum topics the user you are viewing has subscribed to. This means for these subscriptions the user will receive an email notification when someone replies to one of their subscribed topics. If "All Users" are selected then the User column contains the name of the account the notification is for.',
	'msg139b' => 'Listed below are all the forums the user you are viewing has subscribed to. This means for these subscriptions the user will receive an email notification when a new topic is created in one of these forums, or someone replies to a topic. Please note that deleting a forum subscription will also delete any Topic Exception Notifications associated with the forum (but not any individual topic notifications).  If "All Users" are selected then the User column contains the name of the account the notification is for.',
	'msg139c' => 'Listed below are all the topics that belong to the forum(s) the user has subscribed to (see Forum Notifications), but they have unsubscribed from and chosen not to receive any more topic reply email notifications for. If "All Users" are selected then the User column contains the name of the account the notification is for.',
    'msg142' => 'Surveillance enregistr�e.',
    'msg144' => 'Retourner au sujet',
    'msg146' => 'Surveillance effac�',
    'msg147' => 'Forum [version imprimable du sujet %s]',
    'msg148' => '<br' . XHTML . '>Cliquez <a href="javascript:history.back()">ici</a> pour revenir � la page pr�c�dante.',
	'msg149' => 'Forum post canceled.',
    'msg155' => 'Aucune contribution de l\'utilisateur.',
    'msg156' => 'Nombre total de contributions :',
    'msg157' => '10 derni�res Contributions',
    'msg158' => 'les 10 derni�res contributions de ',
    'msg159' => 'Etes vous s�r de vouloir EFFACER les mod�rateurs s�lectionn�s ?',
    'msg160' => 'Voir la derni�re page du sujet',
    'msg163' => 'Contribution d�plac�e',
    'msg164' => 'Marquer toutes les cat�gories et sujets comme Lus',
    'msg166' => 'ERREUR: Sujet invalide ou sujet non trouv�',
    'msg167' => 'Surveillance',
    'msg168' => 'Configur� � Non pour ne plus recevoir d\'email de surveillance',
    'msg169' => 'Retour � la liste des membres',
    'msg170' => 'Derni�res contributions',
    'msg171' => 'Message - Acc�s au forum',
    'msg172' => 'Sujet inexistant. Il peut avoir �t� effac�.',
    'msg173' => 'Transfert � la page de r�daction des contributions...',
    'msg174' => 'Impossible de bannir le membre - Adresse IP non valide ou vide.',
    'msg175' => 'Retourner � la liste des forums',
    'msg176' => 'Choisir un membre',
    'msg177' => 'Tous les membres',
    'msg178' => 'Uniquement les contributions parentes',
    'msg179' => 'Contenu g�n�r� en %s seconde(s)',
    'msg180' => 'Alerte de publication du forum',
    'msg181' => 'Vous n\'avez acc�s � aucun autre forum en tant que comme mod�rateur',
    'msg182' => 'Confirmation du mod�rateur',
    'msg183' => 'Un nouveau sujet a �t� cr�� � partir de cette contribution dans le forum : %s',
    'msg184' => 'Notifier une fois seulement',
    'msg185' => 'Les notifications seront exp�di�es une seule fois pour les forums et les sujets qui recoivent plusieurs contributions depuis votre derni�re visite.',
    'msg186' => 'Nouveau titre',
    'msg187' => 'Retourner au sujet - Cliquez <a href="%s">ici</a>',
    'msg188' => 'Cliquer pour aller directement au dernier message',
    'msg189' => 'D�sol� vous ne pouvez plus �diter ce message',
    'msg190' => 'Edition silencieuse',
	'msg190b' => 'When enabled and the forum post is saved, no notifications will be sent to users subscribed to this topic (or forum) about this update, and the forum post date will not be changed to the current date and time.',
    'msg191' => 'L\'�dition n\'est plus possible. La dur�e pendant laquelle vous pouviez modifier votre message a expir�e.',
    'msg192' => 'Termin�... %s sujet(s) et %s commentaire(s) ont �t� cr��s.',
    'msg193' => 'Utilitaire de migration d\'article vers le forum',
    'msg194' => 'Forum au repos',
    'msg195' => 'Cliquer pour aller au forum',
    'msg196' => 'Voir l\'index principal du forum',
    'msg197' => 'Marquer tous les sujets comme lus',
    'msg198' => 'Mettre � jour vos pr�f�rences pour le forum',
    'msg199' => 'Voir ou supprimer les notifications du forum',
    'msg200' => 'Voir la liste des membres',
    'msg201' => 'Voir les sujets les plus populaires',
	'popularforumtopics' => 'Popular Forum Topics',
	'poptopisby' => 'Popular Topics by %s',
	'by' => 'By',
	'replies' => 'Replies',
	'views' => 'Views',
	'forumsearchresults' => 'Forum Search Results',
	'forumsearchfor' => 'Forum Search results for "%s"',
    'msg202' => 'Pas de nouvelles contributions',
	'msg203' => 'No posts found.',
    'msg300' => 'This Forum Post by an anonymous user has been blocked. To enable see your <a href="/forum/userprefs.php">Forum User Preferences</a>.',
	'msg301' 	=> 'Really mark all topics in all forums and categories read?',
	'msg301a' 	=> 'All topics in all forums and categories have now been marked as read.',
	'msg302' 	=> 'Really mark all topics read in this forum?',
	'msg302a' 	=> 'All topics in this forum have now been marked as read.',
	'msg303' 	=> 'Really mark all topics in all forums in this category read?',
	'msg303a' 	=> 'All topics in all forums from this category have now been marked as read.',
    'PostReply' => 'Poster une nouvelle r�ponse',
    'PostTopic' => 'Poster un nouveau sujet',
    'EditTopic' => 'Editer le sujet',
    'quietforum' => 'Le forum n{a pas de nouveau sujet.'
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
    'delete' => 'Effacer le message',
    'edit' => 'Editer le message',
    'move' => 'D�placer le message',
    'split' => 'Ceinder le sujet',
    'banippost'         => 'Ban IP from Posting',
    'banippostremove'   => 'Remove Ban for IP from Posting',
    'banip'             => 'Ban IP from Site',
    'banipremove'       => 'Remove Ban for IP from Site',
    'banipmsg'      	=> 'IP has been banned from site',
    'banipremovemsg'	=> 'Ban has been removed for IP from Site',  
    'movetopic' => 'D�placer et cr�er un nouveau fil',
    'movetopicmsg' => '<br' . XHTML . '>Sujet � d�placer : "<b>%s</b>"',
    'splittopicmsg' => '<br' . XHTML . '>Cr�er un nouveau sujet avec ce message: "<b>%s</b>"<br' . XHTML . '><em>De :</em>&nbsp;%s&nbsp <em>Le :</em>&nbsp;%s',
    'selectforum' => 'Choisir un nouveau forum :',
    'lockedpost' => 'Ajouter une r�ponse',
    'splitheading' => 'Option de scission du fil :',
    'splitopt1' => 'D�placer tous les messages � partir d\'ici',
    'splitopt2' => 'D�placer seulement ce message'
);

$LANG_GF04 = array(
    'label_forum' => 'Profile pour le forum',
    'label_location' => 'Localisation',
    'label_aim' => 'Pseudo AIM',
    'label_yim' => 'Pseudo Yahoo',
    'label_icq' => 'Num�ro ICQ',
    'label_msnm' => 'Adresse MS Messenger',
    'label_interests' => 'Loisirs',
    'label_occupation' => 'Emploi'
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
    1 => 'Statistiques',
    2 => 'Configuration',
    3 => 'Forums',
    4 => 'Mod�rateur',
    5 => 'Conversion',
    6 => 'Messages',
	7 => 'Subscriptions',
    8 => 'Gestion IP'
);

$LANG_GF07 = array(
    1 => 'Voir les forums',
    2 => 'Pr�f�rences',
    3 => 'Sujets les plus populaires',
    4 => 'Surveillance',
    5 => 'Membres'
);

$LANG_GF08 = array(
    1 => 'Surveillance des sujets',
    2 => 'Surveillance des forums',
    3 => 'Exception des notifications de sujet'
);

$LANG_GF09 = array(
    'edit' => 'Edit',
    'email' => 'Email',
    'home' => 'Accueil',
    'lastpost' => 'Dernier message',
    'pm' => 'PM',
    'profile' => 'Profil',
    'quote' => 'Citer',
    'website' => 'Website',
    'newtopic' => 'Nouveau',
    'replytopic' => 'R�pondre'
);

/* Block Locations */
$LANG_GF20 = array (
    'blocks_showtopic_name'     => 'Forum Show Topic',
    'blocks_showtopic_desc'     => 'Displays blocks right after every X number of topic posts.'
);

$LANG_GF91 = array(
    'gfstats' => 'Statistiques du forum',
    'statsmsg' => 'Statistiques du forum :',
    'totalcats' => 'Total Cat�gories :',
    'totalforums' => 'Total forums :',
    'totaltopics' => 'Total Sujets :',
    'totalposts' => 'Total Contributions :',
    'totalviews' => 'Total Affichages :',
    'avgpmsg' => 'Moyenne des contributions par :',
    'category' => 'Categorie :',
    'forum' => 'Forum :',
    'topic' => 'Sujet :',
    'avgvmsg' => 'Moyenne des affichages par :'
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
    'gfboard' => 'Administration du forum de Discussion',
    'addcat' => 'Ajout d\'une Cat�gorie de forum',
    'addforum' => 'Ajout d\'un forum',
    'catorder' => 'Ordre de cat�gorie',
    'catadded' => 'Cat�gorie ajout�e.',
    'catdeleted' => 'Cat�gorie effac�e.',
    'catedited' => 'Cat�gorie edit�e.',
    'forumadded' => 'Forum ajout�.',
    'forumaddError' => 'Erreur d\'ajout de forum.',
    'forumdeleted' => 'Forum effac�',
    'forummerged' => 'Forum Merged',
    'forumnotmerged' => 'Forum cannot be merged since no other forums available to be merged with.',
    'forumedited' => 'Forum Edited',
    'forumordered' => 'Forum Order Edited',
    'back' => 'Retour',
    'addnote' => 'Note : Vous pouvez �diter ces valeurs.',
    'editforumnote' => 'Edition des caract�ristiques du forum : <b>"%s"</b>',
    'deleteforumnote1' => 'Voulez-vous effacer le forum <b>"%s"</b>&nbsp;?',
    'deleteforumnote2' => 'Tous les sujets post�s en dessous vont �tre aussi effac�s.',
    'mergeforumnote1' => 'Merge the forum <b>"%s"</b> with?',
    'mergeforumnote2' => 'Forum to merge into:',
    'editcatnote' => 'Edition des caract�ristiques de la cat�gorie : <b>"%s"</b>',
    'deletecatnote1' => 'Voulez-vous effacer la cat�gorie <b>"%s"</b>&nbsp;?',
    'deletecatnote2' => 'Tous les forums et sujets post�s sous ce forum vont �tre aussi effac�s.',
    'undercat' => 'Sous Cat�gorie',
    'groupaccess' => 'Acc�s pour le Groupe : ',
    'action' => 'Actions',
    'forumdescription' => 'Description du forum',
    'posts' => 'Contributions',
    'ordertitle' => 'Ordre',
    'ModEdit' => 'Editer',
    'ModMove' => 'D�placer',
    'ModStick' => 'Post-it',
    'ModBan' => 'Bannir',
    'addmoderator' => 'Ajouter un mod�rateur',
    'delmoderator' => 'Effacer la s�lection',
    'moderatorwarning' => '<b>Attention: Aucun forum n\'est d�fini</b><br' . XHTML . '><br' . XHTML . '>Configurez les cat�gories du forum et ajoutez au moins 1 forum<br' . XHTML . '>avant d\'essayer d\'ajouter des mod�rateurs',
    'private' => 'Forum priv�',
    'filtertitle' => 'Selectionner les mod�rateurs enregistr�s � afficher',
    'addmessage' => 'Ajouter un  nouveau mod�rateur',
    'allowedfunctions' => 'Fonctions permises',
    'userrecords' => 'Utilisateurs',
    'grouprecords' => 'Groupes',
    'filterview' => 'Filtrer l\'affichage',
    'readonly' => 'Forum en lecture seule',
    'readonlydscp' => 'Uniquement les mod�rateurs peuvent contribuer dans ce forum',
    'hidden' => 'Forum cach�',
    'hiddendscp' => 'Le forum n\'apparait pas � l\'index des forums',
    'hideposts' => 'Cacher les nouvelles cobntributions',
    'hidepostsdscp' => 'Les mises � jour ne seront pas montr�es dans le bloc des nouvelles contributions ou dans le flux RSS',
    'mod_title' => 'Mod�rateurs du forum',
    'allforums' => 'Tous les forums',
    'namerequired' => 'Name is required.',
	'resyncedmsg' => 'ReSynch and Clean completed for selected category or forum.<br><ul><li>%s topic posts re-synced.</li><li>%s orphan topic records (those without a parent topic) found and fixed.</li><li>%s orphan records found and cleaned from all other Forum tables.</li></ul>'
);

$LANG_GF95 = array(
    'header1' => 'Messages du forum',
    'header2' => 'Messages du forum pour le forum&nbsp;&raquo;&nbsp;%s',
    'notyet' => 'Fonction non encore impl�ment�e.',
    'delall' => 'Effacer Tout',
    'delallmsg' => 'Etes vous s�r de vouloir effacer tous les messages de : %s?',
    'underforum' => '<b>Sous forum: %s (ID #%s)',
    'moderate' => 'Mod�rer',
    'nomess' => 'Il n\'y a encore aucun message post� ! '
);

$LANG_GF96 = array(
    'ip' => 'IP',
    'enterip' => 'Saisir ci-dessous l\'IP a bannir',
    'gfipman' => 'Gestion IP',
    'ban' => 'Bannir',
    'noips' => '<p style="margin:0px; padding:5px;">Aucune adresse IP n\'a encore �t� bannie !</p>',
    'unban' => 'D�-Bannir',
    'ipbanned' => 'Adresse IP bannies',
    'banip' => 'Confirmation de Bannissement de l\'IP',
    'banipmsg' => 'Etes-vous s�re de vouloir bannir l\'adresse ip %s?',
    'specip' => 'Veuillez sp�cifier une adresse IP � bannir !',
    'ipunbanned' => 'Adresse IP n\'est plus bannie.',
    'noip' => 'Vous n\'avez pas fourni une adresse IP !'
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
$PLG_forum_MESSAGE1 = 'Mise � niveau du plugin forum : Mise � jour r�ussie.';
$PLG_forum_MESSAGE2 = 'Mise � niveau du plugin forum : Impossible de mettre � jour automatiquement cette version. Merci de vous r�f�rer � la documentation.';
$PLG_forum_MESSAGE5 = 'La mise � niveau du plugin forum a �chou�e - Consultez le fichier error.log';

// Messages for the plugin upgrade
$PLG_forum_MESSAGE3001 = '';
$PLG_forum_MESSAGE3002 = $LANG32[9];

// Localization of the Admin Configuration UI
$LANG_configsections['forum'] = array(
    'label' => 'Forum',
    'title' => 'Configuration du forum'
);

$LANG_confignames['forum'] = array(
    'registration_required' => 'Connexion n�cessaire pour voir les contributions ?',
    'registered_to_post' => 'Connexion n�cessaire pour contribuer ?',
    'allow_notification' => 'Permettre les notifications ?',
    'show_topicreview' => 'Montrer les messages pr�c�dants lors de la r�daction d\'une r�ponse ?',
    'allow_user_dateformat' => 'Permettre � l\'utilisateur de d�finir le format de la date ?',
    'use_pm_plugin' => 'Utiliser le plugin Private Message ?',
    'show_topics_perpage' => 'Nombre de sujets par page',
    'show_posts_perpage' => 'Nombre de contributions par page',
    'show_messages_perpage' => 'Nombre de lignes d\'un message par page',
    'show_searches_perpage' => 'Nombre de r�sultats de la recherche par page',
    'showblocks' => 'Colonne des blocs � montrer dans le forum',
    'usermenu' => 'Type du menu utilisateur',
    'likes_forum' => 'Forum Likes',
    'recaptcha' => 'reCAPTCHA',
    'show_subject_length' => 'Longueur maximale du sujet',
    'min_username_length' => 'Longueur minimale du nom d\'utiliateur',
    'min_subject_length' => 'Longueur minimale du sujet',
    'min_comment_length' => 'Longueur minimale de la contribution',
    'views_tobe_popular' => 'Nombre de vues pour �tre populaire',
    'post_speedlimit' => 'Limitation entre chaque contribution en secondes',
    'allowed_editwindow' => 'Permission de modification des contributions en secondes',
    'allow_html' => 'Permettre le mode HTML ?',
    'post_htmlmode' => 'D�finir le mode HTML par d�faut ?',
    'convert_break' => 'Convertir les sauts � la ligne par une balise HTML &lt;BR&gt;?',
    'use_censor' => 'Utiliser le mode censure du CMS Geeklog ?',
    'use_glfilter' => 'Utiliser le mode filtre du CMS Geeklog ?',
    'use_geshi' => 'Utiliser la colorisation synthaxique Geshi du Code ?',
    'use_spamx_filter' => 'Utiliser le plugin Spam-X ?',
    'show_moods' => 'Activer les humeurs (Moods) ?',
    'allow_smilies' => 'Activer les Smilies?',
    'use_smilies_plugin' => 'Utiliser le plugin Smilies ?',
    'avatar_width' => 'Largeur de l\'avatar',
    'show_centerblock' => 'Activer le bloc central (Centerblock) ?',
    'centerblock_homepage' => 'Activer sur la page d\'accueil seulement ?',
    'centerblock_numposts' => 'Nombre de contribution � afficher dans le bloc central',
    'cb_subject_size' => 'Longueur maximale des sujets',
    'centerblock_where' => 'Placement du bloc central sur la page',
    'sideblock_numposts' => 'Nombre de contributions � afficher',
    'sb_subject_size' => 'Longueur lmaximale des sujets',
    'sb_latestpostonly' => 'Afficher uniquement les derni�res contributions ?',
    'sideblock_enable' => 'Enabled',
    'sideblock_isleft' => 'Display Block on Left',
    'sideblock_order' => 'Block Order',
    'sideblock_topic_option' => 'Topic Options',
    'sideblock_topic' => 'Topic',
    'sideblock_group_id' => 'Group',
    'sideblock_permissions' => 'Permissions',
    'level1' => 'Nombre de contribution niveau 1',
    'level2' => 'Nombre de contribution niveau 2',
    'level3' => 'Nombre de contribution niveau 3',
    'level4' => 'Nombre de contribution niveau 4',
    'level5' => 'Nombre de contribution niveau 5',
    'level1name' => 'Nom du niveau 1',
    'level2name' => 'Nom du niveau 2',
    'level3name' => 'Nom du niveau 3',
    'level4name' => 'Nom du niveau 4',
    'level5name' => 'Nom du niveau 5',
    'menublock_enable' => 'Enabled',
    'menublock_isleft' => 'Display Block on Left',
    'menublock_order' => 'Block Order',
    'menublock_topic_option' => 'Topic Options',
    'menublock_topic' => 'Topic',
    'menublock_group_id' => 'Group',
    'menublock_permissions' => 'Permissions'
);

$LANG_configsubgroups['forum'] = array(
    'sg_main' => 'Param�tres principaux'
);

$LANG_tab['forum'] = array(
    'tab_main' => 'Param�tres g�n�raux du forum',
    'tab_topicposting' => 'Publier une contribution',
    'tab_centerblock' => 'Le bloc central',
    'tab_sideblock' => 'Les barres lat�rales',
    'tab_rank' => 'Les niveaux',
    'tab_menublock' => 'Menu Block'
);

$LANG_fs['forum'] = array(
    'fs_main' => 'Param�tres g�n�raux du forum',
    'fs_topicposting' => 'Publier une contribution',
    'fs_centerblock' => 'Le bloc central',
    'fs_sideblock' => 'Les barres lat�rales',
    'fs_sideblock_settings' => 'Block Settings',
    'fs_sideblock_permissions' => 'Block Permissions',
    'fs_rank' => 'Les niveaux',
    'fs_menublock' => 'Menu Block',
    'fs_menublock_settings' => 'Block Settings',
    'fs_menublock_permissions' => 'Block Permissions'
);

// Note: entries 0, 1, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['forum'] = array(
    0 => array('Oui' => 1, 'Non' => 0),
    1 => array('Oui' => true, 'Non' => false),
    5 => array('En haut de la page' => 1, 'Apr�s l \'article en vedette' => 2, 'En bas de la page' => 3),
    6 => array('Blocs de gauche' => 'leftblocks', 'Blocs de droite' => 'rightblocks', 'Tous les blocs' => 'allblocks', 'Aucun bloc' => 'noblocks'),
    7 => array('Menu dans un bloc' => 'blockmenu', 'Barre de navigation' => 'navbar', 'Aucun' => 'none'),
    12 => array('Pas d\'acc�s' => 0, 'Lecture-Seule' => 2, 'Lecture-Ecriture' => 3),
    13 => array('No access' => 0, 'Use' => 2),
    14 => array('No access' => 0, 'Read-Only' => 2),
    15 => array('All' => 'TOPIC_ALL_OPTION', 'Homepage Only' => 'TOPIC_HOMEONLY_OPTION', 'Select Topics' => 'TOPIC_SELECTED_OPTION'),
    16 => array('Disabled' => RECAPTCHA_NO_SUPPORT, 'reCAPTCHA V2' => RECAPTCHA_SUPPORT_V2, 'reCAPTCHA V2 Invisible' => RECAPTCHA_SUPPORT_V2_INVISIBLE),
    41 => array('False' => 0, 'Likes and Dislikes' => 1, 'Likes Only' => 2)
);

?>
