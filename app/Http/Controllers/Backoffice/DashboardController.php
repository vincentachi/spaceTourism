<?php
namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backoffice.dashboard');
    }

}