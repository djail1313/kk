<?php

namespace common\components;

use common\models\User;
use common\models\UserGroup;
use common\models\Role;


class AccessRule extends \yii\filters\AccessRule {
    
    var $apps = NULL;

    /**
     * @Override matchRole()
     */
    protected function matchRole($user)
    {
        $this->roles = Role::find()
            ->select('group_id')
            ->where([
                'controller'=>$this->controllers,
                'action'=>$this->actions,
                'app'=>$this->apps,
            ])->all();
        if(count($this->roles) < 1) return true;
        $group_id = 0;
        if($user->identity !== NULL){
            $group_id = $user->identity->group_id;
        }
        foreach ($this->roles as $role) {
            if($role->group_id === 0) return true;
            if($role->group_id === $group_id) return true;
        }

        return false;
    }
}