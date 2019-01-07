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
 * Will hold data from the Kaltura UI components to be passed on to the reports and analytics system
 * @package Kaltura
 * @subpackage Client
 */
class StatsKmcEvent extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaStatsKmcEvent';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->clientVer))
			$this->clientVer = (string)$xml->clientVer;
		if(count($xml->kmcEventActionPath))
			$this->kmcEventActionPath = (string)$xml->kmcEventActionPath;
		if(count($xml->kmcEventType))
			$this->kmcEventType = (int)$xml->kmcEventType;
		if(count($xml->eventTimestamp))
			$this->eventTimestamp = (float)$xml->eventTimestamp;
		if(count($xml->sessionId))
			$this->sessionId = (string)$xml->sessionId;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(count($xml->widgetId))
			$this->widgetId = (string)$xml->widgetId;
		if(count($xml->uiconfId))
			$this->uiconfId = (int)$xml->uiconfId;
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(count($xml->userIp))
			$this->userIp = (string)$xml->userIp;
	}
	/**
	 * 
	 * @var string
	 */
	public $clientVer = null;

	/**
	 * 
	 * @var string
	 */
	public $kmcEventActionPath = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\StatsKmcEventType
	 */
	public $kmcEventType = null;

	/**
	 * the client's timestamp of this event
	 * @var float
	 */
	public $eventTimestamp = null;

	/**
	 * a unique string generated by the client that will represent the client-side session: the primary component will pass it on to other components that sprout from it
	 * @var string
	 */
	public $sessionId = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 * @var string
	 */
	public $widgetId = null;

	/**
	 * 
	 * @var int
	 */
	public $uiconfId = null;

	/**
	 * the partner's user id
	 * @var string
	 */
	public $userId = null;

	/**
	 * will be retrieved from the request of the user
	 * @var string
	 * @readonly
	 */
	public $userIp = null;

}
