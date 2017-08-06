<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class videos_model extends MY_Model
{

    protected $table = 'videos';

    protected $upload = "upload";

    /**
     * 获取全部的视频基础信息
     * @return mixed
     */
    public function getVideosList()
    {
        $return = $this->db
            ->where(array("audit" => 1, "status" => 1))
            ->or_where("expiretime >" . time())
            ->or_where("expiretime = NULL")
            ->order_by("sort_id")
            ->get($this->table);
        return $return->result_array();
    }

    /**
     * 获取一个项目地址
     * @param $id int 编号
     */
    public function getOneVideos($id)
    {
         $return = $this->db->where(array("id"=>$id))->get($this->upload);
         return $return->result_array();
    }


}