<?php

declare(strict_types = 1);

namespace Adcend\Blog\Model;

use Adcend\Blog\Api\BlogRepositoryInterface;
use Adcend\Blog\Api\Data\BlogInterface;
use Adcend\Blog\Model\ResourceModel\Blog as BlogResource;

class BlogRepository implements BlogRepositoryInterface
{
    private $blogFactory;
    private $blogResource;

    public function __construct(BlogFactory $blogFactory, BlogResource $blogResource)
    {
        $this->blogFactory = $blogFactory;
        $this->blogResource = $blogResource;
    }

    public function save(BlogInterface $blog): BlogInterface
    {
        $this->blogResource->save($blog);

        return $blog;
    }
}
