<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItemsController extends Controller
{

    public function create(Request $request)
    {
        if (! $request->ajax()) {
            return app()->abort(404);
        }

        $type = array_keys($request->input())[0];

        //$type = $request->input('type');

        if ($type == 'top_story') {
            //return view('items.create.feature');
            $htmlVersion = view()->file(
                app_path('Http/Templates/top-story.blade.php')
            )->render();

            return view()->make('items.article_form', ['action' => 'ItemsController@feature', 'htmlVersion' => $htmlVersion])->render();
//dd($view);
        } elseif ($type == 'feature') {
            //return view('items.create.major');
            return view()->make('items.article_form', ['action' => 'ItemsController@feature'])->render();
        } elseif ($type == 'brief') {
            //return view('items.create.minor');
            return view()->make('items.article_form', ['action' => 'ItemsController@brief'])->render();
        } elseif ($type == 'section_title') {
            //return view('items.create.section_title');
            return view()->make('items.section_title_form', ['action' => 'ItemsController@sectionTitle'])->render();
        } elseif ($type == 'quote') {
            return view()->make('items.quote_form', ['action' => 'ItemsController@quote'])->render();
            //return view()->make('items.quote_form');
        } elseif ($type == 'date') {
            //return view('items.create.date');
            return view()->make('items.date_form', ['action' => 'ItemsController@date'])->render();
        }
    }

    public function date(Request $request)
    {
        $input = $request->input();

        $template = view()
            ->file(
                app_path('Http/Templates/date.blade.php'), 
                $request->input()
            );

        Session::flash('data', $input);

        return view('items.show')
            ->with(['template' => $template]);

    }

    public function quote(Request $request)
    {
        $input = $request->input();

        $template = view()
            ->file(
                app_path('Http/Templates/quote.blade.php'), 
                $request->input()
            );

        Session::flash('data', $input);

        return view('items.show')
            ->with(['template' => $template]);
    }

    public function topStory(Request $request) 
    {
        $input = $request->input();

        $template = view()
            ->file(
                app_path('Http/Templates/top-story.blade.php'), 
                $request->input()
            );

        Session::flash('data', $input);

        return view('items.show')
            ->with(['template' => $template]);
    }

    public function feature(Request $request) 
    {
        $input = $request->input();

        $template = view()
            ->file(
                app_path('Http/Templates/feature.blade.php'), 
                $request->input()
            );

        Session::flash('data', $input);

        return view('items.show')
            ->with(['template' => $template]);
    }

    public function brief(Request $request) 
    {
        $input = $request->input();

        $template = view()
            ->file(
                app_path('Http/Templates/brief.blade.php'), 
                $request->input()
            );

        Session::flash('data', $input);

        return view('items.show')
            ->with(['template' => $template]);
    }

    public function sectionTitle(Request $request)
    {
        $input = $request->input();

        $template = view()
            ->file(
                app_path('Http/Templates/section-title.blade.php'), 
                $request->input()
            );

        Session::flash('data', $input);

        return view('items.show')
            ->with(['template' => $template]);
    }
}
