<?php

namespace Iapps\RemittanceService\Common;


/*
* Message Code for Account Service
* starts with 4***
*/
class MessageCode
{

    // regulatory report
    const CODE_GET_REGULATORY_REPORT_FAILED  = 3001;
    const CODE_GET_REGULATORY_REPORT_SUCCESS = 3002;

    // attribute
    const CODE_ATTRIBUTE_FOUND = 3056;
    const CODE_ATTRIBUTE_NOT_FOUND = 3057;
    const CODE_ATTRIBUTE_VALUES_ADDED = 3058;
    const CODE_ADD_ATTRIBUTE_VALUES_FAILED = 3059;
    const CODE_INVALID_ATTRIBUTE_VALUE = 3061;
    const CODE_RECIPIENT_ATTRIBUTE_FOUND = 3062;
    const CODE_RECIPIENT_ATTRIBUTE_NOT_FOUND = 3063;
    const CODE_RECIPIENT_ATTRIBUTE_ADD_SUCCESS = 3064;
    const CODE_RECIPIENT_ATTRIBUTE_ADD_FAILED = 3065;
    const CODE_RECIPIENT_ATTRIBUTE_DELETE_SUCCESS = 3066;
    const CODE_RECIPIENT_ATTRIBUTE_DELETE_FAILED = 3067;
    const CODE_INVALID_RECIPIENT_TYPE = 3069;

    const CODE_REMITTANCE_ATTRIBUTE_FOUND = 3070;
    const CODE_REMITTANCE_ATTRIBUTE_NOT_FOUND = 3071;
    const CODE_REMITTANCE_ATTRIBUTE_ADD_SUCCESS = 3072;
    const CODE_REMITTANCE_ATTRIBUTE_ADD_FAILED = 3073;
    const CODE_REMITTANCE_ATTRIBUTE_DELETE_SUCCESS = 3074;
    const CODE_REMITTANCE_ATTRIBUTE_DELETE_FAILED = 3075;

    const CODE_REFUND_REQUEST_ATTRIBUTE_FOUND = 3076;
    const CODE_REFUND_REQUEST_ATTRIBUTE_NOT_FOUND = 3077;
    const CODE_REFUND_REQUEST_ATTRIBUTE_ADD_SUCCESS = 3078;
    const CODE_REFUND_REQUEST_ATTRIBUTE_ADD_FAILED = 3079;
    const CODE_REFUND_REQUEST_ATTRIBUTE_DELETE_SUCCESS = 3080;
    const CODE_REFUND_REQUEST_ATTRIBUTE_DELETE_FAILED = 3081;

    const CODE_INVALID_COUNTRY = 3008;
    const CODE_INVALID_SALARYCURRENCY = 3040;
    const CODE_INVALID_SERVICE_PROVIDER = 3718;
    const CODE_ADD_REMITTANCE_SERVICE_CONFIG_SUCCESS = 4000;
    const CODE_ADD_REMITTANCE_SERVICE_CONFIG_FAILED = 4001;
    const CODE_GET_REMITTANCE_SERVICE_CONFIG_SUCCESS = 4002;
    const CODE_GET_REMITTANCE_SERVICE_CONFIG_FAILED = 4003;
    const CODE_EDIT_REMITTANCE_SERVICE_CONFIG_SUCCESS = 4004;
    const CODE_EDIT_REMITTANCE_SERVICE_CONFIG_FAILED = 4005;
    const CODE_INVALID_CHANNEL = 4006;

    const CODE_ADD_EXCHANGE_RATE_SUCCESS = 4100;
    const CODE_ADD_EXCHANGE_RATE_FAILED = 4101;
    const CODE_GET_EXCHANGE_RATE_SUCCESS = 4102;
    const CODE_GET_EXCHANGE_RATE_FAILED = 4103;
    const CODE_GET_EXCHANGE_RATE_LIST_SUCCESS = 4104;
    const CODE_GET_EXCHANGE_RATE_LIST_FAILED = 4105;
    const CODE_EDIT_EXCHANGE_RATE_SUCCESS = 4106;
    const CODE_EDIT_EXCHANGE_RATE_FAILED = 4107;
    const CODE_DELETE_EXCHANGE_RATE_SUCCESS = 4108;
    const CODE_DELETE_EXCHANGE_RATE_FAILED = 4109;
    const CODE_GATHER_EXCHANGE_RATE_SUCCESS = 4110;
    const CODE_GATHER_EXCHANGE_RATE_FAILED = 4111;
    const CODE_GATHER_EXCHANGE_RATE_NOTNEEDUPDATE = 4112;
    const CODE_CHANGE_EXCAHNGE_RATE_SUCCESS = 4113;
    const CODE_CHANGE_EXCHANGE_RATE_FAILED = 4114;
    const CODE_CHANGE_EXCAHNGE_TIME_SUCCESS = 4115;
    const CODE_CHANGE_EXCHANGE_TIME_FAILED = 4116;
    const CODE_PREVIOUS_RATE_REQUEST_ACTIVE = 4117;
    const CODE_RATE_STATUS_UPDATE_SUCCESS = 4118;
    const CODE_RATE_STATUS_UPDATE_FAILED = 4119;
    const CODE_GET_XEACCOUNT_INFO_SUCCESS = 4120;
    const CODE_GET_XEACCOUNT_INFO_FAILED = 4121;
    const CODE_ADMIN_IS_NOT_ALLOWED_TO_EDIT = 4122;
    const CODE_FAILED_TO_ADD_PROFIT_COST = 4123;
    const CODE_FAILED_TO_COMPUTE_RATES = 4124;
    const CODE_FAILED_TO_REQUEST = 4125;

    const CODE_PAYMENT_REQUEST_FAILED = 4126;
    const CODE_REMITTANCE_RECORD_NOT_FOUND = 4127;
    const CODE_REMITTANCE_CANCELLED_SUCCESS = 4128;
    const CODE_REMITTANCE_CANCELLED_FAILED = 4129;

    const CODE_GET_REMITTANCE_TRANSACTION_SUCCESS = 4130;
    const CODE_GET_REMITTANCE_TRANSACTION_FAILED = 4131;
    const CODE_GET_REMITTANCE_TRANSACTION_NOT_FOUND = 4132;
    const CODE_ADD_REMITTANCE_TRANSACTION_SUCCESS = 4133;
    const CODE_ADD_REMITTANCE_TRANSACTION_FAILED = 4134;
    const CODE_EDIT_REMITTANCE_TRANSACTION_SUCCESS = 4135;
    const CODE_EDIT_REMITTANCE_TRANSACTION_FAILED = 4136;

    const CODE_LIST_REMITTANCE_TRANSACTION_SUCCESS = 4137;
    const CODE_LIST_REMITTANCE_TRANSACTION_FAILED = 4138;
    const CODE_LIST_REMITTANCE_TRANSACTION_NOT_FOUND = 4139;

    const CODE_LIST_REMITTANCE_TRANSACTION_ITEM_SUCCESS = 4140;
    const CODE_LIST_REMITTANCE_TRANSACTION_ITEM_FAILED = 4141;

    const CODE_TRANSACTION_CANCELLED_SUCCESS = 4142;
    const CODE_TRANSACTION_CANCELLED_FAILED = 4143;
    const CODE_REMITTANCE_APPROVAL_SUCCESS = 4144;
    const CODE_REMITTANCE_APPROVAL_FAILED = 4145;
    const CODE_REMITTANCE_REJECTION_SUCCESS = 4146;
    const CODE_REMITTANCE_REJECTION_FAILED = 4147;
    const CODE_INVALID_ADDITIONAL_INFO = 4147;
    const CODE_USER_IS_NOT_QUALIFIED = 4148;
    const CODE_USER_IS_HIGH_RISK = 4149;
    const CODE_USER_IS_NOT_KYC = 4150;
    const CODE_USER_NOT_FOUND = 4151;
    const CODE_REMITTANCE_REQUEST_SUCCESS = 4152;
    const CODE_GET_PROMO_FAILED = 4153;

    const CODE_GET_REMITTANCE_PROFILE_SUCCESS = 4154;
    const CODE_GET_REMITTANCE_PROFILE_FAILED = 4155;
    const CODE_ADD_REMITTANCE_PROFILE_SUCCESS = 4156;
    const CODE_ADD_REMITTANCE_PROFILE_FAILED = 4157;

    const CODE_TRANSACTION_VOIDED_SUCCESS = 4158;
    const CODE_TRANSACTION_VOIDED_FAILED = 4159;
    const CODE_TRANSACTION_TYPE_IS_NOT_SUPPORTED_FOR_VOID = 4160;
	
	const CODE_MAX_LIMIT_REACHED = 4161;
    const CODE_RECIPIENT_IS_NOT_QUALIFIED = 4162;
    const CODE_UPDATE_SETTING_SUCCESS = 4163;
    const CODE_UPDATE_SETTING_FAILED = 4164;
    const CODE_GET_SETTING_SUCCESS = 4165;
    const CODE_GET_SETTING_FAILED = 4166;

    //remittance_configuration
    const CODE_GET_REMITTANCE_CONFIG_SUCCESS = 4201;
    const CODE_REMITTANCE_CONFIG_NOT_FOUND = 4202;
    const CODE_ADD_REMITTANCE_CONFIG_SUCCESS = 4203;
    const CODE_ADD_REMITTANCE_CONFIG_FAILED = 4204;
    const CODE_EDIT_REMITTANCE_CONFIG_SUCCESS = 4205;
    const CODE_EDIT_REMITTANCE_CONFIG_FAILED = 4206;
    const CODE_GET_REMITTANCE_CONFIG_FAILED = 4207;
    const CODE_REMITTANCE_CONFIG_IS_REJECTED = 4208;
    const CODE_INVALID_FEE_TYPE = 4210;
    
    const CODE_REMITTANCE_CONFIG_INVALID_EXCHANGE_RATE                   = 4221;
    const CODE_REMITTANCE_CONFIG_PROFIT_SHARING_NOT_FOUND                = 4223;
    const CODE_REMITTANCE_CONFIG_PAYMENT_MODE_FEE_NOT_FOUND              = 4225;
    const CODE_REMITTANCE_CONFIG_PAYMENT_MODE_COST_NOT_FOUND             = 4227;
    const CODE_REMITTANCE_CONFIG_ALREADY_EXISTS                          = 4229;

    const CODE_REMITTANCE_CONFIG_EXCHANGE_RATE_NOT_APPROVED_YET          = 4231;
    const CODE_REMITTANCE_CONFIG_PROFIT_SHARING_NOT_APPROVED_YET         = 4233;
    const CODE_REMITTANCE_CONFIG_PRICING_CONFIG_NOT_APPROVED_YET         = 4235;

    const CODE_RECIPIENT_FOUND = 4296;
    const CODE_RECIPIENT_NOT_FOUND = 4297;
    const CODE_UPDATE_RECIPIENT_SUCCESS = 4298;
    const CODE_UPDATE_RECIPIENT_FAIL = 4299;
    const CODE_ADD_RECIPIENT_FAIL = 4300;
    const CODE_ADD_RECIPIENT_SUCCESS = 4301;
    const CODE_RECIPIENT_LIST_FOUND = 4302;
    const CODE_RECIPIENT_LIST_NOT_FOUND = 4303;
    const CODE_INVALID_RECIPIENT = 4304;
    const CODE_PURCHASE_REMITTANCE_SUCCESS = 4305;
    const CODE_PURCHASE_REMITTANCE_FAIL = 4306;
    const CODE_INVALID_PAYMENT_AMOUNT = 4307;
    const CODE_MAKE_PAYMENT_FAIL = 4308;
    const CODE_RECIPIENT_EXISTS = 4309;
    const CODE_RECIPIENT_CANNOT_EDIT_MOBILE_NUMBER = 4310;

    const CODE_ADD_COLLECTION_INFO_SUCCESS = 4311;
    const CODE_ADD_COLLECTION_INFO_FAILED = 4312;

    const CODE_COMPANY_LIST_FOUND = 4313;
    const CODE_COMPANY_LIST_NOT_FOUND = 4314;
    const CODE_COMPLETE_PROFILE_SUCCESS = 4315;
    const CODE_COMPLETE_PROFILE_FAILED = 4316;
    const CODE_INVALID_SYSTEM_CODE = 4317;
    const CODE_REMCO_NOT_FOUND = 4318;
    const CODE_VERIFY_PROFILE_SUCCESS = 4319;
    const CODE_VERIFY_PROFILE_FAILED = 4320;
    const CODE_USER_CREDIT_FAILED = 4321;
    
    const CODE_EDIT_COLLECTION_INFO_SUCCESS = 4322;
    const CODE_EDIT_COLLECTION_INFO_FAILED = 4323;
    const CODE_PROFILE_IS_ALREADY_COMPLETED = 4324;
    const CODE_GET_COLLECTION_INFO_SUCCESS = 4325;
    const CODE_GET_COLLECTION_INFO_FAILED = 4326;
        
    const CODE_GET_DATA_SUCCESS = 4327;
    const CODE_GET_DATA_FAILED = 4328;

    const CODE_CHECK_PROFILE_SUCCESS = 4330;
    const CODE_VERIFY_RECIPIENT_SUCCESS = 4331;
    const CODE_VERIFY_RECIPIENT_FAILED = 4332;
    const CODE_GET_REMITTANCE_RECIPIENT_FAILED = 4333;
    const CODE_GET_REMITTANCE_RECIPIENT_SUCCESS = 4334;


    

    // world check
    const CODE_INVALID_WORLD_CHECK_STATUS = 4401;
    const CODE_WORLD_CHECK_SAVE_SUCCESS = 4402;
    const CODE_WORLD_CHECK_SAVE_FAIL = 4403;
    const CODE_GET_WORLD_CHECK_PROFILE_SUCCESS = 4404;
    const CODE_GET_WORLD_CHECK_PROFILE_FAIL = 4405;

    // user risk level
    const CODE_INVALID_USER_RISK_LEVEL_STATUS = 4411;
    const CODE_USER_RISK_LEVEL_UPDATE_SUCCESS = 4412;
    const CODE_USER_RISK_LEVEL_UPDATE_FAIL = 4413;
    const CODE_APPROVAL_USER_RISK_LEVEL_SUCCESS = 4414;
    const CODE_APPROVAL_USER_RISK_LEVEL_FAIL = 4415;
    const CODE_GET_USER_RISK_LEVEL_SUCCESS = 4416;
    const CODE_GET_USER_RISK_LEVEL_FAIL = 4417;
    const CODE_ALREADY_HAVE_PENDING_RISK_LEVEL_REQUEST = 4419;

    // upload Document
    const CODE_UPLOAD_DOCUMENT_SUCCESS = 4420;
    const CODE_UPLOAD_DOCUMENT_FAIL = 4421;
    const CODE_GET_DOCUMENT_SUCCESS = 4422;
    const CODE_GET_DOCUMENT_FAIL = 4423;
    const CODE_REMOVE_DOCUMENT_SUCCESS = 4424;
    const CODE_REMOVE_DOCUMENT_FAIL = 4425;

    
    const CODE_CHECK_USER_RISK_LEVEL_PASS = 4442;
    const CODE_CHECK_USER_RISK_LEVEL_FAIL = 4443;



    // profit sharing
    const CODE_UPDATE_PROFIT_SHARING_SUCCESS = 4460;
    const CODE_UPDATE_PROFIT_SHARING_FAIL = 4461;
    const CODE_LIST_PROFIT_SHARING_SUCCESS = 4462;
    const CODE_LIST_PROFIT_SHARING_FAIL = 4463;
    const CODE_GET_PROFIT_SHARING_SUCCESS = 4464;
    const CODE_GET_PROFIT_SHARING_FAIL = 4465;
    const CODE_ALREADY_HAVE_PENDING_PROFIT_SHARING = 4467;

    const CODE_INVALID_CORPORATE_ACCOUNT =  4500;
    const CODE_INVALID_IN_CONVERSION_REMITTANCE_SERVICE_ID = 4501;
    const CODE_INVALID_OUT_CONVERSION_REMITTANCE_SERVICE_ID = 4502;
    const CODE_CREATE_CHANNEL_CONFIG_SUCCESS = 4503;
    const CODE_CREATE_CHANNEL_SAME_PARTNER_FAIL =  4504;
    const CODE_REMITTANCE_SERVICE_NOT_EXIST =  4505;
    const CODE_GET_CORPORATE_SERVICE_ID_NOT_EXIST = 4506;
    const CODE_ADD_CORPORATE_SERVICE_FAILED = 9106;

    //pricing configuration(payment_mode,payment_mode_fee,payment_mode_fee_group,payment_mode_cost,payment_mode_cost_group)
    // 4600 - 4647
    const CODE_LIST_CORPORATE_PAYMENT_MODE_SUCCESS                  = 4600;
    const CODE_LIST_CORPORATE_PAYMENT_MODE_FAIL                     = 4601;
    const CODE_ADD_CORPORATE_PAYMENT_MODE_SUCCESS                   = 4602;
    const CODE_ADD_CORPORATE_PAYMENT_MODE_FAIL                      = 4603;
    const CODE_EDIT_CORPORATE_PAYMENT_MODE_SUCCESS                  = 4604;
    const CODE_EDIT_CORPORATE_PAYMENT_MODE_FAIL                     = 4605;
    const CODE_EDIT_ACTIVE_CORPORATE_PAYMENT_MODE_SUCCESS           = 4606;
    const CODE_EDIT_ACTIVE_CORPORATE_PAYMENT_MODE_FAIL              = 4607;
    const CODE_CORPORATE_PAYMENT_MODE_NOT_FOUND                     = 4608;
    const CODE_EXISTS_COROPORATE_PAYMENT_MODE                       = 4609;
    
    const CODE_LIST_CORPORATE_PAYMENT_MODE_FEE_GROUP_SUCCESS        = 4610;
    const CODE_LIST_CORPORATE_PAYMENT_MODE_FEE_GROUP_FAIL           = 4611;
    const CODE_ADD_CORPORATE_PAYMENT_MODE_FEE_GROUP_SUCCESS         = 4612;
    const CODE_ADD_CORPORATE_PAYMENT_MODE_FEE_GROUP_FAIL            = 4613;
    const CODE_GET_CORPORATE_PAYMENT_MODE_FEE_GROUP_SUCCESS         = 4614;
    const CODE_GET_CORPORATE_PAYMENT_MODE_FEE_GROUP_FAIL            = 4615;
    const CODE_EDIT_CORPORATE_PAYMENT_MODE_FEE_GROUP_SUCCESS        = 4616;
    const CODE_EDIT_CORPORATE_PAYMENT_MODE_FEE_GROUP_FAIL           = 4617;
    
    const CODE_LIST_CORPORATE_PAYMENT_MODE_FEE_SUCCESS              = 4620;
    const CODE_LIST_CORPORATE_PAYMENT_MODE_FEE_FAIL                 = 4621;
    const CODE_ADD_CORPORATE_PAYMENT_MODE_FEE_SUCCESS               = 4622;
    const CODE_ADD_CORPORATE_PAYMENT_MODE_FEE_FAIL                  = 4623;
    const CODE_REMOVE_CORPORATE_PAYMENT_MODE_FEE_SUCCESS            = 4624;
    const CODE_REMOVE_CORPORATE_PAYMENT_MODE_FEE_FAIL               = 4625;
    const CODE_EDIT_CORPORATE_PAYMENT_MODE_FEE_SUCCESS              = 4626;
    const CODE_EDIT_CORPORATE_PAYMENT_MODE_FEE_FAIL                 = 4627;
    const CODE_INVALID_CORPORATE_PAYMENT_MODE_FEE_AMOUNT            = 4628;
    const CODE_INVALID_CORPORATE_PAYMENT_MODE_FEE_MULTITIER_TYPE    = 4629;
    
    const CODE_LIST_CORPORATE_PAYMENT_MODE_COST_GROUP_SUCCESS        = 4630;
    const CODE_LIST_CORPORATE_PAYMENT_MODE_COST_GROUP_FAIL           = 4631;
    const CODE_ADD_CORPORATE_PAYMENT_MODE_COST_GROUP_SUCCESS         = 4632;
    const CODE_ADD_CORPORATE_PAYMENT_MODE_COST_GROUP_FAIL            = 4633;
    const CODE_GET_CORPORATE_PAYMENT_MODE_COST_GROUP_SUCCESS         = 4634;
    const CODE_GET_CORPORATE_PAYMENT_MODE_COST_GROUP_FAIL            = 4635;
    const CODE_EDIT_CORPORATE_PAYMENT_MODE_COST_GROUP_SUCCESS        = 4636;
    const CODE_EDIT_CORPORATE_PAYMENT_MODE_COST_GROUP_FAIL           = 4637;
    const CODE_CORPORATE_PAYMENT_MODE_FEE_GROUP_ALREADY_EXISTS_PENDING = 4639;
    
    const CODE_LIST_CORPORATE_PAYMENT_MODE_COST_SUCCESS              = 4640;
    const CODE_LIST_CORPORATE_PAYMENT_MODE_COST_FAIL                 = 4641;
    const CODE_ADD_CORPORATE_PAYMENT_MODE_COST_SUCCESS               = 4642;
    const CODE_ADD_CORPORATE_PAYMENT_MODE_COST_FAIL                  = 4643;
    const CODE_REMOVE_CORPORATE_PAYMENT_MODE_COST_SUCCESS            = 4644;
    const CODE_REMOVE_CORPORATE_PAYMENT_MODE_COST_FAIL               = 4645;
    const CODE_EDIT_CORPORATE_PAYMENT_MODE_COST_SUCCESS              = 4646;
    const CODE_EDIT_CORPORATE_PAYMENT_MODE_COST_FAIL                 = 4647;
    const CODE_CORPORATE_PAYMENT_MODE_COST_GROUP_ALREADY_EXISTS_PENDING = 4649;
 
    
    const CODE_PRICING_CONFIG_LISTING_SUCCESS                            = 4650;
    const CODE_PRICING_CONFIG_LISTING_NOT_FOUND                          = 4651;

    const CODE_COMPLETE_CASHOUT_REMITTANCE_SUCCESS = 4701;
    const CODE_COMPLETE_CASHOUT_REMITTANCE_FAIL = 4702;

    const CODE_JOB_PROCESS_FAILED = 4703;
    const CODE_JOB_PROCESS_PASSED = 4704;



    //All deposit tracker codes here
    
    const CONST_USER_NOT_ACCESSIBLE                = 3021;
    const CODE_ADD_DEPOSIT_SUCCESS                 = 4800;
    const CODE_ADD_DEPOSIT_FAILED                  = 4801;
    const CODE_EDIT_DEPOSIT_SUCCESS                = 4802;
    const CODE_EDIT_DEPOSIT_FAILED                 = 4803;
    const CODE_CANCEL_DEPOSIT_SUCCESS              = 4804;
    const CODE_CANCEL_DEPOSIT_FAILED               = 4805;
    const CODE_APPROVE_DEPOSIT_SUCCESS             = 4806;
    const CODE_APPROVE_DEPOSIT_FAILED              = 4807;
    const CODE_REJECT_DEPOSIT_SUCCESS              = 4808;
    const CODE_REJECT_DEPOSIT_FAILED               = 4809;
    const CODE_GET_DEPOSIT_SUCCESS                 = 4810;
    const CODE_GET_DEPOSIT_FAILED                  = 4811;
    const CODE_LIST_DEPOSIT_SUCCESS                = 4812;
    const CODE_LIST_DEPOSIT_FAILED                 = 4813;
    const CODE_LIST_PENDING_DEPOSIT_SUCCESS        = 4814;
    const CODE_LIST_PENDING_DEPOSIT_FAILED         = 4815;
    const CODE_ADD_TOPUP_SUCCESS                   = 4816;
    const CODE_ADD_TOPUP_FAILED                    = 4817;
    const CODE_CANCEL_TOPUP_SUCCESS                = 4818;
    const CODE_CANCEL_TOPUP_FAILED                 = 4819;
    const CODE_APPROVE_TOPUP_SUCCESS               = 4820;
    const CODE_APPROVE_TOPUP_FAILED                = 4821;
    const CODE_REJECT_TOPUP_SUCCESS                = 4822;
    const CODE_REJECT_TOPUP_FAILED                 = 4823;
    const CODE_GET_TOPUP_SUCCESS                   = 4824;
    const CODE_GET_TOPUP_FAILED                    = 4825;
    const CODE_LIST_TOPUP_SUCCESS                  = 4826;
    const CODE_LIST_TOPUP_FAILED                   = 4827;
    const CODE_LIST_PENDING_TOPUP_SUCCESS          = 4828;
    const CODE_LIST_PENDING_TOPUP_FAILED           = 4829;
    const CODE_ADD_DEDUCTION_SUCCESS               = 4830;
    const CODE_ADD_DEDUCTION_FAILED                = 4831;
    const CODE_CANCEL_DEDUCTION_SUCCESS            = 4832;
    const CODE_CANCEL_DEDUCTION_FAILED             = 4833;
    const CODE_APPROVE_DEDUCTION_SUCCESS           = 4834;
    const CODE_APPROVE_DEDUCTION_FAILED            = 4835;
    const CODE_REJECT_DEDUCTION_SUCCESS            = 4836;
    const CODE_REJECT_DEDUCTION_FAILED             = 4837;
    const CODE_GET_DEDUCTION_SUCCESS               = 4838;
    const CODE_GET_DEDUCTION_FAILED                = 4839;
    const CODE_LIST_DEDUCTION_SUCCESS              = 4840;
    const CODE_LIST_DEDUCTION_FAILED               = 4841;
    const CODE_LIST_PENDING_DEDUCTION_SUCCESS      = 4842;
    const CODE_LIST_PENDING_DEDUCTION_FAILED       = 4843;
    const CODE_PROCESS_DEDUCTION_SUCCESS           = 4844;
    const CODE_PROCESS_DEDUCTION_FAILED            = 4845;
    const CODE_ADD_HISTORY_SUCCESS                 = 4846;
    const CODE_ADD_HISTORY_FAILED                  = 4847;
    const CODE_GET_HISTORY_LIST_SUCCESS            = 4848;
    const CODE_GET_HISTORY_LIST_FAILED             = 4849;
    const CODE_GET_TRANSACTION_SUCCESS             = 4850;
    const CODE_GET_TRANSACTION_FAILED              = 4851;

    const CODE_PHOTO_UPLOAD_SUCCESS                = 4852;
    const CODE_PHOTO_UPLOAD_FAILED                 = 4853;

    const CODE_GET_TRACKERS_SUCCESS                = 4854;
    const CODE_GET_TRACKERS_FAILED                 = 4855;
    const CODE_LIST_TRACKERS_SUCCESS               = 4856;
    const CODE_LIST_TRACKERS_FAILED                = 4857;

    const CODE_LIST_TRANSACTION_SUCCESS            = 4858;
    const CODE_LIST_TRANSACTION_FAILED             = 4859;
    const CODE_GET_PENDING_DEPOSIT_SUCCESS         = 4860;
    const CODE_GET_PENDING_DEPOSIT_FAILED          = 4861;


    const CODE_GET_DEPOSIT_USER_SUCCESS            = 4862;
    const CODE_GET_DEPOSIT_USER_FAILED             = 4863;
    const CODE_LIST_DEPOSIT_USER_SUCCESS           = 4864;
    const CODE_LIST_DEPOSIT_USER_FAILED            = 4865;
    const CODE_ADD_DEPOSIT_USER_SUCCESS            = 4866;
    const CODE_ADD_DEPOSIT_USER_FAILED             = 4867;
    const CODE_EDIT_DEPOSIT_USER_SUCCESS           = 4868;
    const CODE_EDIT_DEPOSIT_USER_FAILED            = 4869;
    const CODE_GET_CUSTOMER_REPORT_SUCCESS         = 4872;

    //deposit tracker codes ends here


    const CODE_COLLECTION_INFO_VALIDATE_FAILED = 4870;

    const CODE_COMPANY_GET_SUCCESS = 4880;
    const CODE_COMPANY_GET_FAILED = 4881;
    const CODE_COMPANY_EDIT_SUCCESS = 4882;
    const CODE_COMPANY_EDIT_FAILED = 4883;
}