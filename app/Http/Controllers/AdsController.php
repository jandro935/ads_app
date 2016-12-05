<?php

namespace app\Http\Controllers;

use App\Entities\Ads;
use App\Http\Controllers\Controller;
use App\Repositories\AdsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdsController extends Controller
{
    private $adsRepository;

    public function __construct(AdsRepository $adsRepository)
    {
        $this->adsRepository = $adsRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ads::orderBy('id', 'desc')->paginate(5);

        return view('ads/list', compact('ads'));
    }

    /**
     * Display a listing of the resource by Author ID.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexByAuthor($id)
    {
        $ads = Ads::where('user_id', $id)->paginate(5);

        // @TODO: Merge List and ListByAuthor Views
        return view('ads/listbyauthor', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:100',
            'body' => 'required|max:500',
        ]);

        $ad = $this->adsRepository->addAd(
            $request->get('title'),
            $request->get('body'),
            auth()->user()
        );

        return Redirect::route('ads.show', $ad->id);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ad = Ads::findOrFail($id);

        return view('ads/details', compact('ad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ads::findOrFail($id);

        return view('ads/edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ad = Ads::findOrFail($id);
        $ad->title = $request->input('title');
        $ad->body = $request->input('body');

        $ad->save();

        return Redirect::route('ads.show', $ad->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
