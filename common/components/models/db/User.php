<?php

namespace common\components\models\db;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $fullname
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $adress
 * @property string $imageId
 * @property int $emailVerified
 * @property string $emailVerifiedTime
 * @property int $phoneVerified
 * @property string $phoneVerifiedTime
 * @property int $status
 * @property string $passwordNo
 * @property string $passwordResetToken
 * @property string $loginToken
 * @property string $createdAt
 * @property string $updatedAt
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'username', 'email', 'password', 'emailVerifiedTime', 'phoneVerifiedTime', 'passwordNo', 'passwordResetToken', 'loginToken', 'createdAt', 'updatedAt'], 'required'],
            [['adress'], 'string'],
            [['emailVerified', 'phoneVerified', 'status'], 'integer'],
            [['fullname', 'username', 'email', 'phone', 'imageId', 'passwordNo', 'passwordResetToken', 'loginToken'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 100],
            [['emailVerifiedTime', 'phoneVerifiedTime', 'createdAt', 'updatedAt'], 'string', 'max' => 15],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['passwordResetToken'], 'unique'],
            [['loginToken'], 'unique'],
            [['phone'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'phone' => 'Phone',
            'adress' => 'Adress',
            'imageId' => 'Image ID',
            'emailVerified' => 'Email Verified',
            'emailVerifiedTime' => 'Email Verified Time',
            'phoneVerified' => 'Phone Verified',
            'phoneVerifiedTime' => 'Phone Verified Time',
            'status' => 'Status',
            'passwordNo' => 'Password No',
            'passwordResetToken' => 'Password Reset Token',
            'loginToken' => 'Login Token',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
