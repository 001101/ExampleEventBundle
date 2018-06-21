<?php

/*
 * This file is part of Sulu.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\ExampleEventBundle\Model\Query;

use Sulu\Bundle\ExampleEventBundle\Model\Command\EventIdTrait;

class FindEventQuery
{
    use EventIdTrait;

    public function __construct(string $id)
    {
        $this->initializeId($id);
    }
}
