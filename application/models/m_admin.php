<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_admin extends CI_Model
{
    private $user = 'users';
    private $nilai = 'nilai';

    public function konfirmasi()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('status', 1);
        return $this->db->get()->result();
    }

    public function data_user()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('status', 2);
        return $this->db->get()->result();
    }

    public function user_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('users')->row();
    }

    public function proses_konfirmasi($id)
    {
        $this->db->query("UPDATE `users` SET `status` = '2' WHERE `users`.`id` = $id");
    }

    public function get_nilai()
    {
        $this->db->select('*');
        $this->db->from('nilai');
        $this->db->join('users', 'users.id = nilai.id_user');
        return $this->db->get()->result();
    }

    public function save_nilai()
    {
        $post = $this->input->post();
        $this->id_user = $post['id_user'];
        $this->speed = $post['speed'];
        $this->power = $post['power'];
        $this->stamina = $post['stamina'];
        $this->agility = $post['agility'];
        $this->kedisiplinan = $post['kedisiplinan'];
        $this->gerak_teknik = $post['gerak_teknik'];
        $this->db->insert($this->nilai, $this);
    }

    public function update_nilai()
    {
        $post = $this->input->post();
        $this->id_nilai = $post['id_nilai'];
        $this->id_user = $post['id_user'];
        $this->speed = $post['speed'];
        $this->power = $post['power'];
        $this->stamina = $post['stamina'];
        $this->agility = $post['agility'];
        $this->kedisiplinan = $post['kedisiplinan'];
        $this->gerak_teknik = $post['gerak_teknik'];
        $this->db->update($this->nilai, $this, ['id_nilai' => $post['id_nilai']]);
    }

    public function delete_nilai($id)
    {
        return $this->db->delete($this->nilai, array('id_nilai' => $id));
    }

}