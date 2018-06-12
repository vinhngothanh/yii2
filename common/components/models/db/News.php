<?php

namespace common\components\models\db;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $name
 * @property string $categoryId
 * @property int $parentId
 * @property string $content
 * @property int $status
 * @property string $createdAt
 */
class News extends \yii\db\ActiveRecord
{
		/**
		 * {@inheritdoc}
		 */
		public static function tableName()
		{
			return 'news';
		}

		/**
		 * {@inheritdoc}
		 */
		public function rules()
		{
			return [
			[['name', 'categoryId', 'content', 'createdAt'], 'required'],
			[['parentId', 'status'], 'integer'],
			[['content'], 'string'],
			[['name', 'categoryId'], 'string', 'max' => 255],
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
			'name' => 'Name',
			'categoryId' => 'Category ID',
			'parentId' => 'Parent ID',
			'content' => 'Content',
			'status' => 'Status',
			'createdAt' => 'Created At',
			];
		}
	}
