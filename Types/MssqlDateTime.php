<?php
/**
 * 
 *
 * @author      Ken Golovin <ken@webplanet.co.nz>
 */

namespace Codeneuss\MssqlBundle\Types;

class MssqlDateTime extends \DateTime
{
    public function __toString()
    {
        return $this->format('Y-m-d');
    }
}

