<?php

    class Human {
        public $name;
        protected $birthday;
        private $gender;
        private $hight;
        private $hobby;
 
        public function __construct($name, $birthday, $gender, $hight, $hobby) {
            $this->name = $name;
            $this->birthday = $birthday;
            $this->gender = $gender;
            $this->hight = $hight;
            $this->hobby = $hobby;
        }   
    
        public function  walk() {
		echo "{$this->name}は歩きます。\n"; //(<br/> = .PHP_EOL PHP_EOLはコンソールの場合に使用する。)
        }

	    public function eat() {
		echo "{$this->birthday}にはケーキを食べます\n";
        }
        
        public function play() {
        echo "休みの日は{$this->hobby}を聴く\n";
        }
        
        public function ride() {
        echo "身長は{$this->hight}なので乗れます。\n";
        }
   }
   
   
   $human = new Human('花岡', '1991年5月6日', '男', '172cm', '音楽');
   $human->eat();
   $human->walk();
   $human->play();
   $human->ride();
?>