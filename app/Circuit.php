<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Circuit extends Model
{
    public function mostPopular()
    {
        return json_encode(DB::select('
            SELECT
                C.name,
                COUNT(R.circuit_id) AS races
            FROM
                circuits C
            JOIN
                races R
                ON
                    R.circuit_id = C.id
            GROUP BY
                R.circuit_id
            ORDER BY
                COUNT(R.circuit_id) DESC
        '));
    }
}
