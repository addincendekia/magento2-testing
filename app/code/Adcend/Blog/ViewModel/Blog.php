<?php

declare(strict_types = 1);

namespace Adcend\Blog\ViewModel;

use Adcend\Blog\Api\BlogRepositoryInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * blog viewmodel class
 */
class Blog implements ArgumentInterface
{
    private $blogRepository;

    public function __construct(BlogRepositoryInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function list()
    {
        return $this->blogRepository->getAll();
    }
}
