<?php
/**
 * ProcessAttributes
 *
 * PHP version 5
 *
 * @category Class
 * @package  ProcessMaker\PMIO
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ProcessMaker API
 *
 * This ProcessMaker I/O API provides access to a BPMN 2.0 compliant workflow engine API that is designed to be used as a microservice to support enterprise cloud applications. The current Alpha 1.0 version supports most of the descriptive classes of the BPMN 2.0 specification.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@processmaker.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ProcessMaker\PMIO\Model;

use \ArrayAccess;

/**
 * ProcessAttributes Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ProcessMaker\PMIO
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProcessAttributes implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Process_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'description' => 'string',
        'parent_process_id' => 'string',
        'status' => 'string',
        'type' => 'string',
        'assignment' => 'bool',
        'category_id' => 'string',
        'sub_category_id' => 'string',
        'create_user_id' => 'string',
        'debug' => 'bool',
        'ref_id' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'name' => 'name',
        'description' => 'description',
        'parent_process_id' => 'parent_process_id',
        'status' => 'status',
        'type' => 'type',
        'assignment' => 'assignment',
        'category_id' => 'category_id',
        'sub_category_id' => 'sub_category_id',
        'create_user_id' => 'create_user_id',
        'debug' => 'debug',
        'ref_id' => 'ref_id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'name' => 'setName',
        'description' => 'setDescription',
        'parent_process_id' => 'setParentProcessId',
        'status' => 'setStatus',
        'type' => 'setType',
        'assignment' => 'setAssignment',
        'category_id' => 'setCategoryId',
        'sub_category_id' => 'setSubCategoryId',
        'create_user_id' => 'setCreateUserId',
        'debug' => 'setDebug',
        'ref_id' => 'setRefId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'name' => 'getName',
        'description' => 'getDescription',
        'parent_process_id' => 'getParentProcessId',
        'status' => 'getStatus',
        'type' => 'getType',
        'assignment' => 'getAssignment',
        'category_id' => 'getCategoryId',
        'sub_category_id' => 'getSubCategoryId',
        'create_user_id' => 'getCreateUserId',
        'debug' => 'getDebug',
        'ref_id' => 'getRefId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';
    const STATUS_DISABLED = 'DISABLED';
    const TYPE_NORMAL = 'NORMAL';
    const TYPE_SUB_PROCESS = 'SUB_PROCESS';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
            self::STATUS_DISABLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NORMAL,
            self::TYPE_SUB_PROCESS,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['parent_process_id'] = isset($data['parent_process_id']) ? $data['parent_process_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'ACTIVE';
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'NORMAL';
        $this->container['assignment'] = isset($data['assignment']) ? $data['assignment'] : false;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['sub_category_id'] = isset($data['sub_category_id']) ? $data['sub_category_id'] : null;
        $this->container['create_user_id'] = isset($data['create_user_id']) ? $data['create_user_id'] : null;
        $this->container['debug'] = isset($data['debug']) ? $data['debug'] : false;
        $this->container['ref_id'] = isset($data['ref_id']) ? $data['ref_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = array("ACTIVE", "INACTIVE", "DISABLED");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }

        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = array("NORMAL", "SUB_PROCESS");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

        if (!is_null($this->container['ref_id']) && (strlen($this->container['ref_id']) > 255)) {
            $invalid_properties[] = "invalid value for 'ref_id', the character length must be smaller than or equal to 255.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = array("ACTIVE", "INACTIVE", "DISABLED");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = array("NORMAL", "SUB_PROCESS");
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if (strlen($this->container['ref_id']) > 255) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets parent_process_id
     * @return string
     */
    public function getParentProcessId()
    {
        return $this->container['parent_process_id'];
    }

    /**
     * Sets parent_process_id
     * @param string $parent_process_id
     * @return $this
     */
    public function setParentProcessId($parent_process_id)
    {
        $this->container['parent_process_id'] = $parent_process_id;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('ACTIVE', 'INACTIVE', 'DISABLED');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'ACTIVE', 'INACTIVE', 'DISABLED'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('NORMAL', 'SUB_PROCESS');
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'NORMAL', 'SUB_PROCESS'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets assignment
     * @return bool
     */
    public function getAssignment()
    {
        return $this->container['assignment'];
    }

    /**
     * Sets assignment
     * @param bool $assignment
     * @return $this
     */
    public function setAssignment($assignment)
    {
        $this->container['assignment'] = $assignment;

        return $this;
    }

    /**
     * Gets category_id
     * @return string
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     * @param string $category_id
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets sub_category_id
     * @return string
     */
    public function getSubCategoryId()
    {
        return $this->container['sub_category_id'];
    }

    /**
     * Sets sub_category_id
     * @param string $sub_category_id
     * @return $this
     */
    public function setSubCategoryId($sub_category_id)
    {
        $this->container['sub_category_id'] = $sub_category_id;

        return $this;
    }

    /**
     * Gets create_user_id
     * @return string
     */
    public function getCreateUserId()
    {
        return $this->container['create_user_id'];
    }

    /**
     * Sets create_user_id
     * @param string $create_user_id
     * @return $this
     */
    public function setCreateUserId($create_user_id)
    {
        $this->container['create_user_id'] = $create_user_id;

        return $this;
    }

    /**
     * Gets debug
     * @return bool
     */
    public function getDebug()
    {
        return $this->container['debug'];
    }

    /**
     * Sets debug
     * @param bool $debug
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->container['debug'] = $debug;

        return $this;
    }

    /**
     * Gets ref_id
     * @return string
     */
    public function getRefId()
    {
        return $this->container['ref_id'];
    }

    /**
     * Sets ref_id
     * @param string $ref_id Set as XML object ID if imported from BPMN file or can be optionally set when object added via API. Used to optionally refer object by ref_id instead of using its UUID.
     * @return $this
     */
    public function setRefId($ref_id)
    {
        if (strlen($ref_id) > 255) {
            throw new \InvalidArgumentException('invalid length for $ref_id when calling ProcessAttributes., must be smaller than or equal to 255.');
        }
        $this->container['ref_id'] = $ref_id;

        return $this;
    }

    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param string $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param string $updated_at
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ProcessMaker\PMIO\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ProcessMaker\PMIO\ObjectSerializer::sanitizeForSerialization($this));
    }
}


