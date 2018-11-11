<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $product_code
 * @property string $name
 * @property string $description
 * @property string $barcode
 * @property string $photo
 * @property int $category_id
 * @property int $product_type_id
 * @property int $unit_id
 * @property double $min_stock
 * @property double $max_stock
 * @property int $is_hold
 * @property int $has_variant
 * @property int $bom_type
 * @property double $cost
 * @property double $price
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'product_type_id', 'unit_id', 'is_hold', 'has_variant', 'bom_type', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['min_stock', 'max_stock', 'cost', 'price'], 'number'],
            [['product_code', 'name', 'description', 'barcode', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_code' => 'Product Code',
            'name' => 'Name',
            'description' => 'Description',
            'barcode' => 'Barcode',
            'photo' => 'Photo',
            'category_id' => 'Category ID',
            'product_type_id' => 'Product Type ID',
            'unit_id' => 'Unit ID',
            'min_stock' => 'Min Stock',
            'max_stock' => 'Max Stock',
            'is_hold' => 'Is Hold',
            'has_variant' => 'Has Variant',
            'bom_type' => 'Bom Type',
            'cost' => 'Cost',
            'price' => 'Price',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
