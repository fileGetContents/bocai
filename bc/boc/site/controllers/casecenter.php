<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class caseCenter
 */
class casecenter extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Coltypes_model", "coltypes");
    }


    public function index()
    {
        // 获取顶级栏目
        $id = intval($this->uri->segment(3, 0));
        $case["top_mun"] = $this->coltypes->getDepthTitle(0, 16);
        if ($id == 0) {  // 默认进入
            $case["id"] = $case['top_mun'][0]['id'];
        } else {
            $case['id'] = $case['top_mun'][0]['id'];
        }

        $this->load->view("case", $case);
    }


}

