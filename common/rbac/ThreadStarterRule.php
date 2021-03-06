<?php 
 namespace common\rbac; 
 use yii\rbac\Rule; 
/**  * Checks if user role matches user passed via params  
*/ class ThreadStarterRule extends Rule 
    {     
        public $name = 'isThreadStarter';

        /**
         * @param string|integer $user the user ID.
         * @param Item $item the role or permission that this rule is associated with
         * @param array $params parameters passed to ManagerInterface::checkAccess().
         * @return boolean a value indicating whether the rule permits the role or permission it is associated with.
         */
        public function execute($user, $item, $params)
        {
            //Check if the currently logged in user is the same as the Thread Starter
            return isset($params['post']) ? $params['post']->thread_starter == $user : false;


        }
    }
