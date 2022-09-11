<?php
    // simple class;
    class mycar {
        public $name;
        public $age;
        function set_name ($a, $b) {
            $this->name = $a;
            $this->age = $b;
        }
        function get_name () {
            echo $this->name. "<br>";
        }
        function return_name() {
            return $this->age. "<br>";
        }
    }

    $mycar1 = new mycar();
    $mycar1->set_name("arun", 29);
    $mycar1->get_name();
    echo $mycar1->return_name();

    $mycar2 = new mycar();
    $mycar2->set_name("Kumar", 30);
    $mycar2->get_name();
    echo $mycar2->return_name();

    // instanceof keyword;
    var_dump($mycar1 instanceof mycar);

    // Constructor & destructor;

    Class insectsvsbirds {
        private $birds = ['peacock', 'pigeon', 'cuckoo', 'dove', 'owl'];
        private $insects = ['cockroach', 'ladybird', 'housefly', 'butterfly', 'ant'];
        private $reqlivingbeings;
        public $desided;
        public $returnarray = array();
        function __construct($a) {
            $this->reqlivingbeings = $a;
            
            $this->returnarray['whichone'] =  $this->reqlivingbeings;
            
        }

        private function evaluate() {
            if(in_array($this->reqlivingbeings, $this->birds)) {
                $this->desided =  "birds";
            } else if (in_array($this->reqlivingbeings, $this->insects)) {
                $this->desided =  "insects";
            } else {
                $this->desided = "Not a birds and also not insects.I think something else.";
            }
            $this->returnarray['desided'] =  $this->desided;
        }

        function __destruct() {
            $this->evaluate();
            echo "The " . $this->returnarray['whichone'] . " is " . $this->returnarray['desided'];
        }

    }

    $insectsvsbirds = new insectsvsbirds("giend");
    $insectsvsbirds = new insectsvsbirds("crow");
    $insectsvsbirds = new insectsvsbirds("hello");
?>