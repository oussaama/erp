<?php

namespace ERPBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ERPBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
