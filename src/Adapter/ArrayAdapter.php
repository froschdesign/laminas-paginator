<?php

/**
 * @see       https://github.com/laminas/laminas-paginator for the canonical source repository
 * @copyright https://github.com/laminas/laminas-paginator/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-paginator/blob/master/LICENSE.md New BSD License
 */

namespace Zend\Paginator\Adapter;

class ArrayAdapter implements AdapterInterface
{
    /**
     * ArrayAdapter
     *
     * @var array
     */
    protected $array = null;

    /**
     * Item count
     *
     * @var integer
     */
    protected $count = null;

    /**
     * Constructor.
     *
     * @param array $array ArrayAdapter to paginate
     */
    public function __construct(array $array = array())
    {
        $this->array = $array;
        $this->count = count($array);
    }

    /**
     * Returns an array of items for a page.
     *
     * @param  integer $offset Page offset
     * @param  integer $itemCountPerPage Number of items per page
     * @return array
     */
    public function getItems($offset, $itemCountPerPage)
    {
        return array_slice($this->array, $offset, $itemCountPerPage);
    }

    /**
     * Returns the total number of rows in the array.
     *
     * @return integer
     */
    public function count()
    {
        return $this->count;
    }
}
