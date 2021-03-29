<?php
class mahasiswa_model extends CI_Model {
  public function get_data(){
    $data_mahasiswa = [
        ['Nama'=>'Galuh','Prodi'=>'TIF'],
        ['Nama'=>'Laksita','Prodi'=>'MIF'],
        ['Nama'=>'Naraswari','Prodi'=>'TKK']
      ];
    return $data_mahasiswa;
  }
}