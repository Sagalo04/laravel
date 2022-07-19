<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reactions;

class ReactionsController extends Controller
{
    public function getReactions(){
        return response()->json(Reactions::all(),200);
    }

    public function insertReaction(Request $request){
        $reaction = Reactions::create($request->all());
        return response($reaction,200);
    }

    public function updateReaction(Request $request,$heroe_id){
        $reaction = Reactions::where('heroe_id',$heroe_id)->update($request->all());
        if(!$reaction){
            $reaction = Reactions::create($request->all());
            return response($reaction,200);
        }
        return response("updated $heroe_id",200);
    }
}
