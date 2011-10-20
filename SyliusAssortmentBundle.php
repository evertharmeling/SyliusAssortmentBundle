<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\AssortmentBundle;

use Sylius\Bundle\AssortmentBundle\DependencyInjection\Compiler\RegisterSortersPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Assortment bundle.
 * 
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class SyliusAssortmentBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new RegisterSortersPass());
    }
}
