<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRkoXqIb\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRkoXqIb/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRkoXqIb.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRkoXqIb\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRkoXqIb\App_KernelDevDebugContainer([
    'container.build_hash' => 'RkoXqIb',
    'container.build_id' => '573624f8',
    'container.build_time' => 1618404007,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRkoXqIb');
