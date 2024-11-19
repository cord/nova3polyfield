<?php


namespace App\Nova\Questionables;

use App\Nova\Questionvisualables\VisualA1;
use App\Nova\Questionvisualables\VisualA2;
use App\Nova\Resource;
use DigitalCreative\InlineMorphTo\InlineMorphTo;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class TypeB extends Resource
{
    public static $model = \App\Models\Questionables\TypeB::class;
    public static $displayInNavigation = false;

    static function label()
    {
        return __('Question Type B');
    }

    public function fields(Request $request)
    {
        $visualables = [
//            VisualA1::class,
            VisualA2::class,
        ];

        return [
            ID::make()->sortable(),
            Text::make('Setting B', 'setting_b'),
            Text::make('Config B', 'config_b'),
            Text::make('Option B', 'option_b'),

            InlineMorphTo::make(__('Visual Type'), 'visualable')
                ->types($visualables)
                ->hideFromIndex()
                ->rules('required', function ($attribute, $value, $fail) {
                    // $value can be 'null' as string
                    if (strlen("$value") < 5) {
                        return $fail(__('Please select a Visual Type'));
                    }
                })
        ];
    }

}
