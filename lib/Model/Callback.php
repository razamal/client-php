<?php
/**
 * Callback
 *
 * PHP version 5
 *
 * @category Class
 * @package  SMSGatewayMe\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SMSGatewayMe\Client\Model;

use \ArrayAccess;
/**
 * Callback Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     SMSGatewayMe\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Callback implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'name' => 'string',
        'event' => 'string',
        'deviceId' => 'int',
        'filterType' => 'string',
        'filter' => 'string',
        'method' => 'string',
        'action' => 'string',
        'secret' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'name' => 'name',
        'event' => 'event',
        'deviceId' => 'device_id',
        'filterType' => 'filter_type',
        'filter' => 'filter',
        'method' => 'method',
        'action' => 'action',
        'secret' => 'secret'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'name' => 'setName',
        'event' => 'setEvent',
        'deviceId' => 'setDeviceId',
        'filterType' => 'setFilterType',
        'filter' => 'setFilter',
        'method' => 'setMethod',
        'action' => 'setAction',
        'secret' => 'setSecret'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'name' => 'getName',
        'event' => 'getEvent',
        'deviceId' => 'getDeviceId',
        'filterType' => 'getFilterType',
        'filter' => 'getFilter',
        'method' => 'getMethod',
        'action' => 'getAction',
        'secret' => 'getSecret'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id 
      * @var string
      */
    protected $id;
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $event 
      * @var string
      */
    protected $event;
    
    /**
      * $deviceId 
      * @var int
      */
    protected $deviceId;
    
    /**
      * $filterType 
      * @var string
      */
    protected $filterType;
    
    /**
      * $filter 
      * @var string
      */
    protected $filter;
    
    /**
      * $method 
      * @var string
      */
    protected $method;
    
    /**
      * $action 
      * @var string
      */
    protected $action;
    
    /**
      * $secret 
      * @var string
      */
    protected $secret;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->name = $data["name"];
            $this->event = $data["event"];
            $this->deviceId = $data["deviceId"];
            $this->filterType = $data["filterType"];
            $this->filter = $data["filter"];
            $this->method = $data["method"];
            $this->action = $data["action"];
            $this->secret = $data["secret"];
        }
    }
    
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets event
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }
  
    /**
     * Sets event
     * @param string $event 
     * @return $this
     */
    public function setEvent($event)
    {
        
        $this->event = $event;
        return $this;
    }
    
    /**
     * Gets deviceId
     * @return int
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }
  
    /**
     * Sets deviceId
     * @param int $deviceId 
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        
        $this->deviceId = $deviceId;
        return $this;
    }
    
    /**
     * Gets filterType
     * @return string
     */
    public function getFilterType()
    {
        return $this->filterType;
    }
  
    /**
     * Sets filterType
     * @param string $filterType 
     * @return $this
     */
    public function setFilterType($filterType)
    {
        
        $this->filterType = $filterType;
        return $this;
    }
    
    /**
     * Gets filter
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }
  
    /**
     * Sets filter
     * @param string $filter 
     * @return $this
     */
    public function setFilter($filter)
    {
        
        $this->filter = $filter;
        return $this;
    }
    
    /**
     * Gets method
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }
  
    /**
     * Sets method
     * @param string $method 
     * @return $this
     */
    public function setMethod($method)
    {
        
        $this->method = $method;
        return $this;
    }
    
    /**
     * Gets action
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }
  
    /**
     * Sets action
     * @param string $action 
     * @return $this
     */
    public function setAction($action)
    {
        
        $this->action = $action;
        return $this;
    }
    
    /**
     * Gets secret
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }
  
    /**
     * Sets secret
     * @param string $secret 
     * @return $this
     */
    public function setSecret($secret)
    {
        
        $this->secret = $secret;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SMSGatewayMe\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SMSGatewayMe\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
