// ...existing code...
use App\Models\Reservation;

class DashboardController extends Controller
{
    // ...existing code...

    public function reservations()
    {
        $reservations = Reservation::with('space')->get();
        return view('dashboard.reservations', compact('reservations'));
    }
}
// ...existing code...
