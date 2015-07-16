<?php

/**
 * This is the model class for table "translate".
 *
 * The followings are the available columns in table 'translate':
 * @property integer $id
 * @property string $word_key
 * @property string $word_value
 * @property integer $language
 */
class Translate extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'translate';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('word_key, word_value, language', 'required'),
            array('language', 'numerical', 'integerOnly' => true),
            array('word_key, word_value', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, word_key, word_value, language', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'word_key' => 'Word Key',
            'word_value' => 'Word Value',
            'language' => 'Language',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('word_key', $this->word_key, true);
        $criteria->compare('word_value', $this->word_value, true);
        $criteria->compare('language', $this->language);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Translate the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getTranslateWorld($word_key,$language_key) {
        $criteria = new CDbCriteria();
        $criteria->condition = 'word_key=:word_key and language=:language';
        $criteria->params = array(':word_key' => $word_key,':language' => $language_key);
        $result = Translate::model()->find($criteria);
        return $result['word_value'];
    }

}
