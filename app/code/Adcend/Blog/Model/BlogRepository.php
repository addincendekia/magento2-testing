<?php

declare(strict_types = 1);

namespace Adcend\Blog\Model;

use Adcend\Blog\Api\BlogRepositoryInterface;
use Adcend\Blog\Model\ResourceModel\Blog as BlogResource;
use Adcend\Blog\Model\ResourceModel\Blog\Collection as BlogCollection;
use Magento\Framework\Model\AbstractModel;
use PHPUnit\Framework\Constraint\ExceptionMessage;

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

    public function getById($id)
    {
        $blogModel = $this->blogFactory->create();

        $this->blogResource->load($blogModel, $id);

        if (!$blogModel->getId()) {
            throw new ExceptionMessage("post not found", 1);
        }

        return $blogModel;
    }

    public function save($blog)
    {
        /** @var AbstractModel $blog */
        $this->blogResource->save($blog);

        return $blog;
    }
}
