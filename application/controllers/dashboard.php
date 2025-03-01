<?php 
class Dashboard extends CI_Controller{
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login</div>');
            redirect('auth/login');

        }

    }
    public function index(){
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
        
    }
    public function tambah_keranjang($id){
        $barang = $this->model_barang->find($id); 
        $data = array(
         'id' => $barang->id_brg,
         'qty' => 1,
         'price' => $barang->harga,
         'name' => $barang->nama_brg
        );
 
        $this->cart->insert($data);
        redirect('dashboard');
     }
 
     public function detail_keranjang(){
         $this->load->view('templates/header');
         $this->load->view('templates/sidebar');
         $this->load->view('keranjang');
         $this->load->view('templates/footer');
     }
 
     public function hapus_keranjang(){
         $this->cart->destroy();
         redirect('dashboard');
     }
 
     public function pembayaran(){
         $this->load->view('templates/header');
         $this->load->view('templates/sidebar');
         $this->load->view('pembayaran');
         $this->load->view('templates/footer');
     }
 
     public function proses_pesanan(){
         $is_processed = $this->model_invoice->index();
         if($is_processed){
         $this->cart->destroy();
         $this->load->view('templates/header');
         $this->load->view('templates/sidebar');
         $this->load->view('proses_pesanan');
         $this->load->view('templates/footer');
         } else{
             echo "Maaf, Pesanan Anda Gagal doproses";
         }
         
     }
 
     public function detail($id_brg){
         $data['barang'] = $this->model_barang->detail_brg($id_brg);
         $this->load->view('templates/header');
         $this->load->view('templates/sidebar');
         $this->load->view('detail_barang', $data);
         $this->load->view('templates/footer');
 
     }
     public function cari() {
        // Ambil keyword dari form pencarian
        $keyword = $this->input->get('keyword');
        
        // Load model produk
        $this->load->model('produk_model');
        
        // Panggil fungsi pencarian di model
        $data['produk'] = $this->produk_model->cari_produk($keyword);
        
        // Jika produk kosong, set pesan error
        if(empty($data['produk'])) {
            $data['error_message'] = 'Maaf, produk tersebut tidak tersedia.';
        }
        
        // Load view dengan hasil pencarian
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);  // Sesuaikan view yang Anda gunakan
        $this->load->view('templates/footer');
    }
    
    
    
}


?>