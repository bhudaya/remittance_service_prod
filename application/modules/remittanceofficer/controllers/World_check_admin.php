<?php

use Iapps\Common\Core\IpAddress;
use Iapps\Common\Helper\ResponseHeader;
use Iapps\RemittanceService\WorldCheck\WorldCheckRepository;
use Iapps\RemittanceService\WorldCheck\WorldCheckService;
use Iapps\RemittanceService\WorldCheck\WorldCheck;
use Iapps\RemittanceService\Common\FunctionCode;
use Iapps\Common\Microservice\AccountService\AccessType;

class World_check_admin extends Admin_Base_Controller{

    protected $_service;
    private   $required_array = array('user_profile_id','status');

    function __construct()
    {
        parent::__construct();

        $this->load->model('remittanceofficer/World_check_service_model');
        $repo = new WorldCheckRepository($this->World_check_service_model);
        $this->_service = new WorldCheckService($repo);
        $this->_service->setIpAddress(IpAddress::fromString($this->_getIpAddress()));
    }

    public function getWorldCheckProfileByUserProfileId()
    {
        if( !$user_id = $this->_getUserProfileId(FunctionCode::ADMIN_GET_WORLD_CHECK, AccessType::READ) )
            return false;

        if( !$this->is_required($this->input->get(), array('user_profile_id')))
        {
            return false;
        }

        $user_profile_id = $this->input->get("user_profile_id");

        if($result = $this->_service->getWorldCheckProfileInfo($user_profile_id))
        {
            $this->_respondWithSuccessCode($this->_service->getResponseCode(),array('result' => $result));
            return true;
        }

        $this->_respondWithCode($this->_service->getResponseCode(), ResponseHeader::HEADER_NOT_FOUND);
        return false;
    }

    public function getWorldCheckProfileInfoByUserProfileIDArr()
    {
        if( !$user_id = $this->_getUserProfileId(FunctionCode::ADMIN_GET_WORLD_CHECK, AccessType::READ) )
            return false;

        if (!$this->is_required($this->input->post(), array('user_profile_id'))) {
            return false;
        }

        $user_profile_id_arr = $this->input->post("user_profile_id");

        if($result = $this->_service->getWorldCheckProfileInfoByUserProfileIDArr($user_profile_id_arr))
        {
            $this->_respondWithSuccessCode($this->_service->getResponseCode(),array('result' => $result));
            return true;
        }

        $this->_respondWithCode($this->_service->getResponseCode(), ResponseHeader::HEADER_NOT_FOUND);
        return false;
    }

}