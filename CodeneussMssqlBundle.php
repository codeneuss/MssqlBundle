<?php

/*
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Codeneuss\MssqlBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Doctrine\DBAL\Types\Type;

class CodeneussMssqlBundle extends Bundle
{
    public function boot()
    {
        // Register custom data types
        if(!Type::hasType('uniqueidentifier')) {
            Type::addType('uniqueidentifier', 'Codeneuss\MssqlBundle\Types\UniqueidentifierType');
        }
        
        if(!Type::hasType('geography')) {
            Type::addType('geography', 'Codeneuss\MssqlBundle\Types\PointType');
        }

        Type::overrideType('date', 'Codeneuss\MssqlBundle\Types\DateType');
        Type::overrideType('datetime', 'Codeneuss\MssqlBundle\Types\DateTimeType');
    }
}
