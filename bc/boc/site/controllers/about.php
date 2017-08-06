<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class about extends MY_Controller
{

    private $dir = "about/";

    public function __construct()
    {
        parent::__construct();
        $this->load->model("videos_model", "videos");
    }

    public function index()
    {
        $this->load->view("about");
    }

    public function history()
    {
        $this->load->view($this->dir . "history");
    }

    public function honor()
    {
        $this->load->view($this->dir . "honor");
    }

    public function culture()
    {
        $this->load->view($this->dir . "culture");
    }

    /**
     *  宣传视频
     */
    public function video()
    {
        $video['video'] = $this->videos->getVideosList();
        $this->load->view($this->dir . "video",$video);
    }


}