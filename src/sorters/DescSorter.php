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

class DescSorter implements SorterInterface
{
    public const SORTER_TYPE = 'desc';

    /**
     * Sort array
     *
     * @param array $data
     *
     * @return array
     */
    public function sort(array $data): array
    {
        $arsort = \arsort($data);

        if (!$arsort) {
            throw new \RuntimeException('Array can\'t sort ' . $data);
        }

        return $data;
    }
}
