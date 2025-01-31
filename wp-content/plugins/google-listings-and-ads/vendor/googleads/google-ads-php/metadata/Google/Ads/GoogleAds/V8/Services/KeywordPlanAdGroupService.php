<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/keyword_plan_ad_group_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Services;

class KeywordPlanAdGroupService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
=google/ads/googleads/v8/resources/keyword_plan_ad_group.proto!google.ads.googleads.v8.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
KeywordPlanAdGroupJ
resource_name (	B3�A�A-
+googleads.googleapis.com/KeywordPlanAdGroupU
keyword_plan_campaign (	B1�A.
,googleads.googleapis.com/KeywordPlanCampaignH �
id (B�AH�
name (	H�
cpc_bid_micros	 (H�:x�Au
+googleads.googleapis.com/KeywordPlanAdGroupFcustomers/{customer_id}/keywordPlanAdGroups/{keyword_plan_ad_group_id}B
_keyword_plan_campaignB
_idB
_nameB
_cpc_bid_microsB�
%com.google.ads.googleads.v8.resourcesBKeywordPlanAdGroupProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3
�
Dgoogle/ads/googleads/v8/services/keyword_plan_ad_group_service.proto google.ads.googleads.v8.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"j
GetKeywordPlanAdGroupRequestJ
resource_name (	B3�A�A-
+googleads.googleapis.com/KeywordPlanAdGroup"�
 MutateKeywordPlanAdGroupsRequest
customer_id (	B�AV

operations (2=.google.ads.googleads.v8.services.KeywordPlanAdGroupOperationB�A
partial_failure (
validate_only ("�
KeywordPlanAdGroupOperation/
update_mask (2.google.protobuf.FieldMaskG
create (25.google.ads.googleads.v8.resources.KeywordPlanAdGroupH G
update (25.google.ads.googleads.v8.resources.KeywordPlanAdGroupH B
remove (	B0�A-
+googleads.googleapis.com/KeywordPlanAdGroupH B
	operation"�
!MutateKeywordPlanAdGroupsResponse1
partial_failure_error (2.google.rpc.StatusQ
results (2@.google.ads.googleads.v8.services.MutateKeywordPlanAdGroupResult"7
MutateKeywordPlanAdGroupResult
resource_name (	2�
KeywordPlanAdGroupService�
GetKeywordPlanAdGroup>.google.ads.googleads.v8.services.GetKeywordPlanAdGroupRequest5.google.ads.googleads.v8.resources.KeywordPlanAdGroup"M���75/v8/{resource_name=customers/*/keywordPlanAdGroups/*}�Aresource_name�
MutateKeywordPlanAdGroupsB.google.ads.googleads.v8.services.MutateKeywordPlanAdGroupsRequestC.google.ads.googleads.v8.services.MutateKeywordPlanAdGroupsResponse"\\���="8/v8/customers/{customer_id=*}/keywordPlanAdGroups:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v8.servicesBKeywordPlanAdGroupServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v8/services;services�GAA� Google.Ads.GoogleAds.V8.Services� Google\\Ads\\GoogleAds\\V8\\Services�$Google::Ads::GoogleAds::V8::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

