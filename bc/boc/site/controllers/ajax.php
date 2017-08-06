<?php

class ajax extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model", "product");
        $this->load->model("videos_model", "videos");
    }

    public function ajax_product()
    {
        $col_id = $this->uri->segment(3, 0);
        $page = $this->uri->segment(4, 0);
        $product_db = $this->db->where(array("audit" => 1, "show" => 1, "cid" => $col_id))->order_by("sort_id")->limit($page, $page - 6)->get("product");
        $product["product"] = $product_db->result_array();
        $this->load->view('ajax/ajax_product', $product);
    }

    public function ajax_product1()
    {
        $col_id = $this->uri->segment(3, 0);
        $page = $this->uri->segment(4, 0);
        $product_db = $this->db->where(array("audit" => 1, "show" => 1, "cid" => $col_id))->order_by("sort_id")->limit($page, $page - 6)->get("product");
        $product["product"] = $product_db->result_array();
        $this->load->view("ajax/ajax_product1");
    }


    public function ajax_news()
    {

        $this->load->view("ajax/news");
    }

    /**
     * 获取特定的视频地址
     */
    public function ajax_video()
    {
        $photo = $this->uri->segment(3, 0);
        $video['video'] = $this->videos->getOneVideos(intval($photo));
        $this->load->view("ajax/ajax_video", $video);
    }


}