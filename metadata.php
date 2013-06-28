<?php
/**
 * mailRedirect
 * Copyright (C) 2013  Timo A. Hummel <felicitus+oxidmailredirect@felicitus.org>
 *
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
 *
 * Version:    1.0
 * Author:     Timo A. Hummel <felicitus+oxidmailredirect@felicitus.org>
 */

$sMetadataVersion = '1.1';

$donatePayPal = <<<EOD
<div style="display:block;">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="3R6RW2TQRW2C4">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
EOD;

$donateFlattr = <<<EOD
<div style="display:block;">
<script id='flattrbtn'>(function(i){var f,s=document.getElementById(i);f=document.createElement('iframe');f.src='//api.flattr.com/button/view/?uid=_felicitus&button=compact&url='+encodeURIComponent(document.URL);f.title='Flattr';f.height=20;f.width=110;f.style.borderWidth=0;s.parentNode.insertBefore(f,s);})('flattrbtn');</script>
</div>
EOD;

$foo = $donateFlattr . $donatePayPal;

/**
 * Module information
 */
$aModule = array(
    'id'            => 'mailRedirect',
    'title'         => 'Mail Address Redirector',
    'description'  => array(
        'de' => 'Dieses Modul ersetzt den Mailempfänger für sämtliche Mails, sodaß die Entwicklung und der Test von Mails einfacher wird. Die Konfiguration des Empfängers wird in den Moduleinstellungen vorgenommen.' .  $donateButtons,
        'en' => 'This module replaces the mail recipient for all mails, so that module development gets easier. Configure the target mail address in the module settings.' .  $donateButtons,
    ),
    'version'       => '1.0',
    'author'        => 'Felicitus',
    'extend'        => array(
        'oxemail' => 'mailRedirect/mailRedirect',
    ),
    'settings' => array(
        array('group' => 'main', 'name' => 'overrideMailAddress', 'type' => 'str',  'value' => ''),
    )

);