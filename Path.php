<?php

/**
 * @package Flextype Components
 *
 * @author Nor Aziz <tonoraziz@gmail.com>
 * @link http://components.flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype\Component\Path;

use Flextype\Component\Registry\Registry;
use Flextype\Component\Http\Http;

class Path
{
    
    /**
     * Get Theme Path
     *
     * $action = Path::theme_path('folder', 'file');
     *
     * @param string $folder_name
	 * @param string $file_name
     * @param mixed
     */
    public static function theme_path(string $folder_name, string $file_name) : string
    {
        return Http::getBaseUrl() . '/site/themes/' . Registry::get('settings.theme') . '/assets/' . $file_name;
    }
	
	public static function test(string $folder_name, string $file_name) : string
	{
		return 'hai';
	}

}
