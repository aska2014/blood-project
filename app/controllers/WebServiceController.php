<?php
class WebServiceController extends BaseController {

    protected $apiKey = 'IGJFDGXCV34';

    public function __construct() {
        // Check api key in every request
        $this->checkApiKey();
    }

    /**
     * @throws Exception
     * @return bool
     */
    protected function checkApiKey()
    {
        if($this->apiKey !== Input::get('key')) {

            throw new Exception("You don't have access to this resource.");
        }
    }

} 