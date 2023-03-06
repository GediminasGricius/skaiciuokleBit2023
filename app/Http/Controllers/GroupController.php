<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;


class GroupController extends Controller
{

    public function __construct(){

    }
    public function groups(Request $request){
        $filter=$request->session()->get('group.filter');

        $groups=Group::filter($filter)->with('students')->get();

        return view("groups.list", [
            "groups"=>$groups,
            "filter"=>$filter,
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

    public function search(Request $request){
        $filter=new \stdClass();
        $filter->name=$request->name;
        $filter->year=$request->year;

        $request->session()->put('group.filter',$filter);
        return redirect()->route('groups.list');
    }
}
