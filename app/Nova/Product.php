<?php

namespace App\Nova;

use App\Nova\Actions\PublishProduct;
use App\Nova\Filters\ProductCategory;
use App\Nova\Filters\ProductPublished;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Symfony\Component\HttpFoundation\Session\Session;

class product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\product::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'description'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Title')->rules('required'),

            Image::make('image_path')->disk('public')->rules('required'),

            Text::make('description')->rules('required'),

            Number::make('fee')->min(100)->max(1000000)->step(0.01)->rules('required'),

            DateTime::make('Publish At')->hideFromIndex()->rules('after_or_equal:today'),

            DateTime::make('Publish Until')->hideFromIndex()->rules('after_or_equal:publish_at'),

            Select::make('category')->options([
                'NEW ARRIVALS' => 'NEW ARRIVALS',
                'HOT DEALS' => 'HOT DEALS',
                'BLACK FRIDAY DEALS' => 'BLACK FRIDAY DEALS',
            ])->hideWhenUpdating()->rules('required'),

            Boolean::make('Is Published'),

            BelongsTo::make('User')

            
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [
            new ProductPublished,
            new ProductCategory
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [
            new PublishProduct
        ];
    }
}