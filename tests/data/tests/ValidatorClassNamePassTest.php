<?php

namespace DF\PHPCoverFish\Tests\Data\Tests;

use DF\PHPCoverFish\Tests\Data\Src\SampleClass;

/**
 * Class ValidatorClassNamePassTest
 *
 * @package   DF\PHPCoverFish
 * @author    Patrick Paechnatz <patrick.paechnatz@gmail.com>
 * @copyright 2015 Patrick Paechnatz <patrick.paechnatz@gmail.com>
 * @license   http://www.opensource.org/licenses/MIT
 * @link      http://github.com/dunkelfrosch/phpcoverfish/tree
 * @since     class available since Release 0.9.1
 * @version   0.9.1
 */
class ValidatorClassNamePassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * check validator 'ValidatorClassName', class found (using use statement of existing class)
     *
     * @covers SampleClass
     */
    public function testCanCallDummyMethod()
    {
        $sampleClass = new SampleClass();
        $this->assertTrue($sampleClass->dummy());
    }
}