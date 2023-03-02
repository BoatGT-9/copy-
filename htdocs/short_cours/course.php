<?php

    class Course{
    private $course_name;
    private $course_img;
    private $course_desc;
        
        //การประกาศหรือกำค่าคอนสต้ากเตอร์
        function __construct() {
            $this->course_name= "เทคนิคการสื่อสารในองค์กร";
            $this->course_img="./img/course-1.png";
            $this->course_desc="การจัดทำหลักสูตรอบรมระยะสั้น เทคนิคการสื่อสารในองค์กรมุ่งเน้นเสริมสร้างทักษะที่ดีในด้านการสื่อสาร ทั้งการพูด น้ำเสียง บุคลิกภาพในการสื่อสาร รวมถึงการเขียนซึ่งมีความสำคัญและจำเป็นอย่างยิ่ง หากบุคลากรรวมถึงองค์กรสามารถพัฒนาทักษะการสื่อสารในการติดต่อกับบุคคลที่เกี่ยวข้องย่อมส่งผลให้ การสื่อสารแต่ละครั้งมีประสิทธิภาพยิ่งขึ้น อันจะส่งผลให้การปฏิบัติงาน รวมถึงการดำเนินภารกิจต่าง ๆ ในองค์กรเกิดความสัมฤทธิ์ผลอย่างต่อเนื่อง";
            
        
        }
        function display_short(){
            printf("<h5>%s</h5>",$this->course_name);
        printf("<img src='%s'alt=''> ", $this->course_img);
        }
        function display_detail(){
            printf("<h5>%s</h5>",$this->course_name);
            printf("<p>%s</p>",$this->course_desc);
        }
    }
    $obj_c1=new Course();
    $obj_c1->display_short();

    $obj_c2=new Course();
    $obj_c2->display_detail();

?>