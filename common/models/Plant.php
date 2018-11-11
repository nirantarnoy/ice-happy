<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "plant".
 *
 * @property int $id
 * @property string $name
 * @property string $short_name
 * @property string $eng_name
 * @property string $description
 * @property string $tax_id
 * @property string $email
 * @property string $mobile
 * @property string $phone
 * @property string $website
 * @property string $facebook
 * @property string $line
 * @property string $logo
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class Plant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name', 'short_name', 'eng_name', 'description', 'tax_id', 'email', 'mobile', 'phone', 'website', 'facebook', 'line', 'logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'short_name' => 'Short Name',
            'eng_name' => 'Eng Name',
            'description' => 'Description',
            'tax_id' => 'Tax ID',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'phone' => 'Phone',
            'website' => 'Website',
            'facebook' => 'Facebook',
            'line' => 'Line',
            'logo' => 'Logo',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
