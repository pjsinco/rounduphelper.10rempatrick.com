<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItemsController extends Controller
{

    public function getViewTemplate($filename, $input = array())
    {
        return view()
          ->file(
              app_path('Http/Templates/' . $filename), 
              $request->input()
          );
    }

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

    public function handle(Request $request)
    {

    }

    public function date(Request $request)
    {
        $input = $request->input();

        $template = $this->getViewTemplate('date.blade.php', $request->input());

        Session::flash('data', $input);

        return view('items.show')
            ->with(['template' => $template]);

    }

    public function quote(Request $request)
    {
        $input = $request->input();

        $template = $this->getViewTemplate('quote.blade.php', $request->input());

        Session::flash('data', $input);

        return view('items.show')
            ->with(['template' => $template]);
    }

    public function topStory(Request $request) 
    {
        $input = $request->input();

        $template = $this->getViewTemplate('top-story.blade.php', $request->input());

        Session::flash('data', $input);

        return view('items.show')
            ->with(['template' => $template]);
    }

    public function feature(Request $request) 
    {
        $input = $request->input();

        $template = $this->getViewTemplate('feature.blade.php', $request->input());

        Session::flash('data', $input);

        return view('items.show')
            ->with(['template' => $template]);
    }

    public function brief(Request $request) 
    {
        $input = $request->input();

        $template = $this->getViewTemplate('brief.blade.php', $request->input());

        Session::flash('data', $input);

        return view('items.show')
            ->with(['template' => $template]);
    }

    public function sectionTitle(Request $request)
    {
        $input = $request->input();

        $template = $this->getViewTemplate('section-title.blade.php', $request->input());

        Session::flash('data', $input);

        return view('items.show')
            ->with(['template' => $template]);
    }

    public function jaoaArticle(Request $request)
    {
      $input = $requets->input();

      $template = $this->getViewTemplate('jaoa.article.blade.php', $request->input());

      Session::flash('data', $input);

      return view('items.show')
          ->with(['template' => $template]);
    }
}
