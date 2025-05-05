<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Attribute;

#[\Attribute(\Attribute::TARGET_METHOD)]
class AdminAction
{
    public function __construct(
        public ?string $routePath = null,
        public ?string $routeName = null,
        public array $methods = ['GET'],
    ) {
    }
}
