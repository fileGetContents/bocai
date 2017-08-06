<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends MY_Model
{

    protected $article = 'article';
    private $coltypes = 'coltypes';

    /**
     * 获取前台展示界面
     * @return mixed
     */
    public function getNewsColumn()
    {
        $return = $this->db->where(array("cid" => 8, "show" => 1))->get($this->coltypes);
        return $return->result_array();
    }

    /**
     * 获取新闻列表
     * @param $cid
     * @param int $limit
     * @return mixed
     */
    public function getNewsList($cid, $limit = 6)
    {
        $return = $this->db->where(array("status" => 1, "flag" => 1, "audit" => 1, "cid" => $cid,))
            ->or_where("expiretime > " . time())
            ->or_where("expiretime = null")
            ->order_by("sort_id")
            ->limit($limit)
            ->get($this->article);
        return $return->result_array();
    }

    /**
     * 获取单条新闻信息
     * @param $id
     * @return mixed
     */
    public function getNewsInfo($id)
    {
        $return = $this->db->where(array("id" => $id))->get($this->article);
        return $return->result_array();
    }


    /**
     * 获取上一页和下一个id  -1 不存在
     * @param $cid  int 栏目id
     * @param $id  int  目的id
     * @return array
     */
    public function getAdjacentId($cid, $id)
    {
        $return = array();
        // 上一页
        $pre_db = $this->db->where(array("cid" => $cid))->where("id < $id")->order_by("id", "DESC")->limit(1)->get($this->article);
        $pre = $pre_db->result_array();
        if (empty($pre)) {
            $return['pre'] = -1;
        } else {
            $return['pre'] = $pre[0]['id'];
        }
        // 下一页
        $las_db = $this->db->where(array("cid" => $cid))->where("id > $id")->limit(1)->get($this->article);
        $las = $las_db->result_array();
        if (empty($las)) {
            $return['las'] = -1;
        } else {
            $return['las'] = $las[0]['id'];
        }
        return $return;
    }


}