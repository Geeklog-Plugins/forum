<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog Forums Plugin 2.9.0                                               |
// +---------------------------------------------------------------------------+
// | ForumSmilies.class.php                                                    |
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

/**
 * Functionality for native forum smilies
 *
 * @package GeeklogForum-Smilies
 */

// This file can't be used on its own
if (stripos($_SERVER['PHP_SELF'], basename(__FILE__)) !== false) {
    die('This file can not be used on its own.');
}

/**
 * This class handles the native forum smilies and is used to
 * generate the CSS code required for the smilies, show the
 * list of smilies when posting a topic, converting symbols
 * from the posts to corresponding images and vice-versa.
 */
class ForumSmilies
{
    /**
     * This array defines each smilie. The 'symbol' is the text that will
     * be converted to the corresponding image in the forum posts.
     * The 'offset' is the number of pixels to scroll down in the smilies.png
     * sprite until arriving to the top side of the smilie in question.
     *
     * The order in which the array is sorted will determine in which order
     * the smilies will appear in the list of smilies when posting a topic.
     */
    private $data = [
        'biggrin'  => ['symbol' => ':D',         'offset' => 208],
        'smile'    => ['symbol' => ':)',         'offset' => 192],
        'frown'    => ['symbol' => ':(',         'offset' => 112],
        'eek'      => ['symbol' => '8O',         'offset' => 272],
        'confused' => ['symbol' => ':?',         'offset' => 224],
        'cool'     => ['symbol' => 'B)',         'offset' =>  48],
        'lol'      => ['symbol' => ':lol:',      'offset' => 352],
        'angry'    => ['symbol' => ':x',         'offset' => 384],
        'razz'     => ['symbol' => ':P',         'offset' => 320],
        'oops'     => ['symbol' => ':oops:',     'offset' => 144],
        'surprise' => ['symbol' => ':o',         'offset' => 176],
        'cry'      => ['symbol' => ':cry:',      'offset' => 288],
        'evil'     => ['symbol' => ':evil:',     'offset' => 368],
        'twisted'  => ['symbol' => ':twisted:',  'offset' => 400],
        'rolleye'  => ['symbol' => ':roll:',     'offset' => 240],
        'wink'     => ['symbol' => ';)',         'offset' => 160],
        'exclaim'  => ['symbol' => ':!:',        'offset' =>  64],
        'question' => ['symbol' => ':question:', 'offset' =>  96],
        'idea'     => ['symbol' => ':idea:',     'offset' => 256],
        'arrow'    => ['symbol' => ':arrow:',    'offset' =>  80],
        'neutral'  => ['symbol' => ':|',         'offset' => 128],
        'green'    => ['symbol' => ':mrgreen:',  'offset' =>   0],
        'sick'     => ['symbol' => ':sick:',     'offset' =>  16],
        'tired'    => ['symbol' => ':tired:',    'offset' => 304],
        'monkey'   => ['symbol' => ':monkey:',   'offset' =>  32]
    ];

    /**
     * This function returns the HTML code for displaying
     * the list of available smilies when posting a topic
     */
    public function show()
    {
        global $CONF_FORUM, $LANG_GF_SMILIES;

        // Check and see if glMessenger is installed
        if ($CONF_FORUM['use_smilies_plugin']
            && function_exists('msg_showsmilies')
        ) {
            return msg_showsmilies();
        } else {
            // Use native smilies
            $image   =  gf_getImage('pixel');
            $retval  = "\n<!-- LIST OF SMILIES START -->\n";
            $retval .= "<div id='forum_smilies'>\n";
            foreach ($this->data as $key => $value) {
                // each smilie defined in the $this->data array
                $symbol  = $value['symbol'];
                $class   = 'frm_sml_' . $key;
                $alt     = '';
                if (isset($LANG_GF_SMILIES[$key])) {
                    $alt = htmlentities($LANG_GF_SMILIES[$key], ENT_QUOTES);
                }
                $retval .= "    <a href=\"#\" onclick=\"emoticon('$symbol');return false;\">\n";
                $retval .= "        <img class='frm_sml $class'\n";
                $retval .= "             src='$image'\n";
                $retval .= "             alt='$alt'\n";
                $retval .= "             title='$alt'" . XHTML . ">\n";
                $retval .= "    </a>\n";
            }
            $retval .= "</div>\n";
            $retval .= "<!-- LIST OF SMILIES END -->\n";
        }

        return $retval;
    }

    /**
     * This function will replace the symbols in a forum post
     * with corresponding smilie images or the other way around.
     */
    public function replace($message, $reverse = false)
    {
        global $LANG_GF_SMILIES;

        $search    = []; // list of smilie symbols
        $replace   = []; // list of IMG tags
        // The replacement values will be created by filling
        // in the values in this template variable
        $template  = '<img class="frm_sml frm_sml_%s" src="';
        $template .= gf_getImage('pixel');
        $template .= '" alt="%s" title="%s"' . XHTML . '>';
        foreach ($this->data as $key => $value) {
            // each smilie defined in the $this->data array
            $search[] = $value['symbol'];
            $alt = '';
            if (isset($LANG_GF_SMILIES[$key])) {
                $alt = htmlentities($LANG_GF_SMILIES[$key], ENT_QUOTES);
            }
            $replace[] = sprintf($template, $key, $alt, $alt);
        }
        // Do the actual replacement in the input string
        if (! $reverse) {
            $message = str_replace($search, $replace, $message);
        } else {
            $message = str_replace($replace, $search, $message);
        }

        return $message;
    }
}
