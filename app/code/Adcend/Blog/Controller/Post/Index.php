<?php
declare(strict_types=1);

namespace Adcend\Blog\Controller\Post;

use \Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{
    private $redirectFactory;

    public function __construct(\Magento\Framework\Controller\Result\RedirectFactory $redirectFactory)
    {
        $this->redirectFactory = $redirectFactory;
    }

	public function execute()
	{
        $redirect = $this->redirectFactory->create();

        return $redirect->setPath('*/post/detail');
	}
}