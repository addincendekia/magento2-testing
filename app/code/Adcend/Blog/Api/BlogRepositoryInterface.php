<?php

declare(strict_types = 1);

namespace Adcend\Blog\Api;

use Adcend\Blog\Api\Data\BlogInterface;

interface BlogRepositoryInterface
{
    /**
     * @return Adcend\Blog\Api\Data\BlogInterface[]
     */
    public function getAll();

    /**
     * @param mixed $id
     * @return BlogInterface
     */
    public function getById($id);

    /**
     * @param BlogInterface $blog
     * @return BlogInterface
     */
    public function save($blog);
}
