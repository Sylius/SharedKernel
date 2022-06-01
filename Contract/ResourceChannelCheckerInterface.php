<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\SharedKernel\Contract;

use Sylius\Component\Channel\Model\ChannelInterface;

interface ResourceChannelCheckerInterface
{
    public function isFromChannel(object $resource, ChannelInterface $channel): bool;
}
