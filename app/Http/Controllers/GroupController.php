<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function __construct(){

    }
    public function groups(){
        $groups=Group::all();
        return view("groups.list", [
            "groups"=>$groups
        ]);
    }

    public function create(){
        return view("groups.create");
    }

    public function store(Request $request){
        $group=new Group();
        $group->name=$request->name;
        $group->year=$request->year;
        $group->save();
        return redirect()->route("groups.list");

    }

    public function update( $id){
        $group=Group::find($id);
        return view("groups.update", [
            "group"=>$group
        ]);
    }

    public function save(Request $request, $id){
        $group=Group::find($id);
        $group->name=$request->name;
        $group->year=$request->year;
        $group->save();
        return redirect()->route("groups.list");
    }

    public function delete($id){

        Group::destroy($id);
        return redirect()->route("groups.list");
    }
}
