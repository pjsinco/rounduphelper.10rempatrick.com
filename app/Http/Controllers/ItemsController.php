<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItemsController extends Controller
{
    public function create(Request $request)
    {
        $type = $request->input('type');

        if ($type == 'feature') {
            return view('items.create.feature');
        } elseif ($type == 'major') {
            return view('items.create.major');
        } elseif ($type == 'minor') {
            return view('items.create.minor');
        } elseif ($type == 'section_title') {
            return view('items.create.section_title');
//        } elseif ($type == 'line_break') {
//            return redirect()->action('ItemsController@emptyLineBreak');
        } elseif ($type == 'quote') {
            return view('items.create.quote');
        } elseif ($type == 'date') {
            return view('items.create.date');
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

//    public function emptyLineBreak()
//    {
//        $template = view()->file(app_path('Http/Templates/line-break.blade.php'));
//
//        return view('items.show')
//            ->with(['template' => $template]);
//    }

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

    public function major(Request $request) 
    {
        $input = $request->input();

        $template = view()
            ->file(
                app_path('Http/Templates/article-major.blade.php'), 
                $request->input()
            );

        Session::flash('data', $input);

        return view('items.show')
            ->with(['template' => $template]);
    }

    public function minor(Request $request) 
    {
        $input = $request->input();

        $template = view()
            ->file(
                app_path('Http/Templates/article-minor.blade.php'), 
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
