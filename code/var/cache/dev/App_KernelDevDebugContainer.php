<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTNiB6Ms\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTNiB6Ms/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTNiB6Ms.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTNiB6Ms\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTNiB6Ms\App_KernelDevDebugContainer([
    'container.build_hash' => 'TNiB6Ms',
    'container.build_id' => 'f7904efb',
    'container.build_time' => 1680779433,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTNiB6Ms');
