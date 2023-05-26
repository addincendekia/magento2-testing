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
        return $this->getData(self::TITLE);
    }

    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    public function getAuthor()
    {
        return $this->getData(self::AUTHOR);
    }

    public function setAuthor($author)
    {
        return $this->setData(self::TITLE, $author);
    }

    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }
}
