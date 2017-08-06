<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("product_model", "product");
        $this->load->model("Coltypes_model", "coltypes");
        $this->load->model("article_model", "article");
    }

    public function index()
    {
        // seo
        $data['header'] = header_seoinfo(0, 0);
        $link = $this->db->select("*")->where(array('audit' => 1))->order_by("flag")->limit(10)->get("links");
        $href = $link->result_array();
        $data['href'] = $href;
        // 产品推荐
        $data['product_info'] = $this->product->getWelcomeProduct();
        $data['product'] = array();
        foreach ($data['product_info'] as $value) {
            $column = $this->coltypes->getAllDirectory($value['ctype']);
            $value['column'] = $column["title"];
            $data['product'][] = $value;
        }
        // 新闻推荐
        $data['news'] = $this->article->getWelcomeNews();
        $this->load->view('welcome', $data);
        // $strhtml=$this->output->get_output();
        // $this->load->helpers('file');
        // write_file(ROOT.'welcome.html',$strhtml);
        // write_file(APPPATH.'views/welcome.html',$strhtml);

    }


}
