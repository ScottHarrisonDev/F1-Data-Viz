<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Nation extends Model
{
    public static function mostSuccessful()
    {
        return json_encode(DB::select('
            SELECT
                D.nationality,
                COUNT(RE.id) AS podiums
            FROM
                results RE
            JOIN
                drivers D
                ON
                    D.id = RE.driver_id
            WHERE
                position <= 3
            GROUP BY
                D.nationality
            ORDER BY
                COUNT(RE.id) DESC
            LIMIT
                10
        '));
    }

    public function mostPopular()
    {
        return json_encode(DB::select('
            SELECT
                nationality,
                COUNT(id) AS count
            FROM
                drivers
            GROUP BY
                nationality
            ORDER BY
                COUNT(id) DESC;
        '));
    }
}
