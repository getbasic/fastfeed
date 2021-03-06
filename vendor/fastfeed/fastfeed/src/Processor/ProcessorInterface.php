<?php

/**
 * This file is part of the FastFeed package.
 *
 * Copyright (c) Daniel González
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Daniel González <daniel@desarrolla2.com>
 */

namespace FastFeed\Processor;

/**
 * ProcessorInterface
 */
interface ProcessorInterface
{
    /**
     * Execute processor
     *
     * @param array $items
     *
     * @return $items
     */
    public function process(array $items);
}
