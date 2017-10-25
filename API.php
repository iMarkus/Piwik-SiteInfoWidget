<?php
/**
* Piwik - free/libre analytics platform
*
* @link http://piwik.org
* @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
*
*/
namespace Piwik\Plugins\SiteInfoWidget;

class API extends \Piwik\Plugin\API
{
    /**
     * Get Plugin Info
     * @return array
     */
    public function getPluginInfo()
    {
        $json = file_get_contents(__DIR__.'/plugin.json');
        $json_a = json_decode($json, true);
        return $json_a;
    }
}