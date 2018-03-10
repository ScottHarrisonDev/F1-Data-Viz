<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Driver extends Model
{
    public function mostSuccessfulByDecade()
    {
        return json_encode(DB::select("
            SELECT z.podiums, 
                z.decade, 
                z.first_name 
            FROM (SELECT Concat(10 * Floor(Year(date) / 10), 's') AS decade, 
                        Count(RE.driver_id)                      AS podiums, 
                        d.first_name                             AS first_name 
                    FROM   results RE 
                        JOIN races R 
                            ON R.id = RE.race_id 
                        JOIN drivers D 
                            ON D.id = RE.driver_id 
                    WHERE  RE.position <= 3 
                    GROUP  BY decade, 
                            D.first_name) z, 
                (SELECT y.decade       AS decade, 
                        Max(y.podiums) AS podiums 
                    FROM   (SELECT Concat(10 * Floor(Year(date) / 10), 's') AS decade, 
                                Count(RE.driver_id)                      AS podiums 
                            FROM   results RE, 
                                races R, 
                                drivers D 
                            WHERE  R.id = RE.race_id 
                                AND D.id = RE.driver_id 
                                AND RE.position <= 3 
                            GROUP  BY decade, 
                                    D.first_name) y 
                    GROUP  BY y.decade) a 
            WHERE  a.decade = z.decade 
                AND a.podiums = z.podiums 
        "));
    }
}