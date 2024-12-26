<?php 
  
namespace App\Controllers;
   
use CodeIgniter\Controller;
use App\Models\pengunjungModel;
   
class pengunjung extends Controller
{
   
    public function index()
    {    
        $model = new pengunjungModel();
   
        $data['pengunjung_detail'] = $model->orderBy('id', 'DESC')->findAll();
          
        return view('list', $data);
    }    
  
   
    public function store()
    {  
        helper(['form', 'url']);
           
        $model = new pengunjungModel();
          
        $data = [
            'nama' => $this->request->getVar('txtnama'),
            'keperluan'  => $this->request->getVar('txtkeperluan'),
            'alamat'  => $this->request->getVar('txtalamat'),
            ];
        $save = $model->insert_data($data);
        if($save != false)
        {
            $data = $model->where('id', $save)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }
   
    public function edit($id = null)
    {
        
     $model = new pengunjungModel();
      
     $data = $model->where('id', $id)->first();
       
    if($data){
            echo json_encode(array("status" => true , 'data' => $data));
        }else{
            echo json_encode(array("status" => false));
        }
    }
   
    public function update()
    {  
   
        helper(['form', 'url']);
           
        $model = new pengunjungModel();
  
        $id = $this->request->getVar('hdnpengunjungId');
  
         $data = [
            'nama' => $this->request->getVar('nama'),
            'keperluan'  => $this->request->getVar('keperluan'),
            'alamat'  => $this->request->getVar('alamat'),
            ];
  
        $update = $model->update($id,$data);
        if($update != false)
        {
            $data = $model->where('id', $id)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }
   
    public function delete($id = null){
        $model = new pengunjungModel();
        $delete = $model->where('id', $id)->delete();
        if($delete)
        {
           echo json_encode(array("status" => true));
        }else{
           echo json_encode(array("status" => false));
        }
    }
}
  
?>