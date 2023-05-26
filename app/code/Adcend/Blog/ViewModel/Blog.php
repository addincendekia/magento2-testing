<?php

declare(strict_types = 1);

namespace Adcend\Blog\ViewModel;

use Adcend\Blog\Api\BlogRepositoryInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * blog viewmodel class
 */
class Blog implements ArgumentInterface
{
    private $request;
    private $blogRepository;

    public function __construct(RequestInterface $request, BlogRepositoryInterface $blogRepository)
    {
        $this->request = $request;
        $this->blogRepository = $blogRepository;
    }

    public function list()
    {
        return $this->blogRepository->getAll();
    }

    public function show()
    {
        $postId = $this->request->getParam('id');
        return $this->blogRepository->getById($postId);
    }
}
