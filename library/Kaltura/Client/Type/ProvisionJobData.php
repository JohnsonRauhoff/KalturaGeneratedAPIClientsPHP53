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
class ProvisionJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaProvisionJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->streamID))
			$this->streamID = (string)$xml->streamID;
		if(count($xml->backupStreamID))
			$this->backupStreamID = (string)$xml->backupStreamID;
		if(count($xml->rtmp))
			$this->rtmp = (string)$xml->rtmp;
		if(count($xml->encoderIP))
			$this->encoderIP = (string)$xml->encoderIP;
		if(count($xml->backupEncoderIP))
			$this->backupEncoderIP = (string)$xml->backupEncoderIP;
		if(count($xml->encoderPassword))
			$this->encoderPassword = (string)$xml->encoderPassword;
		if(count($xml->encoderUsername))
			$this->encoderUsername = (string)$xml->encoderUsername;
		if(count($xml->endDate))
			$this->endDate = (int)$xml->endDate;
		if(count($xml->returnVal))
			$this->returnVal = (string)$xml->returnVal;
		if(count($xml->mediaType))
			$this->mediaType = (int)$xml->mediaType;
		if(count($xml->primaryBroadcastingUrl))
			$this->primaryBroadcastingUrl = (string)$xml->primaryBroadcastingUrl;
		if(count($xml->secondaryBroadcastingUrl))
			$this->secondaryBroadcastingUrl = (string)$xml->secondaryBroadcastingUrl;
		if(count($xml->streamName))
			$this->streamName = (string)$xml->streamName;
	}
	/**
	 * 
	 * @var string
	 */
	public $streamID = null;

	/**
	 * 
	 * @var string
	 */
	public $backupStreamID = null;

	/**
	 * 
	 * @var string
	 */
	public $rtmp = null;

	/**
	 * 
	 * @var string
	 */
	public $encoderIP = null;

	/**
	 * 
	 * @var string
	 */
	public $backupEncoderIP = null;

	/**
	 * 
	 * @var string
	 */
	public $encoderPassword = null;

	/**
	 * 
	 * @var string
	 */
	public $encoderUsername = null;

	/**
	 * 
	 * @var int
	 */
	public $endDate = null;

	/**
	 * 
	 * @var string
	 */
	public $returnVal = null;

	/**
	 * 
	 * @var int
	 */
	public $mediaType = null;

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
	public $streamName = null;

}
