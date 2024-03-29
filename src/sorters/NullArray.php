<?php

/*
 * This file is part of the "sorter" package.
 *
 * (c) Vadim Selyan <vadimselyan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace vsflash\Sorter\sorters;

class NullArray implements SorterInterface
{
    public const SORTER_TYPE = 'null';

    /**
     * Reset sort
     *
     * @param array $data
     *
     * @return array
     */
    public function sort(array $data): array
    {
        return $data;
    }
}
