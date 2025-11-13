<?php

namespace App\Http\Controllers;

use App\Http\Resources\PromotStoreResource;
use App\Models\Promot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromotController extends Controller
{
    public function store(Request $request)
    {
        $Promot= Promot::create($request -> except('imagep_url'));
        $imagep_url = Storage::putFile('/promot', $request->imagep_url);
        $Promot -> update(['imagep_url'=>$imagep_url]);
        return response()->json([
            'message'=>'create has been successfully',
            'data' => new PromotStoreResource($Promot)
        ]);
    }

    public function show(Promot $promot)

    {

        return response() -> json([
            'message' => 'sortreviews has been fetch successfully',
            'data' => $promot
        ]);
    }

    public function update(Promot $promot, Request $request)
    {
        $promot -> update(\request()->all());
        $promot = Promot::find($promot->id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=> $promot
        ]);
    }

    public function delete(Promot $promot)
    {
        $promot -> delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=> $promot
        ]);
    }

}
