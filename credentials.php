<?php
    // Michael DeVito II
    // credentials.php
    // Class for credentials

    class credentials {
        private int $id;
        private String $username;
        private String $password;
        private String $name;
        private String $email;

        public function __construct(int $id, String $username, String $password, String $name, String $email) {
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->name = $name;
            $this->email = $email;
        }

        public function getUsername() : String {
            return $this->username;
        }
        public function getID() : int {
            return $this->id;
        }
        public function getPassword() : String {
            return $this->password;
        }
        public function getName() : String {
            return $this->name;
        }
        public function getEmail() : String {
            return $this->email;
        }


    }


?>