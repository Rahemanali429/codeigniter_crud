<?php

class User_model extends CI_Model
{
    public function add($title, $description)
    {
        $q = $this->db->insert('post', ['title' => $title, 'description' => $description]);
        if ($q) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function posts()
    {
        $qu = $this->db->select()->from('post')->get();
        return $qu->result();
    }
    public function deldata($pid)
    {
        return $this->db->delete('post', ['id' => $pid]);
    }
    public function edit_posts($pid)
    {
        $qu = $this->db->select()->from('post')->where('id', $pid)->get();
        return $qu->result();
    }
    public function edit($title, $description, $pid)
    {
        $q = $this->db->where('id', $pid)->set('title', $title)->set('description', $description)->update('post');
        if ($q) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
