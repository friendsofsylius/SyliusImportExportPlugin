<?php

declare(strict_types=1);

namespace spec\FriendsOfSylius\SyliusImportExportPlugin\Controller;

use Doctrine\ORM\EntityManager;
use FriendsOfSylius\SyliusImportExportPlugin\Controller\ExportDataController;
use PhpSpec\ObjectBehavior;
use Sylius\Bundle\ResourceBundle\Controller\RequestConfigurationFactoryInterface;
use Sylius\Bundle\ResourceBundle\Controller\ResourcesCollectionProviderInterface;
use Sylius\Component\Registry\ServiceRegistryInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;

class ExportDataControllerSpec extends ObjectBehavior
{
    function let(
        ServiceRegistryInterface $registry,
        RequestConfigurationFactoryInterface $requestConfigurationFactory,
        ResourcesCollectionProviderInterface $resourcesCollectionProvider,
        RepositoryInterface $repository,
        EntityManager $entityManager
    ) {
        $this->beConstructedWith(
            $registry,
            $requestConfigurationFactory,
            $resourcesCollectionProvider,
            $repository,
            $entityManager,
            []
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ExportDataController::class);
    }
}
