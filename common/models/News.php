<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 * @property int $status
 *
 * @property NewsTranslate[] $newsTranslates
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
            [['image', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['status'], 'integer'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Image'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * Gets query for [[NewsTranslates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNewsTranslates()
    {
        return $this->hasMany(NewsTranslate::className(), ['news_id' => 'id']);
    }
}
