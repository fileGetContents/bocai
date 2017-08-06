<?php


class product extends MY_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model("coltypes_model", "coltypes");
        //$this->load->helpers("url");
        $this->load->model("product_model", "product");
    }

    public function index()
    {
        $col_types_id = floor($this->uri->segment(3, 0));                             // 获取coltype的id
        $product['col_types_top'] = $this->coltypes->get_ctypes(9, 0);                // 获取顶级目录
        if ($col_types_id == 0) { // 默认内容
            // 获取子分类
            $types_id = $product['col_types_top'][0]['id'];
            $fie = $this->db->where(array('fid' => $types_id))->order_by("sort_id")->get('coltypes');
            $product['fie'] = $fie->result_array();
            $product['col_types_id'] = $types_id;
        } else {
            $fie = $this->db->where(array('fid' => $col_types_id))->order_by("sort_id")->get('coltypes');
            $product['fie'] = $fie->result_array();
            $product['col_types_id'] = $col_types_id;
        }


        // 链接地址
        $link = $this->db->select("*")->where(array('audit' => 1))->order_by("flag")->limit(10)->get("links");
        $href = $link->result_array();
        $product['href'] = $href;

        $this->load->view("product", $product);
    }

    public function info()
    {
        $id = $this->uri->segment(3, -1);

        if ($id == -1) {

        } else {
            $product['product'] = $this->product->getInfoProduct($id);
            if (!empty($product['product'])) {
                // 查询顶级栏目
                $product['mum'] = $this->coltypes->getAllDirectory($product['product'][0]['ctype']);
                // 检查是否存在下一页
                $next_db = $this->db->select("id")->where(array("id" => $product['product'][0]['id'] + 1))->get("product");
                $next = $next_db->result_array();
                if (!empty($next)) {
                    $product['next_page'] = $product['product'][0]['id'] + 1;
                } else {
                    $product['next_page'] = -1;
                }
                // 上一页
                if ($id == 1) {
                    $product["pre_page"] = "javascript:;";
                } else {
                    $product['pre_page'] = $product['product'][0]['id'] - 1;
                }

            } else {

            }
        }

        $product['col_types_top'] = $this->coltypes->get_ctypes(9, 0);                // 获取顶级目录
        $product['col_types_id'] = 0;
        // 链接地址
        $link = $this->db->select("*")->where(array('audit' => 1))->order_by("flag")->limit(10)->get("links");
        $href = $link->result_array();
        $product['href'] = $href;
        $this->load->view("product/info", $product);
    }

}