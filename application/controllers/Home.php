<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function index() {
        $this->load->view('home/index');
    }
    
    public function servicios() {
        $this->load->view('home/services');
    }
    
    public function nosotros() {
        $this->load->view('home/about');
    }
    
    public function portafolio() {
        $this->load->view('home/portfolio');
    }
    
    public function testimonios() {
        $this->load->view('home/testimonials');
    }
    
    public function tecnologias() {
        $this->load->view('home/technologies');
    }
    
    public function contacto() {
        $this->load->view('home/contact');
    }
}