<?php

class BankServiceController extends WebServiceController {

    public function getNeeded()
    {
        // Select all banks along with there need.
        $banks = DB::select('SELECT * FROM bank');

        foreach($banks as $bank) {

            $blood_needed = DB::select(
                'SELECT blood_type FROM bag
                WHERE bag.bank_id = '.$bank->bank_id.'
                GROUP BY(blood_type)
                HAVING COUNT(*) < 2'
            );

            $bank->needed = $blood_needed;

        }

        return Response::json($banks);
    }

} 