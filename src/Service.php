<?php
namespace Fazi\jwt;

use Fazi\jwt\command\InitCommand;

class Service extends \think\Service
{
    public function boot()
    {
        $this->commands(InitCommand::class);
    }
}
