<?php 
  
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
   
class pengunjungModel extends Model
{
    protected $table = 'pengunjung';
   
    protected $allowedFields = ['nama','keperluan','alamat'];
      
    public function __construct() {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
        $builder = $db->table('pengunjung');
    }
      
    public function insert_data($data) {
        if($this->db->table($this->table)->insert($data))
        {
            return $this->db->insertID();
        }
        else
        {
            return false;
        }
    }
}
?>