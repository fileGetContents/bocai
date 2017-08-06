<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class  news extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("news_model", "news");
        $this->load->model("coltypes_model", "coltypes");
    }

    /**
     *  列表页
     */
    public function index()
    {
        $id = intval($this->uri->segment(3, 0));      // 获取新闻栏目id

        $new["mun"] = $this->news->getNewsColumn();   // 查询默认
        // 默认加载
        if ($id == 0) {
            $new["id"] = $new['mun'][0]['id'];
        } else {
            $new['id'] = $id;
        }
        // 查询列表
        $new['news'] = $this->news->getNewsList(8, $new["id"]);
        $this->load->view("news", $new);
    }

    /**
     * 详细界面
     */
    public function info()
    {
        $id = intval($this->uri->segment(3, 1));
        $info["mun"] = $this->news->getNewsColumn();   // 查询默认
        // 查询新闻详情
        $info['news'] = $this->news->getNewsInfo($id);
        if (empty($info['news'])) {
            show_404();
            exit();
        }
        // 获取顶级目录
        $info['place'] = $this->coltypes->getAllDirectory2($info['news'][0]['ctype']); // 当前位置
        $info['id'] = $info['place']['id'];
        // 查询上一条和下一跳
        $info["page"] = $this->news->getAdjacentId($info['news'][0]['cid'], $id);
        // 超链接
        $link = $this->db->select("*")->where(array('audit' => 1))->order_by("flag")->limit(10)->get("links");
        $href = $link->result_array();
        $info['href'] = $href;
        $this->load->view("news/info", $info);
    }


}