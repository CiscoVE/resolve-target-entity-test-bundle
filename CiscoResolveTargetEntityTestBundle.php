<?php

namespace Cisco\ResolveTargetEntityTestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CiscoResolveTargetEntityTestBundle extends Bundle
{
    public function getNamespace()
    {
        return __NAMESPACE__;
    }
    
    public function getPath()
    {
        return strtr(__DIR__, '\\', '/');
    }
}

