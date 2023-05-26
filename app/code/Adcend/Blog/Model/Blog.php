<?php

declare(strict_types = 1);

namespace Adcend\Blog\Model;

use Adcend\Blog\Api\Data\BlogInterface;
use Adcend\Blog\Model\ResourceModel\Blog as BlogResource;
use Magento\Framework\Model\AbstractModel;

/**
 * blog model class
 */
class Blog extends AbstractModel implements BlogInterface
{
    protected function _construct()
    {
        $this->_init(BlogResource::class);
    }

    public function getTitle()
    {
        $this->getData(self::TITLE);
    }

    public function setTitle($title)
    {
        $this->setData(self::TITLE, $title);
    }

    public function getContent()
    {
        $this->getData(self::CONTENT);
    }

    public function setContent($content)
    {
        $this->setData(self::CONTENT, $content);
    }

    public function getAuthor()
    {
        $this->getData(self::AUTHOR);
    }

    public function setAuthor($author)
    {
        $this->setData(self::TITLE, $author);
    }

    public function getCreatedAt()
    {
        $this->getData(self::CREATED_AT);
    }

    public function getUpdatedAt()
    {
        $this->getData(self::UPDATED_AT);
    }
}
