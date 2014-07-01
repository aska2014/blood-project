<?php


class DonorServiceController  extends WebServiceController {

    /**
     * Get donor profile
     */
    public function getProfile()
    {
        $mobile = Input::get('mobile');

        $profile = DB::select(
            'SELECT donor.donor_id, full_name, gender, address, city_name, blood_type FROM donor
            INNER JOIN donor_contact ON donor.donor_id = donor_contact.donor_id
            WHERE donor_contact.contact_type = "mobile" AND donor_contact.content = "'.$mobile.'"');

        return Response::json(count($profile) > 0 ? $profile[0] : null);
    }

    /**
     * Update donor location
     */
    public function getUpdateLocation()
    {
        $lat = Input::get('gps_latitude');
        $lon = Input::get('gps_longitude');
        $mobile = Input::get('mobile');

        // Check if all inputs are not empty
        if($lat && $lon && $mobile)
        {
            // Sql statement to update latitude and longitude depending on the mobile number
            DB::update(
                'Update donor
                SET gps_latitude = "'.$lat.'", gps_longitude = "'.$lon.'"
                WHERE donor_id IN
                (
                    SELECT x.donor_id FROM (
                        SELECT donor.donor_id FROM donor
                        INNER JOIN donor_contact ON donor_contact.donor_id = donor.donor_id
                        WHERE content = "'.$mobile.'"
                    ) AS x
                )'
            );
        }
    }

} 