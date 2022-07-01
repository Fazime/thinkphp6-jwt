<?php

namespace fazi\jwt\facade;

use think\Facade;

class JWTAuth extends Facade
{
    protected static function getFacadeClass()
    {
        return 'fazi\jwt\JWTAuth';
    }
}
