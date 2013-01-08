<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\AssortmentBundle\Generator;

use Sylius\Bundle\AssortmentBundle\Model\CustomizableProductInterface;

/**
 * Interface for variant generating service.
 * It is used to create all possible (non-existing) variations
 * of given product based on the subject options.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface VariantGeneratorInterface
{
    /**
     * Generate all possible variants if they don't exist currently.
     * Add them do product.
     *
     * @param CustomizableProductInterface $product
     */
    public function generate(CustomizableProductInterface $product);
}
