<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use App\Models\TypeVehicule;
use App\Models\Reservation;
use App\Models\User;
use App\Notifications\Approuver;
use Illuminate\Http\Request;

class ResrvBookingController extends Controller
{
    public function new_booking($id)
    {
        $vehicules = Vehicule::all();
        $vehicules = Vehicule::find($id);
        $type_vehicule = TypeVehicule::find($id);
        $user = User::find($id);
        return view('acceuil.booking', compact('vehicules', 'type_vehicule', 'user'));
    }

    public function add_booking(Request $request)
    {
        $this->validate($request, [
            'id_vehicle' => 'required',
            'User' ,
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'place_of_care' => 'required',
            'place_of_deposit' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required',
            'price_per_hour' => 'required',
            'heur' => 'required',
            'prix' => 'required',
        ]);
        $data = $request->all();
        // Vérification des reservations existantes qui chevauchent la plage de date demandée
        $existing_reservation = Reservation::where('id_vehicle', $data['id_vehicle'])
            ->where(function ($query) use ($data) {
                $query->whereBetween('start_date', [$data['start_date'], $data['end_date']])
                    ->orWhereBetween('end_date', [$data['start_date'], $data['end_date']]);
            })
            ->first();

        if ($existing_reservation) {
            // si  la reservation est trouvé, return an error message
            return redirect('/voiture')->with('error', 'Le véhicule est déjà réservé pour cette période.');
        }

        reservation::create($data);
        return redirect('/voiture')->with('ajouter', 'Réservation envoyer avec succes!');
    }
}
