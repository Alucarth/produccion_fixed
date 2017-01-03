<?php

namespace Muserpol\Http\Controllers\EconomicComplement;

use Illuminate\Http\Request;
use Muserpol\Http\Requests;
use Muserpol\Http\Controllers\Controller;

use Auth;
use Validator;
use Session;
use Datatables;
use Carbon\Carbon;
use Muserpol\Helper\Util;

use Muserpol\EconomicComplement;
use Muserpol\EconomicComplementType;
use Muserpol\EconomicComplementModality;

class EconomicComplementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $economic_complement_modalities = EconomicComplementModality::all();
        $economic_complement_modalities_list =  ['' => ''];
        foreach ($economic_complement_modalities as $item) {
            $economic_complement_modalities_list[$item->id]=$item->name;
        }

        $data = [

            'economic_complement_modalities_list' => $economic_complement_modalities_list

        ];

        $data = array_merge($data, self::getViewModel());

        return view('economic_complement.index', $data);
    }

    public static function getViewModel()
    {
        $eco_com_types = EconomicComplementType::all();
        $list_eco_com_types = array('' => '');
        foreach ($eco_com_types as $item) {
            $list_eco_com_types[$item->id]=$item->name;
        }

        return [
            'list_eco_com_types' => $list_eco_com_types,
        ];
    }

    public function getEconomicComplementType(Request $request, $id)
    {
        if($request->ajax())
        {
            $modalities = EconomicComplementModality::typeidIs($id)->get();
            return response()->json($modalities);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
