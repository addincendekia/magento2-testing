<?php

declare(strict_types = 1);

namespace Adcend\Blog\Setup\Patch\Data;

use Adcend\Blog\Api\BlogRepositoryInterface;
use Adcend\Blog\Model\BlogFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class PopulateBlog implements DataPatchInterface
{
    private $moduleDataSetup;
    private $blogFactory;
    private $blogRepository;

    public function __construct(ModuleDataSetupInterface $moduleDataSetup, BlogFactory $blogFactory, BlogRepositoryInterface $blogRepository)
    {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->blogFactory = $blogFactory;
        $this->blogRepository = $blogRepository;
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }

    public function apply()
    {
        $this->moduleDataSetup->startSetup();

        $blogs = [
            [
                'title' => 'Lorem ipsum dolor sit amet.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit est nihil dolore, animi magni ea. Et dolores perferendis autem enim.',
                'author' => 'Paul Mullin',
            ],
            [
                'title' => 'Lorem ipsum dolor sit amet.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit est nihil dolore, animi magni ea. Et dolores perferendis autem enim.',
                'author' => 'Jordan Davies',
            ],
            [
                'title' => 'Lorem ipsum dolor sit amet.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit est nihil dolore, animi magni ea. Et dolores perferendis autem enim.',
                'author' => 'Ollie Palmer',
            ],
        ];

        foreach ($blogs as $blog) {
            $blogModel = $this->blogFactory->create();
            $blogModel->setData($blog);

            $this->blogRepository->save($blogModel);
        }

        $this->moduleDataSetup->endSetup();
    }
}
