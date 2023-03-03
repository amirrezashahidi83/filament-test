<?php

namespace App\Filament\Pages;
use Illuminate\Contracts\View\View;
use Filament\Pages\Page;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    protected function getHeader(): View
{
    return view('header');
}
 
protected function getFooter(): View
{
    return view('footer');
}
}
