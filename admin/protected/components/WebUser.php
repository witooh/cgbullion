<?php 
class WebUser extends CWebUser
{
    /**
     * Overrides a Yii method that is used for roles in controllers (accessRules).
     *
     * @param string $operation Name of the operation required (here, a role).
     * @param mixed $params (opt) Parameters for this operation, usually the object to access.
     * @return bool Permission granted?
     */
    public function checkAccess($operation, $params=array())
    {
        $accessArray = cache()->get(userName().'access');
        $isMaster = cache()->get(userName().'isMaster');
        if(!$accessArray){
            
            $accessArray = user()->getState('access');
            $isMaster = user()->getState('isMaster');
            cache()->set(userName().'access',$accessArray,900);
            cache()->set(userName().'isMaster',$isMaster,900);
        }
        if($isMaster){
            return true;
        }if(isset($accessArray[$operation])){
            return $accessArray[$operation];
        }else{
            return false;
        }
    }
}