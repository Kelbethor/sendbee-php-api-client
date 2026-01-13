<?php


namespace Sendbee\Api\Models;


use Sendbee\Api\Support\Model;

/**
 * Class ContactTag
 * @package Sendbee\Api\Models
 *
 * @property string $id UUID
 * @property string $name tag name
 * @property string $editable
 * @property string $disable_contact
 * @property array  $icons
 */
class ContactTag extends Model
{
    protected function getFieldSpecification(){
        return [
            'id'                => self::fieldUUID(),
            'name'              => self::fieldText(),
            'editable'          => self::fieldBoolean(),
            'disable_contact'   => self::fieldBoolean(),
            'icons'             => self::fieldArray(),
        ];
    }
}
