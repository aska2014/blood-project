<?php

class Account {

    public static function exists($fullname, $cardId)
    {
        // n3ml nfs etre2a hna kman
        // Hna hy3ml select lldonor da
        $donor = DB::select('SELECT * FROM donor WHERE full_name = ? AND card_id=?', array($fullname, $cardId));

        return !empty($donor);
    }


    public static function find($cardId)
    {
        $donor = DB::select('SELECT * FROM donor WHERE card_id=?', array($cardId));

        return $donor[0];
    }
}