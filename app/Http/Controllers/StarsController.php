<?php

namespace App\Http\Controllers;

use App\Repositories\AdsRepository;
use App\Repositories\StarsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StarsController extends Controller
{
    private $adsRepository;
    private $starsRepository;

    /**
     * StarsController constructor.
     *
     * @param AdsRepository   $adsRepository
     * @param StarsRepository $starsRepository
     */
    public function __construct(AdsRepository $adsRepository, StarsRepository $starsRepository)
    {
        $this->adsRepository = $adsRepository;
        $this->starsRepository = $starsRepository;
    }

    /**
     * @param $id
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function submit($id, Request $request)
    {
        $ad = $this->adsRepository->findOrFail($id);
        $success = $this->starsRepository->star(currentUser(), $ad);

        if ($request->ajax()) {
            return response()->json(compact('success'));
        }
    }

    /**
     * @param $id
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id, Request $request)
    {
        $ad = $this->adsRepository->findOrFail($id);
        $success = $this->starsRepository->unstar(currentUser(), $ad);

        if ($request->ajax()) {
            return response()->json(compact('success'));
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    }
}
