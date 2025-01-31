<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/common/ad_type_infos.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Common;

class AdTypeInfos
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
;google/ads/googleads/v8/enums/served_asset_field_type.protogoogle.ads.googleads.v8.enums"�
ServedAssetFieldTypeEnum"�
ServedAssetFieldType
UNSPECIFIED 
UNKNOWN

HEADLINE_1

HEADLINE_2

HEADLINE_3
DESCRIPTION_1
DESCRIPTION_2B�
!com.google.ads.googleads.v8.enumsBServedAssetFieldTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
;google/ads/googleads/v8/enums/asset_performance_label.protogoogle.ads.googleads.v8.enums"�
AssetPerformanceLabelEnum"m
AssetPerformanceLabel
UNSPECIFIED 
UNKNOWN
PENDING
LEARNING
LOW
GOOD
BESTB�
!com.google.ads.googleads.v8.enumsBAssetPerformanceLabelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
:google/ads/googleads/v8/enums/policy_approval_status.protogoogle.ads.googleads.v8.enums"�
PolicyApprovalStatusEnum"�
PolicyApprovalStatus
UNSPECIFIED 
UNKNOWN
DISAPPROVED
APPROVED_LIMITED
APPROVED
AREA_OF_INTEREST_ONLYB�
!com.google.ads.googleads.v8.enumsBPolicyApprovalStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
8google/ads/googleads/v8/enums/policy_review_status.protogoogle.ads.googleads.v8.enums"�
PolicyReviewStatusEnum"�
PolicyReviewStatus
UNSPECIFIED 
UNKNOWN
REVIEW_IN_PROGRESS
REVIEWED
UNDER_APPEAL
ELIGIBLE_MAY_SERVEB�
!com.google.ads.googleads.v8.enumsBPolicyReviewStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
;google/ads/googleads/v8/enums/policy_topic_entry_type.protogoogle.ads.googleads.v8.enums"�
PolicyTopicEntryTypeEnum"�
PolicyTopicEntryType
UNSPECIFIED 
UNKNOWN

PROHIBITED
LIMITED
FULLY_LIMITED
DESCRIPTIVE

BROADENING
AREA_OF_INTEREST_ONLYB�
!com.google.ads.googleads.v8.enumsBPolicyTopicEntryTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Wgoogle/ads/googleads/v8/enums/policy_topic_evidence_destination_mismatch_url_type.protogoogle.ads.googleads.v8.enums"�
1PolicyTopicEvidenceDestinationMismatchUrlTypeEnum"�
-PolicyTopicEvidenceDestinationMismatchUrlType
UNSPECIFIED 
UNKNOWN
DISPLAY_URL
	FINAL_URL
FINAL_MOBILE_URL
TRACKING_URL
MOBILE_TRACKING_URLB�
!com.google.ads.googleads.v8.enumsB2PolicyTopicEvidenceDestinationMismatchUrlTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Xgoogle/ads/googleads/v8/enums/policy_topic_evidence_destination_not_working_device.protogoogle.ads.googleads.v8.enums"�
2PolicyTopicEvidenceDestinationNotWorkingDeviceEnum"q
.PolicyTopicEvidenceDestinationNotWorkingDevice
UNSPECIFIED 
UNKNOWN
DESKTOP
ANDROID
IOSB�
!com.google.ads.googleads.v8.enumsB3PolicyTopicEvidenceDestinationNotWorkingDeviceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
`google/ads/googleads/v8/enums/policy_topic_evidence_destination_not_working_dns_error_type.protogoogle.ads.googleads.v8.enums"�
8PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum"�
4PolicyTopicEvidenceDestinationNotWorkingDnsErrorType
UNSPECIFIED 
UNKNOWN
HOSTNAME_NOT_FOUND
GOOGLE_CRAWLER_DNS_ISSUEB�
!com.google.ads.googleads.v8.enumsB9PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
+google/ads/googleads/v8/common/policy.protogoogle.ads.googleads.v8.commonWgoogle/ads/googleads/v8/enums/policy_topic_evidence_destination_mismatch_url_type.protoXgoogle/ads/googleads/v8/enums/policy_topic_evidence_destination_not_working_device.proto`google/ads/googleads/v8/enums/policy_topic_evidence_destination_not_working_dns_error_type.protogoogle/api/annotations.proto"n
PolicyViolationKey
policy_name (	H �
violating_text (	H�B
_policy_nameB
_violating_text"�
PolicyValidationParameter
ignorable_policy_topics (	X
exempt_policy_violation_keys (22.google.ads.googleads.v8.common.PolicyViolationKey"�
PolicyTopicEntry
topic (	H �Z
type (2L.google.ads.googleads.v8.enums.PolicyTopicEntryTypeEnum.PolicyTopicEntryTypeF
	evidences (23.google.ads.googleads.v8.common.PolicyTopicEvidenceJ
constraints (25.google.ads.googleads.v8.common.PolicyTopicConstraintB
_topic"�

PolicyTopicEvidenceW
website_list (2?.google.ads.googleads.v8.common.PolicyTopicEvidence.WebsiteListH Q
	text_list (2<.google.ads.googleads.v8.common.PolicyTopicEvidence.TextListH 
language_code	 (	H h
destination_text_list (2G.google.ads.googleads.v8.common.PolicyTopicEvidence.DestinationTextListH g
destination_mismatch (2G.google.ads.googleads.v8.common.PolicyTopicEvidence.DestinationMismatchH l
destination_not_working (2I.google.ads.googleads.v8.common.PolicyTopicEvidence.DestinationNotWorkingH 
TextList
texts (	
WebsiteList
websites (	0
DestinationTextList
destination_texts (	�
DestinationMismatch�
	url_types (2~.google.ads.googleads.v8.enums.PolicyTopicEvidenceDestinationMismatchUrlTypeEnum.PolicyTopicEvidenceDestinationMismatchUrlType�
DestinationNotWorking
expanded_url (	H��
device (2�.google.ads.googleads.v8.enums.PolicyTopicEvidenceDestinationNotWorkingDeviceEnum.PolicyTopicEvidenceDestinationNotWorkingDevice#
last_checked_date_time (	H��
dns_error_type (2�.google.ads.googleads.v8.enums.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeH 
http_error_code (H B
reasonB
_expanded_urlB
_last_checked_date_timeB
value"�
PolicyTopicConstraintn
country_constraint_list (2K.google.ads.googleads.v8.common.PolicyTopicConstraint.CountryConstraintListH g
reseller_constraint (2H.google.ads.googleads.v8.common.PolicyTopicConstraint.ResellerConstraintH z
#certificate_missing_in_country_list (2K.google.ads.googleads.v8.common.PolicyTopicConstraint.CountryConstraintListH �
+certificate_domain_mismatch_in_country_list (2K.google.ads.googleads.v8.common.PolicyTopicConstraint.CountryConstraintListH �
CountryConstraintList%
total_targeted_countries (H �Z
	countries (2G.google.ads.googleads.v8.common.PolicyTopicConstraint.CountryConstraintB
_total_targeted_countries
ResellerConstraintI
CountryConstraint
country_criterion (	H �B
_country_criterionB
valueB�
"com.google.ads.googleads.v8.commonBPolicyProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3
�
1google/ads/googleads/v8/common/asset_policy.protogoogle.ads.googleads.v8.common:google/ads/googleads/v8/enums/policy_approval_status.proto8google/ads/googleads/v8/enums/policy_review_status.protogoogle/api/annotations.proto"�
AdAssetPolicySummaryN
policy_topic_entries (20.google.ads.googleads.v8.common.PolicyTopicEntry_
review_status (2H.google.ads.googleads.v8.enums.PolicyReviewStatusEnum.PolicyReviewStatuse
approval_status (2L.google.ads.googleads.v8.enums.PolicyApprovalStatusEnum.PolicyApprovalStatusB�
"com.google.ads.googleads.v8.commonBAssetPolicyProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3
�
-google/ads/googleads/v8/common/ad_asset.protogoogle.ads.googleads.v8.common;google/ads/googleads/v8/enums/asset_performance_label.proto;google/ads/googleads/v8/enums/served_asset_field_type.protogoogle/api/annotations.proto"�
AdTextAsset
text (	H �b
pinned_field (2L.google.ads.googleads.v8.enums.ServedAssetFieldTypeEnum.ServedAssetFieldTypeo
asset_performance_label (2N.google.ads.googleads.v8.enums.AssetPerformanceLabelEnum.AssetPerformanceLabelQ
policy_summary_info (24.google.ads.googleads.v8.common.AdAssetPolicySummaryB
_text",
AdImageAsset
asset (	H �B
_asset",
AdVideoAsset
asset (	H �B
_asset"2
AdMediaBundleAsset
asset (	H �B
_assetB�
"com.google.ads.googleads.v8.commonBAdAssetProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3
�
=google/ads/googleads/v8/enums/display_ad_format_setting.protogoogle.ads.googleads.v8.enums"�
DisplayAdFormatSettingEnum"c
DisplayAdFormatSetting
UNSPECIFIED 
UNKNOWN
ALL_FORMATS

NON_NATIVE

NATIVEB�
!com.google.ads.googleads.v8.enumsBDisplayAdFormatSettingProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Cgoogle/ads/googleads/v8/enums/call_conversion_reporting_state.protogoogle.ads.googleads.v8.enums"�
 CallConversionReportingStateEnum"�
CallConversionReportingState
UNSPECIFIED 
UNKNOWN
DISABLED,
(USE_ACCOUNT_LEVEL_CALL_CONVERSION_ACTION-
)USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTIONB�
!com.google.ads.googleads.v8.enumsB!CallConversionReportingStateProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Cgoogle/ads/googleads/v8/enums/legacy_app_install_ad_app_store.protogoogle.ads.googleads.v8.enums"�
LegacyAppInstallAdAppStoreEnum"�
LegacyAppInstallAdAppStore
UNSPECIFIED 
UNKNOWN
APPLE_APP_STORE
GOOGLE_PLAY
WINDOWS_STORE
WINDOWS_PHONE_STORE
CN_APP_STOREB�
!com.google.ads.googleads.v8.enumsBLegacyAppInstallAdAppStoreProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
?google/ads/googleads/v8/enums/display_upload_product_type.protogoogle.ads.googleads.v8.enums"�
DisplayUploadProductTypeEnum"�
DisplayUploadProductType
UNSPECIFIED 
UNKNOWN
HTML5_UPLOAD_AD
DYNAMIC_HTML5_EDUCATION_AD
DYNAMIC_HTML5_FLIGHT_AD!
DYNAMIC_HTML5_HOTEL_RENTAL_AD
DYNAMIC_HTML5_JOB_AD
DYNAMIC_HTML5_LOCAL_AD 
DYNAMIC_HTML5_REAL_ESTATE_AD
DYNAMIC_HTML5_CUSTOM_AD	
DYNAMIC_HTML5_TRAVEL_AD

DYNAMIC_HTML5_HOTEL_ADB�
!com.google.ads.googleads.v8.enumsBDisplayUploadProductTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
-google/ads/googleads/v8/enums/mime_type.protogoogle.ads.googleads.v8.enums"�
MimeTypeEnum"�
MimeType
UNSPECIFIED 
UNKNOWN

IMAGE_JPEG
	IMAGE_GIF
	IMAGE_PNG	
FLASH
	TEXT_HTML
PDF

MSWORD
MSEXCEL	
RTF

	AUDIO_WAV
	AUDIO_MP3
HTML5_AD_ZIPB�
!com.google.ads.googleads.v8.enumsBMimeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�G
2google/ads/googleads/v8/common/ad_type_infos.protogoogle.ads.googleads.v8.commonCgoogle/ads/googleads/v8/enums/call_conversion_reporting_state.proto=google/ads/googleads/v8/enums/display_ad_format_setting.proto?google/ads/googleads/v8/enums/display_upload_product_type.protoCgoogle/ads/googleads/v8/enums/legacy_app_install_ad_app_store.proto-google/ads/googleads/v8/enums/mime_type.protogoogle/api/annotations.proto"�

TextAdInfo
headline (	H �
description1 (	H�
description2 (	H�B
	_headlineB
_description1B
_description2"�
ExpandedTextAdInfo
headline_part1 (	H �
headline_part2	 (	H�
headline_part3
 (	H�
description (	H�
description2 (	H�
path1 (	H�
path2 (	H�B
_headline_part1B
_headline_part2B
_headline_part3B
_descriptionB
_description2B
_path1B
_path2"s
ExpandedDynamicSearchAdInfo
description (	H �
description2 (	H�B
_descriptionB
_description2"
HotelAdInfo"
ShoppingSmartAdInfo"
ShoppingProductAdInfo"E
ShoppingComparisonListingAdInfo
headline (	H �B
	_headline"�
GmailAdInfo;
teaser (2+.google.ads.googleads.v8.common.GmailTeaser
header_image
 (	H �
marketing_image (	H�%
marketing_image_headline (	H�(
marketing_image_description (	H�c
&marketing_image_display_call_to_action (23.google.ads.googleads.v8.common.DisplayCallToActionD
product_images (2,.google.ads.googleads.v8.common.ProductImageD
product_videos (2,.google.ads.googleads.v8.common.ProductVideoB
_header_imageB
_marketing_imageB
_marketing_image_headlineB
_marketing_image_description"�
GmailTeaser
headline (	H �
description (	H�
business_name (	H�

logo_image (	H�B
	_headlineB
_descriptionB
_business_nameB
_logo_image"�
DisplayCallToAction
text (	H �

text_color (	H�
url_collection_id (	H�B
_textB
_text_colorB
_url_collection_id"�
ProductImage
product_image (	H �
description (	H�S
display_call_to_action (23.google.ads.googleads.v8.common.DisplayCallToActionB
_product_imageB
_description"<
ProductVideo
product_video (	H �B
_product_video"�
ImageAdInfo
pixel_width (H�
pixel_height (H�
	image_url (	H� 
preview_pixel_width (H�!
preview_pixel_height (H�
preview_image_url (	H�G
	mime_type
 (24.google.ads.googleads.v8.enums.MimeTypeEnum.MimeType
name (	H�

media_file (	H 
data (H "
ad_id_to_copy_image_from (H B
imageB
_pixel_widthB
_pixel_heightB

_image_urlB
_preview_pixel_widthB
_preview_pixel_heightB
_preview_image_urlB
_name"O
VideoBumperInStreamAdInfo
companion_banner (	H �B
_companion_banner"U
VideoNonSkippableInStreamAdInfo
companion_banner (	H �B
_companion_banner"�
VideoTrueViewInStreamAdInfo 
action_button_label (	H �
action_headline (	H�
companion_banner (	H�B
_action_button_labelB
_action_headlineB
_companion_banner"d
VideoOutstreamAdInfo
headline (	H �
description (	H�B
	_headlineB
_description"�
VideoTrueViewDiscoveryAdInfo
headline (	H �
description1 (	H�
description2 (	H�B
	_headlineB
_description1B
_description2"�
VideoAdInfo

media_file (	H�P
	in_stream (2;.google.ads.googleads.v8.common.VideoTrueViewInStreamAdInfoH K
bumper (29.google.ads.googleads.v8.common.VideoBumperInStreamAdInfoH J

out_stream (24.google.ads.googleads.v8.common.VideoOutstreamAdInfoH X
non_skippable (2?.google.ads.googleads.v8.common.VideoNonSkippableInStreamAdInfoH Q
	discovery (2<.google.ads.googleads.v8.common.VideoTrueViewDiscoveryAdInfoH B
formatB
_media_file"�
VideoResponsiveAdInfo>
	headlines (2+.google.ads.googleads.v8.common.AdTextAssetC
long_headlines (2+.google.ads.googleads.v8.common.AdTextAssetA
descriptions (2+.google.ads.googleads.v8.common.AdTextAssetD
call_to_actions (2+.google.ads.googleads.v8.common.AdTextAsset<
videos (2,.google.ads.googleads.v8.common.AdVideoAssetG
companion_banners (2,.google.ads.googleads.v8.common.AdImageAsset"�
ResponsiveSearchAdInfo>
	headlines (2+.google.ads.googleads.v8.common.AdTextAssetA
descriptions (2+.google.ads.googleads.v8.common.AdTextAsset
path1 (	H �
path2 (	H�B
_path1B
_path2"�
LegacyResponsiveDisplayAdInfo
short_headline (	H �
long_headline (	H�
description (	H�
business_name (	H�!
allow_flexible_color (H�
accent_color (	H�

main_color (	H� 
call_to_action_text (	H�

logo_image (	H�
square_logo_image (	H	�
marketing_image (	H
�#
square_marketing_image (	H�h
format_setting (2P.google.ads.googleads.v8.enums.DisplayAdFormatSettingEnum.DisplayAdFormatSetting
price_prefix (	H�

promo_text (	H�B
_short_headlineB
_long_headlineB
_descriptionB
_business_nameB
_allow_flexible_colorB
_accent_colorB
_main_colorB
_call_to_action_textB
_logo_imageB
_square_logo_imageB
_marketing_imageB
_square_marketing_imageB
_price_prefixB
_promo_text"�
	AppAdInfoF
mandatory_ad_text (2+.google.ads.googleads.v8.common.AdTextAsset>
	headlines (2+.google.ads.googleads.v8.common.AdTextAssetA
descriptions (2+.google.ads.googleads.v8.common.AdTextAsset<
images (2,.google.ads.googleads.v8.common.AdImageAssetD
youtube_videos (2,.google.ads.googleads.v8.common.AdVideoAssetO
html5_media_bundles (22.google.ads.googleads.v8.common.AdMediaBundleAsset"�
AppEngagementAdInfo>
	headlines (2+.google.ads.googleads.v8.common.AdTextAssetA
descriptions (2+.google.ads.googleads.v8.common.AdTextAsset<
images (2,.google.ads.googleads.v8.common.AdImageAsset<
videos (2,.google.ads.googleads.v8.common.AdVideoAsset"�
LegacyAppInstallAdInfo
app_id (	H �k
	app_store (2X.google.ads.googleads.v8.enums.LegacyAppInstallAdAppStoreEnum.LegacyAppInstallAdAppStore
headline (	H�
description1 (	H�
description2	 (	H�B	
_app_idB
	_headlineB
_description1B
_description2"�
ResponsiveDisplayAdInfoF
marketing_images (2,.google.ads.googleads.v8.common.AdImageAssetM
square_marketing_images (2,.google.ads.googleads.v8.common.AdImageAssetA
logo_images (2,.google.ads.googleads.v8.common.AdImageAssetH
square_logo_images (2,.google.ads.googleads.v8.common.AdImageAsset>
	headlines (2+.google.ads.googleads.v8.common.AdTextAssetB
long_headline (2+.google.ads.googleads.v8.common.AdTextAssetA
descriptions (2+.google.ads.googleads.v8.common.AdTextAssetD
youtube_videos (2,.google.ads.googleads.v8.common.AdVideoAsset
business_name (	H �

main_color (	H�
accent_color (	H�!
allow_flexible_color (H� 
call_to_action_text (	H�
price_prefix (	H�

promo_text (	H�h
format_setting (2P.google.ads.googleads.v8.enums.DisplayAdFormatSettingEnum.DisplayAdFormatSettingT
control_spec (2>.google.ads.googleads.v8.common.ResponsiveDisplayAdControlSpecB
_business_nameB
_main_colorB
_accent_colorB
_allow_flexible_colorB
_call_to_action_textB
_price_prefixB
_promo_text"�
LocalAdInfo>
	headlines (2+.google.ads.googleads.v8.common.AdTextAssetA
descriptions (2+.google.ads.googleads.v8.common.AdTextAssetD
call_to_actions (2+.google.ads.googleads.v8.common.AdTextAssetF
marketing_images (2,.google.ads.googleads.v8.common.AdImageAssetA
logo_images (2,.google.ads.googleads.v8.common.AdImageAsset<
videos (2,.google.ads.googleads.v8.common.AdVideoAsset
path1	 (	H �
path2
 (	H�B
_path1B
_path2"�
DisplayUploadAdInfoy
display_upload_product_type (2T.google.ads.googleads.v8.enums.DisplayUploadProductTypeEnum.DisplayUploadProductTypeJ
media_bundle (22.google.ads.googleads.v8.common.AdMediaBundleAssetH B
media_asset"a
ResponsiveDisplayAdControlSpec!
enable_asset_enhancements (
enable_autogen_video ("�
SmartCampaignAdInfo>
	headlines (2+.google.ads.googleads.v8.common.AdTextAssetA
descriptions (2+.google.ads.googleads.v8.common.AdTextAsset"�

CallAdInfo
country_code (	
phone_number (	
business_name (	
	headline1 (	
	headline2 (	
description1 (	
description2 (	
call_tracked (
disable_call_conversion (%
phone_number_verification_url (	
conversion_action	 (	�
conversion_reporting_state
 (2\\.google.ads.googleads.v8.enums.CallConversionReportingStateEnum.CallConversionReportingState
path1 (	
path2 (	B�
"com.google.ads.googleads.v8.commonBAdTypeInfosProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

