<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Level as LivewireLevel;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
   public function add_level()
   {
        return view('admin.addlevel');
   }
   public function store_level(Request $request)
   {
        $level = Level::create([
            'title' => $request->title,
            'limit' => $request->limit,
            'total_team_member' => $request->total_members,
            'percentage' => $request->percentage,
            'first_member_commision' => $request->first_person,
            'second_member_commision' => $request->second_person,
            'third_member_commision' => $request->third_person,
     
        ]);
        return view('admin.addlevel');
   }
   public function show_level()
   {
          return view('admin.showlevel');
   }
   public function edit_level($id)
   {
          $level = Level::find($id)->first();

          return view('admin.editlevel',compact('level'));
   }
   public function update_level(Request $request, $id)
   {
          $level = Level::find($id)->first();
          $level->title = $request->title;
          $level->limit = $request->limit;
          $level->total_team_member = $request->total_members;
          $level->percentage = $request->percentage;
          $level->first_member_commision = $request->first_person;
          $level->second_member_commision = $request->second_person;
          $level->third_member_commision = $request->third_person;
          $level->save();
          return redirect()->route('admin.showlevel');
   }

}
