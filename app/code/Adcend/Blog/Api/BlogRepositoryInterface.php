<?php

declare(strict_types = 1);

namespace Adcend\Blog\Api;

use Adcend\Blog\Api\Data\BlogInterface;

interface BlogRepositoryInterface
{
    /**
     * @param BlogInterface $blog
     * @return BlogInterface
     */
    public function save(BlogInterface $blog): BlogInterface;
}
