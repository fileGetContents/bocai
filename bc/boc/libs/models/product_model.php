<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends MY_Model
{

    protected $table = 'product';


    public function getCidProduct($array = array())
    {
        $return = $this->db->where($array)->get($this->table);

        return $return->result_array();
    }

    public function getInfoProduct($id)
    {
        $return = $this->db->where(array("id" => $id))->get($this->table);
        return $return->result_array();
    }


    /**
     * 首页产品推荐
     */
    public function getWelcomeProduct()
    {
        $return = $this->db->select("*")->where(array("flag" => 1, "show" => 1))->limit(7)->get($this->table);
        return $return->result_array();
    }


}
