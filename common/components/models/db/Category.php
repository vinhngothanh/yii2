<?php

namespace common\components\models\db;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property int $parentId
 * @property string $imageId
 * @property int $status
 * @property string $position
 */
class Category extends \yii\db\ActiveRecord
{
		/**
		 * {@inheritdoc}
		 */
		public static function tableName()
		{
			return 'categories';
		}

		/**
		 * {@inheritdoc}
		 */
		public function rules()
		{
			return [
			[['name', 'type'], 'required'],
			[['parentId', 'status'], 'integer'],
			[['name', 'type', 'imageId'], 'string', 'max' => 255],
			[['position'], 'string', 'max' => 15],
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
			'type' => 'Type',
			'parentId' => 'Parent ID',
			'imageId' => 'Image ID',
			'status' => 'Status',
			'position' => 'Position',
			];
		}
	}
