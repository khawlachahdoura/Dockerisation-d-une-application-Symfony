<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container05Xxg9h\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container05Xxg9h/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container05Xxg9h.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container05Xxg9h\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container05Xxg9h\App_KernelDevDebugContainer([
    'container.build_hash' => '05Xxg9h',
    'container.build_id' => '6ba337ee',
    'container.build_time' => 1631812190,
], __DIR__.\DIRECTORY_SEPARATOR.'Container05Xxg9h');
