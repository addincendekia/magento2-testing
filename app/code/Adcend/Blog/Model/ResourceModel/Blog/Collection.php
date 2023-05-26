<?php

declare(strict_types = 1);

namespace Adcend\Blog\Model\ResourceModel\Blog;

use Adcend\Blog\Model\Blog;
use Adcend\Blog\Model\ResourceModel\Blog as BlogResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * blog collection class
 */
class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(Blog::class, BlogResource::class);
    }
}
