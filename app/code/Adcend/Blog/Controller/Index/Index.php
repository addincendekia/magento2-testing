<?php
declare(strict_types=1);

namespace Adcend\Blog\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{
	public function execute()
	{
		//logic to render page
        var_dump('blog module by adcend');
        die;
	}
}