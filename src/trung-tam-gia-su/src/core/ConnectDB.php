<?php
    class ConnectDB{
        // Thông tin về web
        protected $connection;
        private $hostname = 'db';
        private $user = 'root';
        private $password = 'ad122pro';
        private $nameDB = 'web_gia_su'; 

        // kết nối với DB
        function __construct(){
            $this->connection = mysqli_connect("$this->hostname","$this->user","$this->password","$this->nameDB");
            if (!$this->connection){
                die ('Failed to connect with server');
            }  
            mysqli_set_charset($this->connection,'utf8');
        }
    }
?>