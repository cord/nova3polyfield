<?php


namespace App\Nova\Questionvisualables;

use App\Nova\Resource;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class VisualA2 extends Resource
{

    public static $model = \App\Models\Questionvisualables\VisualA2::class;
    public static $displayInNavigation = false;

    static function label() {
        return __('Visual Type A2');
    }

    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Visual Setting 1', 'visual_1'),
            Text::make('Visual Setting 3', 'visual_3'),
        ];
    }

}
