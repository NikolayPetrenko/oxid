<?php

/**
 *    This file is part of OXID eShop Community Edition.
 *
 *    OXID eShop Community Edition is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    OXID eShop Community Edition is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @package   views
 * @copyright (C) OXID eSales AG 2003-2013
 * @version OXID eShop CE
 * @version   SVN: $Id: oxwminibasket.php 47624 2012-07-23 07:54:44Z vaidas.matulevicius $
 */

/**
 * Cookie note widget
 */
class oxwCookieNote extends oxWidget
{

    /**
     * Current class template name.
     * @var string
     */
    protected $_sThisTemplate = 'widget/header/cookienote.tpl';

    /**
     * Executes parent::render(). Check if need to hide cookie note.
     * Returns name of template file to render.
     *
     * @return  string  cuurent template file name
     */
    public function render()
    {
        parent::render();
        return $this->_sThisTemplate;
    }

    /**
     * Return if cookie notification is enabled by config.
     *
     * @return boolean
     */
    function isEnabled()
    {
        if ( $this->getConfig()->getConfigParam( 'blShowCookiesNotification' ) ) {
            return true;
        }

        return false;
    }
}
