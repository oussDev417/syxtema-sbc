<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role_or_permission:Super-Admin|edit articles']);
    }

    public function index()
    {
        $reservations = Reservation::with('space')->paginate(10);
        return view('Dashboard.Reservations.index', compact('reservations'));
    }
}
