<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\AssortmentBundle\Form\ChoiceList;

use Doctrine\Common\Persistence\ObjectRepository;
use Symfony\Component\Form\Extension\Core\ChoiceList\ObjectChoiceList;

/**
 * Option choice list.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class OptionChoiceList extends ObjectChoiceList
{
    /**
     * Constructor.
     *
     * @param ObjectRepository $optionRepository
     */
    public function __construct(ObjectRepository $optionRepository)
    {
        parent::__construct($optionRepository->findAll(), 'name', array(), null, null, 'id');
    }
}
