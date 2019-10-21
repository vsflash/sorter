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

class Sorter
{
    private $sorter;

    /**
     * Sorter constructor.
     *
     * @param string $sort_type
     */
    public function __construct(string $sort_type)
    {
        $this->sorter = Factory::createSorter($sort_type);
    }

    /**
     * Set sorter by sort_type
     *
     * @param string $sort_type
     */
    public function setSorter(string $sort_type)
    {
        $this->sorter = Factory::createSorter($sort_type);
    }

    /**
     * Return sorted array or null
     *
     * @param array $data
     *
     * @return null|array
     */
    public function sort(array $data): ?array
    {
        return $this->sorter->sort($data);
    }
}
