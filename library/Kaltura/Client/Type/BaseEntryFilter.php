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
class BaseEntryFilter extends \Kaltura\Client\Type\BaseEntryBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaBaseEntryFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->freeText))
			$this->freeText = (string)$xml->freeText;
		if(count($xml->isRoot))
			$this->isRoot = (int)$xml->isRoot;
		if(count($xml->categoriesFullNameIn))
			$this->categoriesFullNameIn = (string)$xml->categoriesFullNameIn;
		if(count($xml->categoryAncestorIdIn))
			$this->categoryAncestorIdIn = (string)$xml->categoryAncestorIdIn;
		if(count($xml->redirectFromEntryId))
			$this->redirectFromEntryId = (string)$xml->redirectFromEntryId;
	}
	/**
	 * 
	 * @var string
	 */
	public $freeText = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $isRoot = null;

	/**
	 * 
	 * @var string
	 */
	public $categoriesFullNameIn = null;

	/**
	 * All entries within this categoy or in child categories
	 * @var string
	 */
	public $categoryAncestorIdIn = null;

	/**
	 * The id of the original entry
	 * @var string
	 */
	public $redirectFromEntryId = null;

}
