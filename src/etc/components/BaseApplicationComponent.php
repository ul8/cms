<?php
namespace Craft;

/**
 * Class BaseApplicationComponent
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2014, Pixel & Tonic, Inc.
 * @license   http://buildwithcraft.com/license Craft License Agreement
 * @link      http://buildwithcraft.com
 * @package   craft.app.etc.components
 * @since     1.0
 */
class BaseApplicationComponent extends \CApplicationComponent
{
	/**
	 * Checks if this application component has been initialized yet, or not.
	 *
	 * Craft is overriding this for consistency.
	 *
     * @return boolean Whether this application component has been initialized (i.e., {@link init()} has been invoked).
	 */
	public function isInitialized()
	{
		return $this->getIsInitialized();
	}
}
