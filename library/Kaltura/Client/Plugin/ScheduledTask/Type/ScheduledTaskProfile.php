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
namespace Kaltura\Client\Plugin\ScheduledTask\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ScheduledTaskProfile extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaScheduledTaskProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->objectFilterEngineType))
			$this->objectFilterEngineType = (string)$xml->objectFilterEngineType;
		if(count($xml->objectFilter) && !empty($xml->objectFilter))
			$this->objectFilter = \Kaltura\Client\ParseUtils::unmarshalObject($xml->objectFilter, "KalturaFilter");
		if(count($xml->objectTasks))
		{
			if(empty($xml->objectTasks))
				$this->objectTasks = array();
			else
				$this->objectTasks = \Kaltura\Client\ParseUtils::unmarshalArray($xml->objectTasks, "KalturaObjectTask");
		}
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->lastExecutionStartedAt))
			$this->lastExecutionStartedAt = (int)$xml->lastExecutionStartedAt;
		if(count($xml->maxTotalCountAllowed))
			$this->maxTotalCountAllowed = (int)$xml->maxTotalCountAllowed;
	}
	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 * @var string
	 */
	public $systemName = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ScheduledTask\Enum\ScheduledTaskProfileStatus
	 */
	public $status = null;

	/**
	 * The type of engine to use to list objects using the given "objectFilter"
	 * @var \Kaltura\Client\Plugin\ScheduledTask\Enum\ObjectFilterEngineType
	 */
	public $objectFilterEngineType = null;

	/**
	 * A filter object (inherits KalturaFilter) that is used to list objects for scheduled tasks
	 * @var \Kaltura\Client\Type\Filter
	 */
	public $objectFilter;

	/**
	 * A list of tasks to execute on the founded objects
	 * @var array<KalturaObjectTask>
	 */
	public $objectTasks;

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
	public $lastExecutionStartedAt = null;

	/**
	 * The maximum number of result count allowed to be processed by this profile per execution
	 * @var int
	 */
	public $maxTotalCountAllowed = null;

}
