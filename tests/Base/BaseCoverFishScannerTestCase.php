<?php

namespace DF\PHPCoverFish\Tests\Base;

use DF\PHPCoverFish\Common\CoverFishHelper;

/**
 * Class BaseCoverFishScannerTestCase
 *
 * @package   DF\PHPCoverFish
 * @author    Patrick Paechnatz <patrick.paechnatz@gmail.com>
 * @copyright 2015 Patrick Paechnatz <patrick.paechnatz@gmail.com>
 * @license   http://www.opensource.org/licenses/MIT
 * @link      http://github.com/dunkelfrosch/phpcoverfish/tree
 * @since     class available since Release 0.9.0
 * @version   0.9.4
 */
class BaseCoverFishScannerTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CoverFishHelper
     */
    protected $coverFishHelper;

    /**
     * @return CoverFishHelper
     */
    public function getCoverFishHelper()
    {
        $this->coverFishHelper = new CoverFishHelper();

        return $this->coverFishHelper;
    }

    /**
     * @param string      $testSource
     * @param string|null $excludePath
     *
     * @return array
     */
    public function getDefaultCLIOptions($testSource, $excludePath = null)
    {
        return array(
            'sys_scan_source' => $testSource,
            'sys_exclude_path' => $excludePath,
            'sys_debug' => false,
            'sys_stop_on_error' => false,
            'sys_stop_on_failure' => false,
            'sys_warning_threshold' => 99,
        );
    }

    /**
     * @return array
     */
    public function getDefaultOutputOptions()
    {
        return array(
            'out_verbose' => false,
            'out_format' => 'json',
            'out_level' => 1,
            'out_no_ansi' => true,
            'out_no_echo' => true,
        );
    }

    /**
     * @param array $files
     *
     * @return bool
     */
    public function validateTestsDataSrcFixturePathContent($files)
    {
        $fileNames = array();
        /** @var string $file */
        foreach ($files as $file) {
            $fileNames[] = $this->getCoverFishHelper()->getFileNameFromPath($file);
        }

        return in_array('SampleClass.php', $fileNames)
        && in_array('SampleClassNoNotPublicMethods.php', $fileNames)
        && in_array('SampleClassNoPrivateMethods.php', $fileNames)
        && in_array('SampleClassNoProtectedMethods.php', $fileNames)
        && in_array('SampleClassNoPublicMethods.php', $fileNames)
        && in_array('SampleClassOnlyPrivateMethods.php', $fileNames)
        && in_array('SampleClassOnlyProtectedMethods.php', $fileNames)
        && in_array('SampleClassOnlyPublicMethods.php', $fileNames);
    }
}