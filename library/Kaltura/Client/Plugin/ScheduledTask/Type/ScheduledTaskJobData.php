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
class ScheduledTaskJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaScheduledTaskJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->maxResults))
			$this->maxResults = (int)$xml->maxResults;
		if(count($xml->totalCount))
			$this->totalCount = (int)$xml->totalCount;
		if(count($xml->fileFormat))
			$this->fileFormat = (int)$xml->fileFormat;
		if(count($xml->resultsFilePath))
			$this->resultsFilePath = (string)$xml->resultsFilePath;
		if(count($xml->referenceTime))
			$this->referenceTime = (int)$xml->referenceTime;
	}
	/**
	 * 
	 * @var int
	 */
	public $maxResults = null;

	/**
	 * 
	 * @var int
	 */
	public $totalCount = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ScheduledTask\Enum\DryRunFileType
	 */
	public $fileFormat = null;

	/**
	 * 
	 * @var string
	 */
	public $resultsFilePath = null;

	/**
	 * 
	 * @var int
	 */
	public $referenceTime = null;

}
