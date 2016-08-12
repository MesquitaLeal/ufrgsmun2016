<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "committee".
 *
 * @property integer $id
 * @property string $abbr
 * @property string $name
 * @property string $description
 *
 * @property CommitteeCountry[] $committeeCountries
 * @property Country[] $countries
 * @property Pessoa[] $pessoas
 * @property Topic[] $topics
 */
class Committee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'committee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['abbr', 'name', 'description'], 'required'],
            [['description'], 'string'],
            [['abbr'], 'string', 'max' => 10],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'abbr' => Yii::t('app', 'Abbr'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommitteeCountries()
    {
        return $this->hasMany(CommitteeCountry::className(), ['committee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountries()
    {
        return $this->hasMany(Country::className(), ['id' => 'country_id'])->viaTable('committee_country', ['committee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPessoa()
    {
        return $this->hasMany(Pessoa::className(), ['committee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTopic()
    {
        return $this->hasMany(Topic::className(), ['committee_id' => 'id']);
    }
}
