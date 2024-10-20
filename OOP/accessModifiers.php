<?php 
class Teachers{
    private function questionsPapers(){
        echo "Important";
    }
    public function exam(){
       if($this->questionsPapers()=="Important") {
        echo "Do something";
       }else{
        "Eat 5 start , Do Nothing";
       }
    }

    protected function studentMarks(){
        echo "All Students Marks";
    }
}

class Management extends Teachers{
    function reviewExam(){
        $this->studentMarks();
    }
}
$t1=new Teachers();
// $t1->exam();
$m1=new Management();
$m1->reviewExam();
?>