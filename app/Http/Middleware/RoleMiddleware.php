<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next, $gender)
    {
        // if($role == 'user'){
        //     $user = Auth::user()->id_role;
        //     if($user != 1){
        //         abort(403);
        //     }

        // }
        // if($role == 'admin'){
        //     $admin = Auth::user()->id_role;
        //     if($admin != 2){
        //         abort(403);
        //     }

        // }
        // return $next($request);
        if (Auth::check()) {
            if (Auth::user()->role_id == 2) {
                if ($gender != 'perempuan') {
                    return $next($request);
                }
                return redirect('/login');
            }
            else if (Auth::user()->role_id == 1) {
                if ($gender == 'perempuan') {
                    return $next($request);
                }
                return redirect('/login');
            }
    
            return redirect('/login');
        }
        else{
            return redirect('/login');
        }

    }
    // public function handle(Request $request, Closure $next, $role)
    // {
    //     if (Auth::check()) {
    //         if (Auth::user()->role_id == 1) {
    //             if ($role == 'user') {
    //                 return $next($request);
    //             }
    //             return redirect('/login');
    //         }
    //     }
    //     else{
    //         return redirect('/login');
    //     }  
    // }
    // public function handle(Request $request, Closure $next, $role)
    // {
    //     if($role == 'User'){
    //         $user = Auth::user()->role_id;
    //         if($user != 2){
    //             return redirect('/login');
    //         }

    //     }
    //     if($role == 'Admin'){
    //         $admin = Auth::user()->role_id;
    //         if($admin != 1){
    //             return redirect('/login');
    //         }

    //     }
       
    //     return $next($request);

    // }

}
