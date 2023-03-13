<?php
    require_once('base_controller.php');
    require_once('models/Teacher.php');

    class TeacherController extends BaseController {

        function __construct()
        {
            $this->name = 'teacher';
        }

        public function index() {

            $teachers = Teacher::getAll();
            $data = array('teachers' => $teachers);

            $this->render('index', $data);
        }

        public function view() {
            $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_STRING);
            $teacher = Teacher::get($id);
            $this->render('view', array('teacher' => $teacher));
        }

        public function edit() {
            echo 'Edit page of Teacher';
        }

        public function save() {
            echo 'Save page of Teacher';
        }

        public function delete() {
            echo 'Delete page of Teacher';
        }
    }
?>
