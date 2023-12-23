<?php

namespace App\PluginResources\PostResource\Pages;

use App\Plugins\PostPlugin;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    public static function getResource(): string
    {
        return PostPlugin::get()->getResource();
    }
}
