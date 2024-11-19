<?php


namespace App\Nova\Questionvisualables;

use App\Nova\Resource;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class VisualA1 extends Resource
{

    public static $model = \App\Models\Questionvisualables\VisualA1::class;
    public static $displayInNavigation = false;

    static function label() {
        return __('Visual Type A1');
    }

    public function fields(Request $request)
    {


        return [
            ID::make()->sortable(),
            Text::make('Visual Setting 1', 'visual_1'),
            Text::make('Visual Setting 2', 'visual_2'),
        ];
    }

}
