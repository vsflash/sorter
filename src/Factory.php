<?php

/*
 * This file is part of the "sorter" package.
 *
 * (c) Vadim Selyan <vadimselyan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace vsflash\Sorter;

use vsflash\Sorter\sorters\AscSorter;
use vsflash\Sorter\sorters\DescSorter;
use vsflash\Sorter\sorters\NullArray;

class Factory
{
    /**
     * Create sorter
     *
     * @param string $sorter_type
     *
     * @return AscSorter|DescSorter|NullArray
     */
    public static function createSorter(string $sorter_type)
    {
        switch ($sorter_type) {
            case AscSorter::SORTER_TYPE:
                return new AscSorter();
            case DescSorter::SORTER_TYPE:
                return new DescSorter();
            case NullArray::SORTER_TYPE:
                return new NullArray();
        }
        throw new \RuntimeException(\sprintf('Unknown sorter "%s"', $sorter_type));
    }
}
