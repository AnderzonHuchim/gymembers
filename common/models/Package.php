<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "package".
 *
 * @property integer $id
 * @property string $name
 * @property string $photography
 * @property string $description
 * @property integer $price
 * @property integer $user_id
 *
 * @property User $user
 */
class Package extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'package';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price', 'user_id'], 'integer'],
            [['user_id'], 'required'],
            [['name', 'photography'], 'string', 'max' => 45],
            [['description'], 'string', 'max' => 999],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'photography' => 'Photography',
            'description' => 'Description',
            'price' => 'Price',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
