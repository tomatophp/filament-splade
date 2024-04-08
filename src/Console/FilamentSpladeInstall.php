<?php

namespace TomatoPHP\FilamentSplade\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use TomatoPHP\ConsoleHelpers\Traits\RunCommand;

class FilamentSpladeInstall extends Command
{
    use RunCommand;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'filament-splade:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'install package and publish assets';

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Publish Vendor Assets');
        if(!File::exists(resource_path('views/root.blade.php'))){
            File::copyDirectory(__DIR__ . '/../../publish', app_path());
        }
        $this->artisanCommand(["optimize:clear"]);
        $this->info('Please run yarn & yarn dev to compile your fresh scaffolding.');
        $this->info('Filament Splade installed successfully.');
    }
}
