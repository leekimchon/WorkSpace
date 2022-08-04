<?php 
class Node{
    public $data;
    public $next = null;
    public function __construct($data){
        $this->data = $data;
    }
}
class linkList{
    public $firstNode = null;
    public $lastNode = null;
    public $count = 0;
    public function insertFirstNode($data){
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;
        if(is_null($this->lastNode)){
            $this->lastNode = $node;
        }
        $this->count++;
    }
    public function insertLastNode($data){
        if (!is_null($this->firstNode)) {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->insertFirstNode($data);
        }
    }
    public function totalNodes(){
        return $this->count;
    }
}
$linkedList = new LinkList();

$linkedList->insertFirstNode(11);
$linkedList->insertFirstNode(22);
$linkedList->insertLastNode(33);
$linkedList->insertLastNode(44);
// $totalNodes = $linkedList->totalNodes();

// echo $totalNodes;
// echo "<br>";
// echo implode('-', $linkData);
// echo '<pre>';
// print_r($linkedList->firstNode);
$a=1; $b=2;
[$a, $b] = [$b, $a];
echo $a.$b;
