<?php

namespace App\Http\Controllers;

use App\Roles;
use Illuminate\Http\Request;
/**
 * @group User Role management
 *
 * APIs for managing roles
 */
class RoleController extends Controller
{
    /**
     * Display User Roles
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $roles = Roles::all();
        return $roles;
    }
    /**
     * Store a new role
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display all roles
     *
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show(Roles $roles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roles $roles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roles $roles)
    {
        //
    }
}
