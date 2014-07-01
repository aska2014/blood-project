<?php


class DonorServiceController  extends BaseController {

    protected $apiKey = 'IGJFDGXCV34';

    /**
     * Update donor location
     */
    public function getUpdateLocation()
    {
        if(! $this->checkApiKey()) {

            throw new Exception("Api key is not correct");
        }

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

    /**
     * @return bool
     */
    protected function checkApiKey()
    {
        return $this->apiKey === Input::get('key');
    }

} 