<?php

namespace App\PluginResources\PostResource\Pages;

use App\Plugins\PostPlugin;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPosts extends ListRecords
{
    public static function getResource(): string
    {
        return PostPlugin::get()->getResource();
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
