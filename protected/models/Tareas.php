<?php

/**
 * This is the model class for table "tbl_tareas".
 *
 * The followings are the available columns in table 'tbl_tareas':
 * @property string $tipo
 * @property string $nivel
 * @property string $lugar
 * @property string $tecnico
 *
 * The followings are the available model relations:
 * @property TblInsti[] $tblInstis
 * @property TblUser $tecnico0
 */
class Tareas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tareas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_tareas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo, nivel, lugar, tecnico', 'required'),
			array('tipo, nivel, lugar, tecnico', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tipo, nivel, lugar, tecnico', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tblInstis' => array(self::HAS_MANY, 'TblInsti', 'nombre'),
			'tecnico0' => array(self::BELONGS_TO, 'User', 'tecnico'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tipo' => 'Tipo',
			'nivel' => 'Nivel',
			'lugar' => 'Lugar',
			'tecnico' => 'Tecnico',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('nivel',$this->nivel,true);
		$criteria->compare('lugar',$this->lugar,true);
		$criteria->compare('tecnico',$this->tecnico,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}


