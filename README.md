mailRedirect
===========

This module redirects all mail to a specific mail address. Existing recipients are encoded in the To: field, so that
you can find out to where the original mail should have been sent to.

This module is most useful on development or test systems where nobody but you should receive all mails sent by the
system. This is incredibly useful to develop new mail templates.

If you find this plugin useful, please donate via PayPal or flattr.

##REQUIREMENTS

* OXID 4.7.x

##INSTALLATION
copy the content of the "**copy_this**" folder into the shop root directory
**if you are uploading files via ftp, switch to the binary transfer mode**

### if you have access to the shell and a git client
navigate into the modules/ directory and:
<pre>git clone git://github.com/felicitus/mailRedirect.git</pre>


##LICENSE
vt-devutils Module for OXID eShop 4.7
Copyright (C) 2013 Timo A. Hummel

This program is free software;
you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>

