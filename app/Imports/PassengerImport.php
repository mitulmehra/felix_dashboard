<?php

namespace App\Imports;

use App\Passenger;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class PassengerImport implements ToModel
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        if (!isset($row[0])) {
            return null;
        }
        return new Passenger([
            'traveler_name'     => $row[0],
            'passenger_name'    => $row[1], 
            'age'    => $row[2], 
            'gender'    => $row[3], 
            'booking_date'    => $row[4], 
            'journey_date'    => $row[5], 
            'booking_from'    => $row[6], 
            'booking_to'    => $row[7], 
            'airport_name'    => $row[8], 
            'flight_time'    => $row[9]            
        ]);
    }
}
