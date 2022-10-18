<?php

namespace App\Http\Controllers;

use App\Models\membership;
use App\Models\User;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index() {
        $memberships = response()->json(Membership::all());
        return $memberships;
    }

    public function show($id) {
        $memberships = response()->json(Membership::find($id));
        return $memberships;
    }

    public function destroy($id) {
        Membership::find($id)->delete();
    }

    public function store(Request $request) {
        $membership = new Membership();
        $membership->title = $request->title;
        $membership->description = $request->description;
        $membership->end_date = $request->end_date;
        $membership->user_id = $request->user_id;
        $membership->status = $request->status;
        $membership->save();
    }

    public function update(Request $request, $id) {
        $membership = Membership::find($id);
        $membership->title = $request->title;
        $membership->description = $request->description;
        $membership->end_date = $request->end_date;
        $membership->user_id = $request->user_id;
        $membership->status = $request->status;
        $membership->save();
    }

    public function newView() {
        $memberships = Membership::all();
        return view('membership.new',['memberships' => $memberships]);
    }

    public function editView($id) {
        $users = User::all();
        $membership = Membership::find($id);
        return view('membership.edit',['users' => $users, 'membership' => $membership]);
    }

    public function listView() {
        $memberships = Membership::all();
        return view('membership.list',['memberships' => $memberships]);
    }
}
