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
namespace Kaltura\Client\Plugin\CuePoint\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class CuePoint extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCuePoint';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->intId))
			$this->intId = (int)$xml->intId;
		if(count($xml->cuePointType))
			$this->cuePointType = (string)$xml->cuePointType;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->triggeredAt))
			$this->triggeredAt = (int)$xml->triggeredAt;
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->startTime))
			$this->startTime = (int)$xml->startTime;
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(count($xml->partnerData))
			$this->partnerData = (string)$xml->partnerData;
		if(count($xml->partnerSortValue))
			$this->partnerSortValue = (int)$xml->partnerSortValue;
		if(count($xml->forceStop))
			$this->forceStop = (int)$xml->forceStop;
		if(count($xml->thumbOffset))
			$this->thumbOffset = (int)$xml->thumbOffset;
		if(count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(count($xml->isMomentary))
		{
			if(!empty($xml->isMomentary) && $xml->isMomentary != 'false')
				$this->isMomentary = true;
			else
				$this->isMomentary = false;
		}
		if(count($xml->copiedFrom))
			$this->copiedFrom = (string)$xml->copiedFrom;
	}
	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $intId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\CuePoint\Enum\CuePointType
	 * @readonly
	 */
	public $cuePointType = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\CuePoint\Enum\CuePointStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 * @var string
	 * @insertonly
	 */
	public $entryId = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 * @var int
	 */
	public $triggeredAt = null;

	/**
	 * 
	 * @var string
	 */
	public $tags = null;

	/**
	 * Start time in milliseconds
	 * @var int
	 */
	public $startTime = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * 
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerSortValue = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $forceStop = null;

	/**
	 * 
	 * @var int
	 */
	public $thumbOffset = null;

	/**
	 * 
	 * @var string
	 */
	public $systemName = null;

	/**
	 * 
	 * @var bool
	 * @readonly
	 */
	public $isMomentary = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $copiedFrom = null;

}
