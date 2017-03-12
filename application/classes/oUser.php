<?php
/**
 * Created by PhpStorm.
 * User: forest
 * Date: 2016/10/26
 * Time: 10:43 PM
 */

namespace PT_Classes {
    /**
     * Class oUser
     * @package PT_Classes
     */
    class oUser
    {
        public $user_id = -1;
        public $first_name = '';
        public $last_name = '';
        public $email = '';
        public $password = '';
        public $username = '';
        public $date_created = NULL;
        public $last_login = NULL;

        public function __construct($user = NULL)
        {
            if (!is_null($user)) {
                $this->user_id = $user->user_id;
                $this->first_name = $user->first_name;
                $this->last_name = $user->last_name;
                $this->email = $user->email;
                $this->password = $user->password;
                $this->date_created = $user->date_created;
                $this->last_login = $user->last_login;
            }
        }
    }
}