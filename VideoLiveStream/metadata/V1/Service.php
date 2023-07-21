<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/service.proto

namespace GPBMetadata\Google\Cloud\Video\Livestream\V1;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Resources::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�D
.google/cloud/video/livestream/v1/service.proto google.cloud.video.livestream.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto0google/cloud/video/livestream/v1/resources.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
CreateAssetRequest7
parent (	B\'�A�A!livestream.googleapis.com/Asset;
asset (2\'.google.cloud.video.livestream.v1.AssetB�A
asset_id (	B�A

request_id (	"_
DeleteAssetRequest5
name (	B\'�A�A!
livestream.googleapis.com/Asset

request_id (	"�
ListAssetsRequest7
parent (	B\'�A�A!livestream.googleapis.com/Asset
	page_size (

page_token (	
filter (	
order_by (	"{
ListAssetsResponse7
assets (2\'.google.cloud.video.livestream.v1.Asset
next_page_token (	
unreachable (	"H
GetAssetRequest5
name (	B\'�A�A!
livestream.googleapis.com/Asset"�
CreateChannelRequest9
parent (	B)�A�A#!livestream.googleapis.com/Channel?
channel (2).google.cloud.video.livestream.v1.ChannelB�A

channel_id (	B�A

request_id (	"�
ListChannelsRequest9
parent (	B)�A�A#!livestream.googleapis.com/Channel
	page_size (

page_token (	
filter (	
order_by (	"�
ListChannelsResponse;
channels (2).google.cloud.video.livestream.v1.Channel
next_page_token (	
unreachable (	"L
GetChannelRequest7
name (	B)�A�A#
!livestream.googleapis.com/Channel"r
DeleteChannelRequest7
name (	B)�A�A#
!livestream.googleapis.com/Channel

request_id (	
force ("�
UpdateChannelRequest/
update_mask (2.google.protobuf.FieldMask?
channel (2).google.cloud.video.livestream.v1.ChannelB�A

request_id (	"b
StartChannelRequest7
name (	B)�A�A#
!livestream.googleapis.com/Channel

request_id (	"a
StopChannelRequest7
name (	B)�A�A#
!livestream.googleapis.com/Channel

request_id (	"�
CreateInputRequest7
parent (	B\'�A�A!livestream.googleapis.com/Input;
input (2\'.google.cloud.video.livestream.v1.InputB�A
input_id (	B�A

request_id (	"�
ListInputsRequest7
parent (	B\'�A�A!livestream.googleapis.com/Input
	page_size (

page_token (	
filter (	
order_by (	"{
ListInputsResponse7
inputs (2\'.google.cloud.video.livestream.v1.Input
next_page_token (	
unreachable (	"H
GetInputRequest5
name (	B\'�A�A!
livestream.googleapis.com/Input"_
DeleteInputRequest5
name (	B\'�A�A!
livestream.googleapis.com/Input

request_id (	"�
UpdateInputRequest/
update_mask (2.google.protobuf.FieldMask;
input (2\'.google.cloud.video.livestream.v1.InputB�A

request_id (	"�
CreateEventRequest7
parent (	B\'�A�A!livestream.googleapis.com/Event;
event (2\'.google.cloud.video.livestream.v1.EventB�A
event_id (	B�A

request_id (	"�
ListEventsRequest7
parent (	B\'�A�A!livestream.googleapis.com/Event
	page_size (

page_token (	
filter (	
order_by (	"{
ListEventsResponse7
events (2\'.google.cloud.video.livestream.v1.Event
next_page_token (	
unreachable (	"H
GetEventRequest5
name (	B\'�A�A!
livestream.googleapis.com/Event"_
DeleteEventRequest5
name (	B\'�A�A!
livestream.googleapis.com/Event

request_id (	"
ChannelOperationResponse"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A#
requested_cancellation (B�A
api_version (	B�A"F
GetPoolRequest4
name (	B&�A�A 
livestream.googleapis.com/Pool"�
UpdatePoolRequest/
update_mask (2.google.protobuf.FieldMask9
pool (2&.google.cloud.video.livestream.v1.PoolB�A

request_id (	2�"
LivestreamService�
CreateChannel6.google.cloud.video.livestream.v1.CreateChannelRequest.google.longrunning.Operation"x���7",/v1/{parent=projects/*/locations/*}/channels:channel�Aparent,channel,channel_id�A
ChannelOperationMetadata�
ListChannels5.google.cloud.video.livestream.v1.ListChannelsRequest6.google.cloud.video.livestream.v1.ListChannelsResponse"=���.,/v1/{parent=projects/*/locations/*}/channels�Aparent�

GetChannel3.google.cloud.video.livestream.v1.GetChannelRequest).google.cloud.video.livestream.v1.Channel";���.,/v1/{name=projects/*/locations/*/channels/*}�Aname�
DeleteChannel6.google.cloud.video.livestream.v1.DeleteChannelRequest.google.longrunning.Operation"h���.*,/v1/{name=projects/*/locations/*/channels/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
UpdateChannel6.google.cloud.video.livestream.v1.UpdateChannelRequest.google.longrunning.Operation"z���?24/v1/{channel.name=projects/*/locations/*/channels/*}:channel�Achannel,update_mask�A
ChannelOperationMetadata�
StartChannel5.google.cloud.video.livestream.v1.StartChannelRequest.google.longrunning.Operation"t���7"2/v1/{name=projects/*/locations/*/channels/*}:start:*�Aname�A-
ChannelOperationResponseOperationMetadata�
StopChannel4.google.cloud.video.livestream.v1.StopChannelRequest.google.longrunning.Operation"s���6"1/v1/{name=projects/*/locations/*/channels/*}:stop:*�Aname�A-
ChannelOperationResponseOperationMetadata�
CreateInput4.google.cloud.video.livestream.v1.CreateInputRequest.google.longrunning.Operation"n���3"*/v1/{parent=projects/*/locations/*}/inputs:input�Aparent,input,input_id�A
InputOperationMetadata�

ListInputs3.google.cloud.video.livestream.v1.ListInputsRequest4.google.cloud.video.livestream.v1.ListInputsResponse";���,*/v1/{parent=projects/*/locations/*}/inputs�Aparent�
GetInput1.google.cloud.video.livestream.v1.GetInputRequest\'.google.cloud.video.livestream.v1.Input"9���,*/v1/{name=projects/*/locations/*/inputs/*}�Aname�
DeleteInput4.google.cloud.video.livestream.v1.DeleteInputRequest.google.longrunning.Operation"f���,**/v1/{name=projects/*/locations/*/inputs/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
UpdateInput4.google.cloud.video.livestream.v1.UpdateInputRequest.google.longrunning.Operation"p���920/v1/{input.name=projects/*/locations/*/inputs/*}:input�Ainput,update_mask�A
InputOperationMetadata�
CreateEvent4.google.cloud.video.livestream.v1.CreateEventRequest\'.google.cloud.video.livestream.v1.Event"\\���>"5/v1/{parent=projects/*/locations/*/channels/*}/events:event�Aparent,event,event_id�

ListEvents3.google.cloud.video.livestream.v1.ListEventsRequest4.google.cloud.video.livestream.v1.ListEventsResponse"F���75/v1/{parent=projects/*/locations/*/channels/*}/events�Aparent�
GetEvent1.google.cloud.video.livestream.v1.GetEventRequest\'.google.cloud.video.livestream.v1.Event"D���75/v1/{name=projects/*/locations/*/channels/*/events/*}�Aname�
DeleteEvent4.google.cloud.video.livestream.v1.DeleteEventRequest.google.protobuf.Empty"D���7*5/v1/{name=projects/*/locations/*/channels/*/events/*}�Aname�
CreateAsset4.google.cloud.video.livestream.v1.CreateAssetRequest.google.longrunning.Operation"n���3"*/v1/{parent=projects/*/locations/*}/assets:asset�Aparent,asset,asset_id�A
AssetOperationMetadata�
DeleteAsset4.google.cloud.video.livestream.v1.DeleteAssetRequest.google.longrunning.Operation"f���,**/v1/{name=projects/*/locations/*/assets/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
GetAsset1.google.cloud.video.livestream.v1.GetAssetRequest\'.google.cloud.video.livestream.v1.Asset"9���,*/v1/{name=projects/*/locations/*/assets/*}�Aname�

ListAssets3.google.cloud.video.livestream.v1.ListAssetsRequest4.google.cloud.video.livestream.v1.ListAssetsResponse";���,*/v1/{parent=projects/*/locations/*}/assets�Aparent�
GetPool0.google.cloud.video.livestream.v1.GetPoolRequest&.google.cloud.video.livestream.v1.Pool"8���+)/v1/{name=projects/*/locations/*/pools/*}�Aname�

UpdatePool3.google.cloud.video.livestream.v1.UpdatePoolRequest.google.longrunning.Operation"k���62./v1/{pool.name=projects/*/locations/*/pools/*}:pool�Apool,update_mask�A
PoolOperationMetadataM�Alivestream.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
$com.google.cloud.video.livestream.v1BServiceProtoPZDcloud.google.com/go/video/livestream/apiv1/livestreampb;livestreampb� Google.Cloud.Video.LiveStream.V1� Google\\Cloud\\Video\\LiveStream\\V1�$Google::Cloud::Video::LiveStream::V1�Ad
*secretmanager.googleapis.com/SecretVersion6projects/{project}/secrets/{secret}/versions/{version}�AN
compute.googleapis.com/Network,projects/{project}/global/networks/{network}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

