<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Image;
use Spatie\TagsField\Tags;
use Illuminate\Http\Request;
use Fourstacks\NovaRepeatableFields\Repeater;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Project extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Project';

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
        'id', 'title' ,'type' , 'company', 'description', 'technology', 'features', 'facts', 'specs'
    ];


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
            Text::make('Title')->rules('required'),
            Text::make('Company')->rules('required'),
            Select::make('Type')->options(\App\Project::getTypes()),
            Textarea::make('Description', 'main_description')->rules('required'),
            Tags::make('Tags')->hideFromIndex(),
            Text::make('Role Title', 'role_title')->rules('required')->hideFromIndex(),
            Text::make('URL', 'url')->hideFromIndex(),
            Textarea::make('Role Description', 'role_description')->rules('required'),
            Number::make('Year')->rules('required'),
            Image::make('Tile Image')->nullable()->hideFromIndex(),
            Image::make('Logo Image')->nullable(),
            Image::make('Browser Image')->nullable()->hideFromIndex(),
            Image::make('Screen Image')->nullable()->hideFromIndex(),
            Repeater::make('Features')->addField([
                'label' => 'Features',
                'name' => 'features',
                'type' => 'textarea',
                'placeholder' => 'Enter a feature description',
                'width' => 'w-full',
            ])->addButtonText('Add New Feature')->summaryLabel('Features')->hideFromIndex(),
            Repeater::make('Tech Specs', 'specs')->addField([
                'label' => 'Specification',
                'name' => 'specs',
                'type' => 'textarea',
                'placeholder' => 'Enter a technical specification',
                'width' => 'w-full',
            ])->addButtonText('Add New Spec')->summaryLabel('Tech Specs')->hideFromIndex(),
            Repeater::make('Facts')->addField([
                'label' => 'Fact',
                'name' => 'fact',
                'type' => 'textarea',
                'placeholder' => 'Enter a fun fact',
                'width' => 'w-full',
            ])->addButtonText('Add New Fact')->summaryLabel('Facts')->hideFromIndex(),
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
