<?php
namespace Ktpl\Grid\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface as ArrayInterface;

class Gender implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        $options = [
            0 => [
                'label' => 'Male',
                'value' => '1'
            ],
            1 => [
                'label' => 'Female',
                'value' => '0'
            ],
        ];

        return $options;
    }
}