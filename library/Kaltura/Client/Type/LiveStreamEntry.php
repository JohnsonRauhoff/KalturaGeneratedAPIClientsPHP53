<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2019  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @namespace
 */
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class LiveStreamEntry extends \Kaltura\Client\Type\LiveEntry
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveStreamEntry';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->streamRemoteId))
			$this->streamRemoteId = (string)$xml->streamRemoteId;
		if(count($xml->streamRemoteBackupId))
			$this->streamRemoteBackupId = (string)$xml->streamRemoteBackupId;
		if(count($xml->bitrates))
		{
			if(empty($xml->bitrates))
				$this->bitrates = array();
			else
				$this->bitrates = \Kaltura\Client\ParseUtils::unmarshalArray($xml->bitrates, "KalturaLiveStreamBitrate");
		}
		if(count($xml->primaryBroadcastingUrl))
			$this->primaryBroadcastingUrl = (string)$xml->primaryBroadcastingUrl;
		if(count($xml->secondaryBroadcastingUrl))
			$this->secondaryBroadcastingUrl = (string)$xml->secondaryBroadcastingUrl;
		if(count($xml->primaryRtspBroadcastingUrl))
			$this->primaryRtspBroadcastingUrl = (string)$xml->primaryRtspBroadcastingUrl;
		if(count($xml->secondaryRtspBroadcastingUrl))
			$this->secondaryRtspBroadcastingUrl = (string)$xml->secondaryRtspBroadcastingUrl;
		if(count($xml->streamName))
			$this->streamName = (string)$xml->streamName;
		if(count($xml->streamUrl))
			$this->streamUrl = (string)$xml->streamUrl;
		if(count($xml->hlsStreamUrl))
			$this->hlsStreamUrl = (string)$xml->hlsStreamUrl;
		if(count($xml->urlManager))
			$this->urlManager = (string)$xml->urlManager;
		if(count($xml->encodingIP1))
			$this->encodingIP1 = (string)$xml->encodingIP1;
		if(count($xml->encodingIP2))
			$this->encodingIP2 = (string)$xml->encodingIP2;
		if(count($xml->streamPassword))
			$this->streamPassword = (string)$xml->streamPassword;
		if(count($xml->streamUsername))
			$this->streamUsername = (string)$xml->streamUsername;
		if(count($xml->primaryServerNodeId))
			$this->primaryServerNodeId = (int)$xml->primaryServerNodeId;
		if(count($xml->sipToken))
			$this->sipToken = (string)$xml->sipToken;
	}
	/**
	 * The stream id as provided by the provider
	 * @var string
	 * @readonly
	 */
	public $streamRemoteId = null;

	/**
	 * The backup stream id as provided by the provider
	 * @var string
	 * @readonly
	 */
	public $streamRemoteBackupId = null;

	/**
	 * Array of supported bitrates
	 * @var array<KalturaLiveStreamBitrate>
	 */
	public $bitrates;

	/**
	 * 
	 * @var string
	 */
	public $primaryBroadcastingUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $secondaryBroadcastingUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $primaryRtspBroadcastingUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $secondaryRtspBroadcastingUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $streamName = null;

	/**
	 * The stream url
	 * @var string
	 */
	public $streamUrl = null;

	/**
	 * HLS URL - URL for live stream playback on mobile device
	 * @var string
	 */
	public $hlsStreamUrl = null;

	/**
	 * URL Manager to handle the live stream URL (for instance, add token)
	 * @var string
	 */
	public $urlManager = null;

	/**
	 * The broadcast primary ip
	 * @var string
	 */
	public $encodingIP1 = null;

	/**
	 * The broadcast secondary ip
	 * @var string
	 */
	public $encodingIP2 = null;

	/**
	 * The broadcast password
	 * @var string
	 */
	public $streamPassword = null;

	/**
	 * The broadcast username
	 * @var string
	 * @readonly
	 */
	public $streamUsername = null;

	/**
	 * The Streams primary server node id
	 * @var int
	 * @readonly
	 */
	public $primaryServerNodeId = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $sipToken = null;

}
