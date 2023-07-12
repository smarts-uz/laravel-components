<?php

declare(strict_types=1);

namespace Smarts;

use Smarts\Components\BladeComponent;
use Smarts\Components\LivewireComponent;
use Smarts\Console\PublishCommand;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Illuminate\View\Compilers\BladeCompiler;
use Livewire\Livewire;

final class SmartsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/smarts.php', 'smarts');

        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishCommand::class,
            ]);
        }
    }

    public function boot(): void
    {
        $this->bootResources();
        $this->bootBladeComponents();
        $this->bootLivewireComponents();
        $this->bootDirectives();
        $this->bootPublishing();
    }

    private function bootResources(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'smarts');
    }

    private function bootBladeComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            $prefix = config('smarts.prefix', '');
            $assets = config('smarts.assets', []);

            /** @var BladeComponent $component */
            foreach (config('smarts.components', []) as $alias => $component) {
                $blade->component($component, $alias, $prefix);

                $this->registerAssets($component, $assets);
            }
        });
    }

    private function bootLivewireComponents(): void
    {
        // Skip if Livewire isn't installed.
        if (! class_exists(Livewire::class)) {
            return;
        }

        $prefix = config('smarts.prefix', '');
        $assets = config('smarts.assets', []);

        /** @var LivewireComponent $component */
        foreach (config('smarts.livewire', []) as $alias => $component) {
            $alias = $prefix ? "$prefix-$alias" : $alias;

            Livewire::component($alias, $component);

            $this->registerAssets($component, $assets);
        }
    }

    private function registerAssets($component, array $assets): void
    {
        foreach ($component::assets() as $asset) {
            $files = (array) ($assets[$asset] ?? []);

            collect($files)->filter(function (string $file) {
                return Str::endsWith($file, '.css');
            })->each(function (string $style) {
                Smarts::addStyle($style);
            });

            collect($files)->filter(function (string $file) {
                return Str::endsWith($file, '.js');
            })->each(function (string $script) {
                Smarts::addScript($script);
            });
        }
    }

    private function bootDirectives(): void
    {
        Blade::directive('bukStyles', function (string $expression) {
            return "<?php echo Smarts\\Smarts::outputStyles($expression); ?>";
        });

        Blade::directive('bukScripts', function (string $expression) {
            return "<?php echo Smarts\\Smarts::outputScripts($expression); ?>";
        });
    }

    private function bootPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/smarts.php' => $this->app->configPath('smarts.php'),
            ], 'smarts-config');
            $this->publishes([
                __DIR__.'/../config/uppy.php' => $this->app->configPath('uppy.php'),
            ], 'uppy-config');
            $this->publishes([
                __DIR__.'/../resources/views/components' => $this->app->resourcePath('views/vendor/smarts'),
            ], 'smarts-views');
            $this->publishes([
                __DIR__.'/../resources/views/assets' => base_path('public/vendor/eimzo/assets'),
            ], 'eimzo-js');
        }
    }
}
