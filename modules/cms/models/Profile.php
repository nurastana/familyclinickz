<?php

namespace app\modules\cms\models;

use Yii;

/**
 * This is the model class for table "{{%user_profile}}".
 *
 * @property integer $userId
 * @property string $phone
 * @property string $name
 * @property string $photo
 * @property integer $cityId
 * @property integer $balance
 * @property \app\modules\cms\models\City $city
 */
class Profile extends \yii\db\ActiveRecord
{
    const PHOTO_DIR = 'images/profile';
    const PHOTO_THUMB_SOURCE = 'profile';
    const PHOTO_DIR_ALIAS = '@webroot/images/profile';
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_profile}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cityId','name','phone'],'required','on'=>'client.create'],
            [['cityId'], 'integer'],
            ['file','file','extensions'=>['jpg','png','gif'],'skipOnEmpty'=>true,'on'=>'client.create'],
            [['phone', 'name', 'photo'], 'string', 'max' => 255],
            ['balance','safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userId' => Yii::t('app', 'User ID'),
            'phone' => Yii::t('app', 'Телефон'),
            'name' => Yii::t('app', 'Ф.И.О'),
            'cityId' => Yii::t('app', 'Город'),
            'photo' => Yii::t('app', 'Фотография'),
            'file' => Yii::t('app', 'Фотография'),
            'balance' => Yii::t('app', 'Баланс'),
        ];
    }

    public function getCity()
    {
        return $this->hasOne(City::className(),['id'=>'cityId']);
    }

    public function photo($size = '100x100')
    {
        list($width, $height) = explode('x', $size);
        $image = self::PHOTO_THUMB_SOURCE.'/'.$this->photo;
        if($this->photo)
        {
            $file = Yii::$app->thumbler->resize($image, $width, $height);
            return Yii::getAlias('@web/' . Yii::$app->thumbler->thumbsPath) . $file;
        }
        return 'http://placehold.it/'.$size;
    }
    
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id'=>'userId']);
    }
    
    public function updateBalance()
    {
        $historyModel = new BalanceHistory;
        $balance = $historyModel->getBalanceById($this->user->id);
        $this->balance = $balance;
        $this->save(false,['balance']);
    }
}
