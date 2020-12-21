<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Influencer;
use DataTables;

class InfluencerController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {

        if ($request->ajax()) {
            $influencers = Influencer::all();
            return DataTables::of($influencers)
                ->addColumn('action', function ($influencers){
                    $acciones .= '<button type="button" name="delete" class="btn btn-danger float-right">Eliminar</button>';
                    return $acciones;
                })
                ->rawColumns(['action'])
                ->make(true);

        }
        return view('influencers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('influencers.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        if($request->ajax()) {

            $validator = \Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|unique:influencers,email',
                'url_ig' => 'required|unique:influencers,url_ig',
                'description' => 'required',
                'country_audience' => 'required',
                'language' => 'required',
                'advertisement_notice' => 'required',
                'image' => 'required',
                'category_redSocial' => 'required',
                'start_vacation' => 'required',
                'end_vacation' => 'required',
            ],
            [
                'name.required' => 'El campo nombre es requerido',
                'url_ig.required' => 'La url es requerida',
                'description.required' => 'El campo descripción es requerido',
                'country_audience.required' => 'Pais de audiencia es requerido',
                'language.required' => 'El lenguaje es requerido',  
                'advertisement_notice.required' => 'Aviso es requerido',  
                'image.required' => 'La imagen es requerida',
                'category_redSocial.required' => 'La categoria es requerida', 
                'start_vacation.required' => 'Fecha de inicio de vacaciones es requerida', 
                'end_vacation.required' => 'Fecha de fin de vacaciones es requerida', 
                
            ]);

            if ($validator->fails()){
                return response()->json(['errors'=>$validator->errors()->all()]);
            }

            $influencer = new Influencer();

            $influencer->name = $request->input('name');
            $influencer->email = $request->input('email');
            $influencer->url_ig = $request->input('url_ig');
            $influencer->description = $request->input('description');
            $influencer->country_audience = $request->input('country_audience');
            $influencer->language = $request->input('language');
            $influencer->advertisement_notice = $request->input('advertisement_notice');
            $influencer->image = $request->input('image');
            $influencer->category_redSocial = $request->input('category_redSocial');
            $influencer->category_redSocial = implode(', ', $influencer->category_redSocial);
            $influencer->start_vacation = $request->input('start_vacation');
            $influencer->end_vacation = $request->input('end_vacation');
            $influencer->photo_ig = $request->input('photo_ig');
            $influencer->video_ig = $request->input('video_ig');
            $influencer->story_ig = $request->input('story_ig');
            $influencer->price_photo_ig = $request->input('price_photo_ig');
            $influencer->price_video_ig = $request->input('price_video_ig');
            $influencer->price_story_ig = $request->input('price_story_ig');
            $influencer->discount_photo_ig = $request->input('discount_photo_ig');
            $influencer->discount_video_ig = $request->input('discount_video_ig');
            $influencer->discount_story_ig = $request->input('discount_story_ig');
            $influencer->save();            
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
