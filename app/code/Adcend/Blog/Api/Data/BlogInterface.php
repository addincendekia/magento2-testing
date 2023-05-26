<?php

declare(strict_types = 1);

namespace Adcend\Blog\Api\Data;

interface BlogInterface
{
    const ID = 'id';
    const TITLE = 'title';
    const CONTENT = 'content';
    const AUTHOR = 'author';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     * @return this
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getContent();

    /**
     * @param string $content
     * @return this
     */
    public function setContent($content);

    /**
     * @return string
     */
    public function getAuthor();

    /**
     * @param string $author
     * @return this
     */
    public function setAuthor($author);

    /**
     * @return string
     */
    public function getCreatedAt();

    /**
     * @return string
     */
    public function getUpdatedAt();
}
