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

namespace Sylius\SharedKernel\Model;

use Sylius\SharedKernel\Exception\VariantQuantityAlreadySpecified;
use Sylius\SharedKernel\Exception\VariantQuantityNotSpecified;
use Sylius\Component\Core\Model\ProductVariantInterface;

interface VariantsQuantityMapInterface
{
    /** @throws VariantQuantityAlreadySpecified */
    public function addVariantWithQuantity(ProductVariantInterface $productVariant, int $quantity): void;

    /** @throws VariantQuantityNotSpecified */
    public function changeVariantQuantity(ProductVariantInterface $productVariant, int $targetQuantity): void;

    /** @throws VariantQuantityNotSpecified */
    public function getVariantQuantity(ProductVariantInterface $productVariant): int;

    public function hasTrackedVariants(): bool;

    public function hasVariantQuantityDefined(ProductVariantInterface $productVariant): bool;

    public function isEmpty(): bool;

    public function iterate(): array;
}
