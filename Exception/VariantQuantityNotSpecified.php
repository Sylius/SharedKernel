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

namespace Sylius\SharedKernel\Exception;

final class VariantQuantityNotSpecified extends \RuntimeException
{
    public static function withVariantName(string $variantName): self
    {
        return new self(sprintf('Map does not have quantity specified for variant "%s"', $variantName));
    }
}
