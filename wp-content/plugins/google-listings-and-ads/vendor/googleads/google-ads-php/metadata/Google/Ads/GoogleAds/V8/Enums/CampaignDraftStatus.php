<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/campaign_draft_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Enums;

class CampaignDraftStatus
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
�
9google/ads/googleads/v8/enums/campaign_draft_status.protogoogle.ads.googleads.v8.enums"�
CampaignDraftStatusEnum"
CampaignDraftStatus
UNSPECIFIED 
UNKNOWN
PROPOSED
REMOVED
	PROMOTING
PROMOTED
PROMOTE_FAILEDB�
!com.google.ads.googleads.v8.enumsBCampaignDraftStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

