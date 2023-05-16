<?php
declare(strict_types=1);

namespace Adcend\Blog\Controller\Post;

use \Magento\Framework\App\Action\HttpGetActionInterface;
use \Magento\Framework\App\RequestInterface;

class Detail implements HttpGetActionInterface
{
    private $request;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }

	public function execute()
	{
        var_dump($this->request->getParams());
        die;
	}
}