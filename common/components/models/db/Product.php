<?php

namespace common\components\models\db;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $categoryId
 * @property string $name
 * @property string $price
 * @property string $color
 * @property string $origin
 * @property string $description
 * @property string $images
 * @property int $status
 * @property string $createdAt
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price', 'color', 'origin', 'description', 'images', 'createdAt'], 'required'],
            [['color', 'origin', 'description', 'images'], 'string'],
            [['status'], 'integer'],
            [['categoryId', 'name', 'price'], 'string', 'max' => 255],
            [['createdAt'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categoryId' => 'Category ID',
            'name' => 'Name',
            'price' => 'Price',
            'color' => 'Color',
            'origin' => 'Origin',
            'description' => 'Description',
            'images' => 'Images',
            'status' => 'Status',
            'createdAt' => 'Created At',
        ];
    }
}
