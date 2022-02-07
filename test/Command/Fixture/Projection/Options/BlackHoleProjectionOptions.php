<?php

/**
 * This file is part of prooph/event-store-symfony-bundle.
 * (c) 2014-2022 Alexander Miertsch <kontakt@codeliner.ws>
 * (c) 2015-2022 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ProophTest\Bundle\EventStore\Command\Fixture\Projection\Options;

use Prooph\Bundle\EventStore\Projection\ProjectionOptions;
use Prooph\EventStore\Pdo\Projection\GapDetection;

final class BlackHoleProjectionOptions implements ProjectionOptions
{
    public function options(): array
    {
        return [
            'gap_detection' => new GapDetection([0, 5, 5, 10, 15, 25, 40, 65, 105]),
        ];
    }
}
