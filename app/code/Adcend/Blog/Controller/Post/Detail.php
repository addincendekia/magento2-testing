<?php
declare(strict_types=1);

namespace Adcend\Blog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Detail implements HttpGetActionInterface
{
	public function execute()
	{
		//logic to render page
        var_dump('post detail by adcend');
        die;
	}
}