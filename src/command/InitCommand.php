<?php
namespace Fazi\jwt\command;

use think\console\Input;
use think\console\Output;
use think\facade\App;

class InitCommand extends \think\console\Command
{
    public function configure()
    {
        $this->setName('jwt:init')
            ->setDescription('create jwt config file');
    }

    public function execute(Input $input, Output $output)
    {
        $path = app()->getAppPath().'..'.DIRECTORY_SEPARATOR.'.env';
	    if (file_exists($path)
		    && strpos(file_get_contents($path), '[JWT]')
	    ) {
		    $output->writeln('JWT ENV is exists');
	    } else {
		    file_put_contents($path,
			    PHP_EOL . "[OSS]" . PHP_EOL . "JWT_KEY=!PLSModifyThisKey!" . PHP_EOL,
			    FILE_APPEND);
		    $output->writeln('JWT ENV has set');
	    }
        $this->createConfig($output);
    }
}
