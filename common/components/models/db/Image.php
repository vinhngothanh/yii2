<?php

namespace common\components\models\db;

use Yii;

/**
 * This is the model class for table "images".
 *
 * @property string $id
 * @property string $name
 * @property string $type
 * @property string $url
 * @property int $status
 * @property string $createdAt
 */
class Image extends \yii\db\ActiveRecord
{
		/**
		 * {@inheritdoc}
		 */
		public static function tableName()
		{
			return 'images';
		}

		/**
		 * {@inheritdoc}
		 */
		public function rules()
		{
			return [
			[['id', 'type', 'url', 'createdAt'], 'required'],
			[['status'], 'integer'],
			[['id', 'name', 'type', 'url'], 'string', 'max' => 255],
			[['createdAt'], 'string', 'max' => 15],
			[['id'], 'unique'],
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
			'url' => 'Url',
			'status' => 'Status',
			'createdAt' => 'Created At',
			];
		}
	}
