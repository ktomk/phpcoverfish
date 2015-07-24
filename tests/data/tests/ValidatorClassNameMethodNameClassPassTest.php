<?php

namespace DF\PHPCoverFish\Tests\Data\Tests;

use DF\PHPCoverFish\Tests\Data\Src\SampleClass;

/**
 * Class ValidatorClassNameMethodNameClassPassTest
 *
 * @package   DF\PHP\CoverFish
 * @author    Patrick Paechnatz <patrick.paechnatz@gmail.com>
 * @copyright 2015 Patrick Paechnatz <patrick.paechnatz@gmail.com>
 * @license   http://www.opensource.org/licenses/MIT
 * @link      http://github.com/dunkelfrosch/dfphpcoverfish/tree
 * @since     class available since Release 0.9.0
 * @version   0.9.0
 *
 */
class ValidatorClassNameMethodNameClassPassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers SampleClass::dummy
     */
    public function testCanCallDummyMethod()
    {
        $sampleClass = new SampleClass();
        $this->assertTrue($sampleClass->dummy());
    }
}