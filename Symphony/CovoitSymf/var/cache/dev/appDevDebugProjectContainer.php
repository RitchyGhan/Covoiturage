<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRbvvyah\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRbvvyah/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerRbvvyah.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerRbvvyah\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerRbvvyah\appDevDebugProjectContainer([
    'container.build_hash' => 'Rbvvyah',
    'container.build_id' => 'afca165e',
    'container.build_time' => 1580144790,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRbvvyah');
