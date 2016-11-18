<?php

namespace backend\models;
use yii\web\IdentityInterface;
use Yii;
use backend\models\UserLevel;
/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $display_name
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $telephone
 * @property integer $level_id
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $password;
    public static function tableName()
    {
        return 'user';
    }
    public function getLevel()
    {
        return $this->hasOne(UserLevel::className(), ['id' => 'level_id']);
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['auth_key', 'password_hash', 'email', 'telephone', 'created_at', 'updated_at', 'level_id','status'], 'required','message'=>'{attribute} không được để trống'],
            [['level_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['password_hash', 'password_reset_token', 'email', 'telephone'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['password_reset_token'], 'unique'],


             ['username', 'trim'],
            ['username', 'required','message'=>'{attribute} không được để trống'],
            ['username', 'unique',  'message' => 'Tên đăng nhập đã được sử dụng.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['display_name', 'trim'],
            ['display_name', 'required','message'=>'{attribute} không được để trống'],
            ['display_name', 'unique', 'message' => 'Tên hiển thị đã được sử dụng.'],
            ['display_name', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required','message'=>'{attribute} không được để trống'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'message' => 'Email đã được sử dụng.'],

            ['password', 'required', 'message' => '{attribute} không được để trống'],
            ['password', 'string', 'min' => 6, 'tooShort' => 'Mật khẩu quá ngắn'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Tên đăng nhập',
            'display_name' => 'Tên hiển thị',
            'password' => 'Mật khẩu',
            'email' => 'Email',
            'telephone' => 'Số điện thoại',
            'level_id' => 'Cấp bậc',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
        ];
    }
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

}
