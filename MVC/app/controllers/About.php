<?php 

    class About extends Controller {

        function index($nama = "Ucup", $pekerjaan = "Mahasiswa", $umur = 21) {
            
            $data['nama'] = $nama;
            $data['pekerjaan'] = $pekerjaan;
            $data['umur'] = $umur;
            $data['judul'] = 'About';

            $this->view('templates/header', $data);
            $this->view('about/index', $data);
            $this->view('templates/footer');
        }

        function page() {
            $data['judul'] = 'Page';

            $this->view('templates/header', $data);
            $this->view('about/page');
            $this->view('templates/footer');
        }
    }
?>