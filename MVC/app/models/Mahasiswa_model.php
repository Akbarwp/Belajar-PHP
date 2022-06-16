<?php 
    class Mahasiswa_model {
        // private $mhs  = [
        //     [
        //         "nama" => "Ucup bin Slamet",
        //         "nim" => "12345",
        //         "email" => "UcupGanteng@gmail.com",
        //         "jurusan" => "S1 Meniup Gelembung"
        //     ],

        //     [
        //         "nama" => "Udin Sarudin",
        //         "nim" => "54321",
        //         "email" => "UdinSedunia@gmail.com",
        //         "jurusan" => "S1 Peniup Karang"
        //     ],

        //     [
        //         "nama" => "Minten Juminten",
        //         "nim" => "15269",
        //         "email" => "MintenAsri@gmail.com",
        //         "jurusan" => "S1 Guru Pengemudi"
        //     ]
        // ];

        // // Database Handler
        // private $dbh, $stmt;

        // function __construct() {
        //     // Data Source Name
        //     $dsn = 'mysql:host=localhost;dbname=php_mvc';

        //     try {

        //         $this->dbh = new PDO($dsn, 'root', '');

        //     } catch(PDOException $e) {
        //         die($e->getMessage());
        //     }
        // }

        // function getMahasiswa() {
        //     $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        //     $this->stmt->execute();
        //     return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        // }

        private $table = 'mahasiswa';
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getMahasiswa() {
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        public function getMahasiswaById($id) {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id =:id');
            $this->db->bind('id', $id);

            return $this->db->single();
        }

        public function tambahDataMahasiswa($data) {
            $query = "INSERT INTO mahasiswa VALUES ('', :nama, :nim, :email, :jurusan)";

            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('nim', $data['nim']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('jurusan', $data['jurusan']);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function hapusDataMahasiswa($id) {
            $query = "DELETE FROM mahasiswa WHERE id = :id";

            $this->db->query($query);
            $this->db->bind('id', $id);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function ubahDataMahasiswa($data) {
            $query = "UPDATE mahasiswa SET
                        nama = :nama,
                        nim = :nim,
                        email = :email,
                        jurusan = :jurusan
                        WHERE id = :id";

            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('nim', $data['nim']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('jurusan', $data['jurusan']);
            $this->db->bind('id', $data['id']);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function cariDataMahasiswa() {
            
            $keyword = $_POST['keyword'];
            $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";

            $this->db->query($query);
            $this->db->bind('keyword', "%$keyword%");

            return $this->db->resultSet();
        }
    }
?>