<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getMenuById($id)
    {
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }

    public function getMenu()
    {
        return $this->db->get('user_menu')->result_array();
    }

    public function getStatus()
    {
        return $this->db->get('status')->result_array();
    }

    public function getSubMenuById($id)
    {
        return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
    }

    public function editDataMenu()
    {
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu', ['menu' => $this->input->post('menu', true)]);
    }

    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ";

        return $this->db->query($query)->result_array();
    }

    public function editDataSubMenu()
    {
        $data = [
            'menu_id' => $this->input->post('menu'),
            'title' => $this->input->post('title'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_sub_menu', $data);
    }
}
