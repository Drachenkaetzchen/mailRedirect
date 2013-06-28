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

class mailRedirect extends mailRedirect_parent {

    /**
     * Replaces the recipient with an overriden mail
     * @return bool
     */
    public function send() {
        $myconfig = oxRegistry::get("oxConfig");
        $target = $myconfig->getConfigParam("overrideMailAddress");

        $aRecipients = $this->getRecipient();
        $this->clearAllRecipients();

        $this->setRecipient($target, $this->buildEncodedToLine($aRecipients));
        $retVal = parent::send();

        // Restore the recipients. This module works as transparent as possible
        $this->_aRecipient = $aRecipients;

        return $retVal;
    }

    /**
     * This method takes a list of recipients and builds an encoded To: line out of it.
     *
     * If your original recipient was Joe Average <joe@average.com> and your redirect mail is foo@example.com, the
     * final To: line would look like this:
     *
     * Joe Average [joe@average.com] <foo@example.com>.
     *
     *
     */
    protected function buildEncodedToLine ($recipients) {
        $aRecipientList = array();

        foreach ($recipients as $recipient) {
            $aRecipientList[] = $recipient[1] . ' [' . $recipient[0] . ']';
        }

        return implode(" ", $aRecipientList);
    }
}