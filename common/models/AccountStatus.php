<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "account_status".
 *
 * @property integer $id
 * @property string $payment_date
 * @property string $start_date
 * @property string $ending_date
 * @property string $saldo
 * @property string $abono
 * @property string $total
 * @property integer $user_id
 *
 * @property User $user
 */
class AccountStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['payment_date', 'start_date', 'ending_date', 'saldo', 'abono', 'total'], 'string', 'max' => 45],
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
            'payment_date' => 'Payment Date',
            'start_date' => 'Start Date',
            'ending_date' => 'Ending Date',
            'saldo' => 'Saldo',
            'abono' => 'Abono',
            'total' => 'Total',
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
