<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJsSqJlk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJsSqJlk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJsSqJlk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJsSqJlk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJsSqJlk\App_KernelDevDebugContainer([
    'container.build_hash' => 'JsSqJlk',
    'container.build_id' => '953cd46a',
    'container.build_time' => 1695389373,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJsSqJlk');
