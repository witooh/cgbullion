<?php
class Gold extends MGold
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function rules()
    {
        return array(
            array('buy_price, sell_price, date', 'required'),
            array('buy_price, sell_price', 'length', 'max'=>45),
            array('date','isDuplicateDate'),
            array('goldindexid, buy_price, sell_price, date', 'safe', 'on'=>'search'),
        );
    }

    public function relations()
    {
        return array(
        );
    }

    public function attributeLabels()
    {
        return array(
            'goldindexid' => 'Goldindexid',
            'buy_price' => 'Buy Price',
            'sell_price' => 'Sell Price',
            'date' => 'Date',
        );
    }

    public function search()
    {
        $criteria=new CDbCriteria;

        $criteria->compare('goldindexid',$this->goldindexid);
        $criteria->compare('buy_price',$this->buy_price,true);
        $criteria->compare('sell_price',$this->sell_price,true);
        $criteria->compare('date',$this->date,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
    
    public function isDuplicateDate(){
        $modelGold = Gold::model()->findByAttributes(array('date'=>$this->date));
        if($modelGold != null)
            $this->addError('date',"{$this->date} has already added."); 
    }
}