<?php

declare(strict_types = 1);

namespace Adcend\Blog\Model;

use Adcend\Blog\Api\BlogRepositoryInterface;
use Adcend\Blog\Api\Data\BlogInterface;
use Adcend\Blog\Model\ResourceModel\Blog as BlogResource;
use Adcend\Blog\Model\ResourceModel\Blog\Collection as BlogCollection;
use Magento\Framework\Model\AbstractModel;

class BlogRepository implements BlogRepositoryInterface
{
    private $blogFactory;
    private $blogResource;
    private $blogCollection;

    public function __construct(BlogFactory $blogFactory, BlogResource $blogResource, BlogCollection $blogCollection)
    {
        $this->blogFactory = $blogFactory;
        $this->blogResource = $blogResource;
        $this->blogCollection = $blogCollection;
    }

    public function getAll()
    {
        return $this->blogCollection->getItems();
    }

    public function save(BlogInterface $blog): BlogInterface
    {
        /** @var AbstractModel $blog */
        $this->blogResource->save($blog);

        /** @var BlogInterface $blog */
        return $blog;
    }
}
