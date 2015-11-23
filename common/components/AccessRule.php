<?php

namespace common\components;

use common\models\User;


class AccessRule extends \yii\filters\AccessRule {

    /**
     * @Override matchRole()
     */
    protected function matchRole($user)
    {
        if (empty($this->roles)) {
            return true;
        }
        foreach ($this->roles as $role) {
            if(!$user->getIsGuest() && $role === $user->identity->group_id)
                return true;
        }

        return false;
    }
}