<?php
namespace Deviffy\ModuleBuilder\Fields;

class FieldsDescriber
{
    /**
     * Default QuickAdmin field types
     * @return array
     */
    public static function types()
    {
        return [
            'text'         => 'Text field',
            'email'        => 'Email field',
            'textarea'     => 'Long text field',
            'radio'        => 'Radio',
            'checkbox'     => 'Checkbox',
            'date'         => 'Date picker',
            'datetime'     => 'Date and time picker',
            'relationship' => 'Relationship',
            'file'         => 'File field',
            'photo'        => 'Photo field',
            'password'     => 'Password field (hashed)',
            'enum'         => 'ENUM',
        ];
    }
}
