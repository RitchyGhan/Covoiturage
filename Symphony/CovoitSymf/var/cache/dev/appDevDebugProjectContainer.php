<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLojt6gt\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLojt6gt/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerLojt6gt.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerLojt6gt\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerLojt6gt\appDevDebugProjectContainer([
    'container.build_hash' => 'Lojt6gt',
    'container.build_id' => '73c3bf21',
    'container.build_time' => 1580396289,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLojt6gt');
