<?php
    class Teachers {
        function QuestionPaper1() {
            echo "Question Paper 1 for Students.";
        }
        
        private function QuestionPaper2() {
            echo "Some Important Questions for Students.";
        }
        function exam() {
            $this->QuestionPaper2();
        }
        
        private function QuestionPaper3() {
            return "Important";
        }
        function exam2() {
            if ($this->QuestionPaper3() == "Important") {
                echo "Do Something";
            } else {
                echo "Do Else";
            }
        }
        protected function studentMarks() {
            echo "All Student Marks";
        }
    }

    class Management extends Teachers {
        function reviewExams() {
            $this->studentMarks();
        }
    }

    $t1 = new Teachers();
    $t1->QuestionPaper1();
    echo "<br>";
    $t1->exam();
    echo "<br>";
    echo $t1->exam2();
    echo "<br>";
    $m1 = new Management();
    $m1->reviewExams();
?>