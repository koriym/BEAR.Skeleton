<?php
namespace BEAR\Skeleton\Module;

use BEAR\Package\AbstractAppModule;
use BEAR\Package\PackageModule;
use Symfony\Component\Dotenv\Dotenv;

class AppModule extends AbstractAppModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure() : void
    {
        (new Dotenv)->loadEnv(dirname(__DIR__) . '/.env');
        $this->install(new PackageModule);
    }
}
