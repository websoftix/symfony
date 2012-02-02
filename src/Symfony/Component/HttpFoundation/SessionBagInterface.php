<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation;

/**
 * Session Bag store.
 *
 * @author Drak <drak@zikula.org>
 */
interface SessionBagInterface
{
    /**
     * Initializes the Bag
     *
     * @param array $array
     */
    function initialize(array &$array);

    /**
     * Gets the storage key for this bag.
     *
     * @return string
     */
    function getStorageKey();
}