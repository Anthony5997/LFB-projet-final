<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/errors/billing_setup_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Errors;

class BillingSetupError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/ads/googleads/v8/errors/billing_setup_error.protogoogle.ads.googleads.v8.errors"�
BillingSetupErrorEnum"�
BillingSetupError
UNSPECIFIED 
UNKNOWN\'
#CANNOT_USE_EXISTING_AND_NEW_ACCOUNT\'
#CANNOT_REMOVE_STARTED_BILLING_SETUP2
.CANNOT_CHANGE_BILLING_TO_SAME_PAYMENTS_ACCOUNT3
/BILLING_SETUP_NOT_PERMITTED_FOR_CUSTOMER_STATUS
INVALID_PAYMENTS_ACCOUNT5
1BILLING_SETUP_NOT_PERMITTED_FOR_CUSTOMER_CATEGORY
INVALID_START_TIME_TYPE#
THIRD_PARTY_ALREADY_HAS_BILLING	
BILLING_SETUP_IN_PROGRESS

NO_SIGNUP_PERMISSION!
CHANGE_OF_BILL_TO_IN_PROGRESS
PAYMENTS_PROFILE_NOT_FOUND
PAYMENTS_ACCOUNT_NOT_FOUND
PAYMENTS_PROFILE_INELIGIBLE
PAYMENTS_ACCOUNT_INELIGIBLE$
 CUSTOMER_NEEDS_INTERNAL_APPROVAL6
2PAYMENTS_ACCOUNT_INELIGIBLE_CURRENCY_CODE_MISMATCHB�
"com.google.ads.googleads.v8.errorsBBillingSetupErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/errors;errors�GAA�Google.Ads.GoogleAds.V8.Errors�Google\\Ads\\GoogleAds\\V8\\Errors�"Google::Ads::GoogleAds::V8::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

