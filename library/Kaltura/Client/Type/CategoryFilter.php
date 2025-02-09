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
class CategoryFilter extends \Kaltura\Client\Type\CategoryBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategoryFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->freeText))
			$this->freeText = (string)$xml->freeText;
		if(count($xml->membersIn))
			$this->membersIn = (string)$xml->membersIn;
		if(count($xml->nameOrReferenceIdStartsWith))
			$this->nameOrReferenceIdStartsWith = (string)$xml->nameOrReferenceIdStartsWith;
		if(count($xml->managerEqual))
			$this->managerEqual = (string)$xml->managerEqual;
		if(count($xml->memberEqual))
			$this->memberEqual = (string)$xml->memberEqual;
		if(count($xml->fullNameStartsWithIn))
			$this->fullNameStartsWithIn = (string)$xml->fullNameStartsWithIn;
		if(count($xml->ancestorIdIn))
			$this->ancestorIdIn = (string)$xml->ancestorIdIn;
		if(count($xml->idOrInheritedParentIdIn))
			$this->idOrInheritedParentIdIn = (string)$xml->idOrInheritedParentIdIn;
	}
	/**
	 * 
	 * @var string
	 */
	public $freeText = null;

	/**
	 * 
	 * @var string
	 */
	public $membersIn = null;

	/**
	 * 
	 * @var string
	 */
	public $nameOrReferenceIdStartsWith = null;

	/**
	 * 
	 * @var string
	 */
	public $managerEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $memberEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $fullNameStartsWithIn = null;

	/**
	 * not includes the category itself (only sub categories)
	 * @var string
	 */
	public $ancestorIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $idOrInheritedParentIdIn = null;

}
