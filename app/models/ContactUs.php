<?php


class ContactUs {

    public static function saveToDB($name, $email, $message)
    {
        // 3lamet elestfham de btetbdl bl$name

        DB::insert('INSERT INTO contact_us(name, email, message) VALUES(?, ?, ?)', array($name, $email, $message));
    }

} 