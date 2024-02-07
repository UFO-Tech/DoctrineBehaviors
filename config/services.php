<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    $parameters->set('doctrine_behaviors_translatable_fetch_mode', 'LAZY');
    $parameters->set('doctrine_behaviors_translation_fetch_mode', 'LAZY');
    $parameters->set('doctrine_behaviors_blameable_user_entity', null);
    $parameters->set('doctrine_behaviors_timestampable_date_field_type', 'datetime');

    $services = $containerConfigurator->services();

    $services->defaults()
        ->public()
        ->autowire()
        ->autoconfigure()
        ->bind('$translatableFetchMode', '%doctrine_behaviors_translatable_fetch_mode%')
        ->bind('$translationFetchMode', '%doctrine_behaviors_translation_fetch_mode%')
        ->bind('$blameableUserEntity', '%doctrine_behaviors_blameable_user_entity%')
        ->bind('$timestampableDateFieldType', '%doctrine_behaviors_timestampable_date_field_type%');

    $services->load('VasyaXY\DoctrineBehaviors\\', __DIR__ . '/../src')
        ->exclude([
            __DIR__ . '/../src/Bundle',
            __DIR__ . '/../src/DoctrineBehaviorsBundle.php',
            __DIR__ . '/../src/Exception',
        ]);

    $services->load('VasyaXY\DoctrineBehaviors\EventSubscriber\\', __DIR__ . '/../src/EventSubscriber');
    $services->load('VasyaXY\DoctrineBehaviors\Exception\\', __DIR__ . '/../src/Exception');

    $services->load('VasyaXY\DoctrineBehaviors\Model\Blameable\\', __DIR__ . '/../src/Model/Blameable');
    $services->load('VasyaXY\DoctrineBehaviors\Model\Sluggable\\', __DIR__ . '/../src/Model/Sluggable');
    $services->load('VasyaXY\DoctrineBehaviors\Model\Loggable\\', __DIR__ . '/../src/Model/Loggable');
    $services->load('VasyaXY\DoctrineBehaviors\Model\SoftDeletable\\', __DIR__ . '/../src/Model/SoftDeletable');
    $services->load('VasyaXY\DoctrineBehaviors\Model\Timestampable\\', __DIR__ . '/../src/Model/Timestampable');
    $services->load('VasyaXY\DoctrineBehaviors\Model\Translatable\\', __DIR__ . '/../src/Model/Translatable');
    $services->load('VasyaXY\DoctrineBehaviors\Model\Tree\\', __DIR__ . '/../src/Model/Tree');
    $services->load('VasyaXY\DoctrineBehaviors\Model\Uuidable\\', __DIR__ . '/../src/Model/Uuidable');

    $services->load('VasyaXY\DoctrineBehaviors\ORM\Tree\\', __DIR__ . '/../src/ORM/Tree');

    $services->load('VasyaXY\DoctrineBehaviors\Provider\\', __DIR__ . '/../src/Provider');

    $services->load('VasyaXY\DoctrineBehaviors\Repository\\', __DIR__ . '/../src/Repository');

//    dd($services);
};
