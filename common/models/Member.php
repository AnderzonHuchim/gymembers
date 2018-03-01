<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "member".
 *
 * @property integer $id
 * @property string $name
 * @property string $last_name
 * @property string $addreess
 * @property integer $number_phone
 * @property string $type_user
 * @property string $photography
 * @property integer $user_id
 *
 * @property User $user
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number_phone', 'user_id'], 'integer'],
            [['user_id'], 'required'],
            [['name', 'last_name', 'photography'], 'string', 'max' => 45],
            [['addreess'], 'string', 'max' => 99],
            [['type_user'], 'string', 'max' => 20],
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
            'last_name' => 'Last Name',
            'addreess' => 'Addreess',
            'number_phone' => 'Number Phone',
            'type_user' => 'Type User',
            'photography' => 'Photography',
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
