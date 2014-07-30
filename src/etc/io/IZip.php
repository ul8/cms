<?php
namespace Craft;

/**
 * Interface IZip
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2014, Pixel & Tonic, Inc.
 * @license   http://buildwithcraft.com/license Craft License Agreement
 * @link      http://buildwithcraft.com
 * @package   craft.app.etc.io
 * @since     1.0
 */
interface IZip
{
	/**
	 * @param $sourceFolder
	 * @param $destZip
	 *
	 * @return mixed
	 */
	function zip($sourceFolder, $destZip);

	/**
	 * @param $sourceZip
	 * @param $destFolder
	 *
	 * @return mixed
	 */
	function unzip($sourceZip, $destFolder);

	/**
	 * @param      $sourceZip
	 * @param      $filePath
	 * @param      $basePath
	 * @param null $pathPrefix
	 *
	 * @return mixed
	 */
	function add($sourceZip, $filePath, $basePath, $pathPrefix = null);
}
