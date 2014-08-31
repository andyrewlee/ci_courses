<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Course');
    }
    public function index()
    {
        $output = array();
        $courses = $this->Course->get_all_courses();
        $output['courses'] = $courses;

        $this->load->view('index',$output);
    }
    public function show($id)
    {
        $course = $this->Course->get_course_by_id($id);
        $this->load->view('confirm', $course);
    }
    public function add()
    {
        $data = $this->input->post();
        if (empty($data['name']) || strlen($data['name']) < 16)
        {
            $this->session->set_flashdata('error', 'Name needs to be at least 15 characters');
            redirect('/courses/index');
        }
        else
        {
            $add_course = $this->Course->add_course($data);
        }
        redirect('/courses/index');
    }
    public function destroy($id)
    {
        $this->Course->remove_course($id);
        redirect('/courses/index');
    }
}
