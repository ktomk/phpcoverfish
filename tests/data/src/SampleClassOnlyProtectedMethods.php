<?php

namespace DF\PHPCoverFish\Tests\Data\Src;

/**
 * Class SampleClassOnlyProtectedMethods
 *
 * @package   DF\PHP\CoverFish
 * @author    Patrick Paechnatz <patrick.paechnatz@gmail.com>
 * @copyright 2015 Patrick Paechnatz <patrick.paechnatz@gmail.com>
 * @license   http://www.opensource.org/licenses/MIT
 * @link      http://github.com/dunkelfrosch/phpcoverfish/tree
 * @since     class available since Release 0.9.1
 * @version   0.9.1
 */
class SampleClassOnlyProtectedMethods
{
    /**
     * @var int
     */
    protected $propertyIntAlpha;

    /**
     * @var string
     */
    protected $propertyStringBeta;

    /**
     * @return bool
     */
    protected function dummy()
    {
        return true;
    }

    /**
     * @return bool
     */
    protected function yummy()
    {
        return true;
    }
}