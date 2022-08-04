<?php
class Dance{
    public $name;
    public $gender;

    public function __construct($name, $gender){
        $this->name = $name;
        $this->gender = $gender;
    }
}

function getDance($maleDance, $femaleDance){
    $maleDance->rewind();
    $femaleDance->rewind();
    while($maleDance->valid() && $femaleDance->valid()){
        echo 'cặp: ' . $maleDance->current()->name.' - ' . $femaleDance->current()->name.'<br>';
        $maleDance->next();
        $femaleDance->next();
    }
}

function checkDoi($maleDance, $femaleDance){
    $i=0;
    while(!$maleDance->valid() && $femaleDance->valid()){
        echo $femaleDance->current()->name.' đang đợi'.'<br>';
        $maleDance->next();
        $femaleDance->next();
        $i++;
    }
    while(!$femaleDance->valid() && $maleDance->valid()){
        echo $maleDance->current()->name.' đang đợi'.'<br>';
        $maleDance->next();
        $femaleDance->next();
        $i++;
    }
    if($i != 0){
        echo 'Co '.$i.' nguoi dang doi';
    }
}

$maleDance = new SplQueue;
$femaleDance = new SplQueue;

$maleDance->enqueue($dance = new Dance('Luy', 'male'));
$maleDance->enqueue($dance = new Dance('Cuong', 'male'));
$maleDance->enqueue($dance = new Dance('Duong', 'male'));
$maleDance->enqueue($dance = new Dance('Chon', 'male'));

$femaleDance->enqueue($dance = new Dance('Bò', 'female'));
$femaleDance->enqueue($dance = new Dance('A', 'female'));
$femaleDance->enqueue($dance = new Dance('B', 'female'));

getDance($maleDance, $femaleDance);

$femaleDance->enqueue($dance = new Dance('C', 'female'));
$femaleDance->enqueue($dance = new Dance('D', 'female'));
$femaleDance->enqueue($dance = new Dance('E', 'female'));

getDance($maleDance, $femaleDance);

checkDoi($maleDance, $femaleDance);