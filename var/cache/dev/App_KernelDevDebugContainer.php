<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerN8uxiw2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN8uxiw2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerN8uxiw2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerN8uxiw2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerN8uxiw2\App_KernelDevDebugContainer([
    'container.build_hash' => 'N8uxiw2',
    'container.build_id' => '472a4fe6',
    'container.build_time' => 1706082290,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerN8uxiw2');