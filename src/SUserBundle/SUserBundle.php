<?php

namespace SUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
