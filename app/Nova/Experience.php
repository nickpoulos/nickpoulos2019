<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Image;
use Illuminate\Http\Request;
use Fourstacks\NovaRepeatableFields\Repeater;
use Laravel\Nova\Http\Requests\NovaRequest;

class Experience extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Experience';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'company';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'company' ,'title' , 'location'
    ];

    public function title() {
        return $this->company . " - " . $this->title;
    }


    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Company')->rules('required'),
            Text::make('Title')->rules('required'),
            Text::make('Location')->rules('required'),
            Date::make('Start')->format('MMM YYYY')->rules('required'),
            Date::make('End')->format('MMM YYYY')->nullable(),
            Image::make('Image')->nullable(),
            Repeater::make('Responsibilities')->addField([
                'label' => 'Description',
                'name' => 'description',
                'type' => 'textarea',
                'placeholder' => 'Enter a description of your responsibility',
                'width' => 'w-full',
            ])->addButtonText('Add New Item')->summaryLabel('Responsibilities')->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
