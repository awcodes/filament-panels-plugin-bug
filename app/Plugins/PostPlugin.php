<?php

namespace App\Plugins;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Concerns\EvaluatesClosures;

class PostPlugin implements Plugin
{
    use EvaluatesClosures;

    protected ?string $resource = null;

    public function getId(): string
    {
        return 'post_plugin';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                $this->getResource(),
            ]);
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): Plugin
    {
        return filament(app(static::class)->getId());
    }

    public function getResource(): string
    {
        return $this->resource ?? config('plugins.post.resource');
    }

    public function resource(string $resource): static
    {
        $this->resource = $resource;

        return $this;
    }
}
