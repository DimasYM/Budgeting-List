<?php
class BudgetlistModel 
{
  private $table = "budgetlist";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllBudgetlist()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function getColumnsBudgetlist()
  {
    $this->db->query("SHOW COLUMNS FROM ". $this->table);
    return $this->db->resultSet();
  }

  public function countBudgetlist()
    {
      $this->db->query("SELECT COUNT(*) as total FROM ". $this->table);
      $result = $this->db->single();

      return $result['total'];
    }


    // public function tambahDataBudgetlist($data)
    // {
    //     // Pertama, upload gambar
    //     // $target_dir = BASEURL . "/img/";
    //     $target_dir = "img/";
    //     // $target_dir = "../../public/img/";
    //     // $target_dir = "D:/XAMPP/htdocs/PWEB/Tugas-crud-app-manager/public/img/";
    //     $target_file = $target_dir . basename($_FILES["image"]["name"]);
    //     $uploadOk = 1;
    //     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    //     // Check if image file is a actual image or fake image
    //     if(isset($_POST["submit"])) {
    //         $check = getimagesize($_FILES["image"]["tmp_name"]);
    //         if($check !== false) {
    //             $uploadOk = 1;
    //         } else {
    //             echo "File bukan gambar.";
    //             $uploadOk = 0;
    //         }
    //     }
    
    //     // Check if file already exists
    //     if (file_exists($target_file)) {
    //         echo "Maaf, file sudah ada.";
    //         $uploadOk = 0;
    //     }
    
    //     // Check file size
    //     if ($_FILES["image"]["size"] > 500000) {
    //         echo "Maaf, ukuran file terlalu besar.";
    //         $uploadOk = 0;
    //     }
    
    //     // Allow certain file formats
    //     if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    //     && $imageFileType != "gif" ) {
    //         echo "Maaf, hanya format JPG, JPEG, PNG & GIF yang diperbolehkan.";
    //         $uploadOk = 0;
    //     }
    
    //     // Check if $uploadOk is set to 0 by an error
    //     if ($uploadOk == 0) {
    //         echo "Maaf, file tidak diunggah.";
    //     // if everything is ok, try to upload file
    //     } else {
    //         if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    //             // Jika gambar berhasil diunggah, tambahkan data mobil ke database
    //             $query = "INSERT INTO " . $this->table . "(tanggal, daybudget, monthbudget, tanggal_event, image_path) 
    //                       VALUES (:tanggal, :daybudget, :monthbudget, , :image_path)";
        
    //             $this->db->query($query);
    //             $this->db->bind(":tanggal", $data["tanggal"]);
    //             $this->db->bind(":daybudget", $data["daybudget"]);
    //             $this->db->bind(":monthbudget", $data["monthbudget"]);
    //             $this->db->bind("", $data["tanggal_event"]);
    //             $this->db->bind(":image_path", $target_file);
    
    //             $this->db->execute();
    //             return $this->db->rowCount();
    //         } else {
    //             echo "Maaf, terjadi kesalahan saat mengunggah file.";
    //         }
    //     }
    // }

  public function tambahDataBudgetlist($data)
  {
    $query = "INSERT INTO " . $this->table . 
                  " VALUES
          ('', :tanggal, :daybudget, :monthbudget)";
    
            $this->db->query($query);
            $this->db->bind("tanggal", $data["tanggal"]);
            $this->db->bind("daybudget", $data["daybudget"]);
            $this->db->bind("monthbudget", $data["monthbudget"]);

    $this->db->execute();
    return $this->db->rowCount();

  }

  public function getBudgetlistById($id)
  {
    $this->db->query("SELECT * FROM ". $this->table . " WHERE id=:id");
    $this->db->bind("id", $id);
    return $this->db->single();
  }


  // public function ubahDataBudgetlist($data)
  // {
  //   //   // Jika ada gambar yang diunggah, proses pembaruan gambar
  //   //   if ($_FILES['image']['name']) {
  //   //       // Pertama, upload gambar baru
  //   //       $target_dir = "img/";
  //   //       $target_file = $target_dir . basename($_FILES["image"]["name"]);
  //   //       $uploadOk = 1;
  //   //       $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      
  //   //       // Check if image file is a actual image or fake image
  //   //       if(isset($_POST["submit"])) {
  //   //           $check = getimagesize($_FILES["image"]["tmp_name"]);
  //   //           if($check !== false) {
  //   //               $uploadOk = 1;
  //   //           } else {
  //   //               echo "File bukan gambar.";
  //   //               $uploadOk = 0;
  //   //           }
  //   //       }
      
  //   //       // Check if file already exists
  //   //       if (file_exists($target_file)) {
  //   //           echo "Maaf, file sudah ada.";
  //   //           $uploadOk = 0;
  //   //       }
      
  //   //       // Check file size
  //   //       if ($_FILES["image"]["size"] > 500000) {
  //   //           echo "Maaf, ukuran file terlalu besar.";
  //   //           $uploadOk = 0;
  //   //       }
      
  //   //       // Allow certain file formats
  //   //       if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  //   //       && $imageFileType != "gif" ) {
  //   //           echo "Maaf, hanya format JPG, JPEG, PNG & GIF yang diperbolehkan.";
  //   //           $uploadOk = 0;
  //   //       }
  
  //   //       // Jika semua validasi berhasil, lanjutkan dengan pembaruan data mobil
  //   //       if ($uploadOk == 1) {
  //   //           // Jika gambar berhasil diunggah, tambahkan data mobil ke database
  //   //           $query = "UPDATE " . $this->table . " SET 
  //   //                     tanggal = :tanggal,
  //   //                     daybudget = :daybudget,
  //   //                     monthbudget = :monthbudget,
  //   //                     tanggal_event = ,
  //   //                     image_path = :image_path
  //   //                   WHERE id = :id";
          
  //   //           $this->db->query($query);
  //   //           $this->db->bind(":id", $data["id"]);
  //   //           $this->db->bind(":tanggal", $data["tanggal"]);
  //   //           $this->db->bind(":daybudget", $data["daybudget"]);
  //   //           $this->db->bind(":monthbudget", $data["monthbudget"]);
  //   //           $this->db->bind("", $data["tanggal_event"]);
  //   //           $this->db->bind(":image_path", $target_file);
      
  //   //           $this->db->execute();
  //   //           return $this->db->rowCount();
  //   //       } else {
  //   //           echo "Maaf, terjadi kesalahan saat mengunggah file.";
  //   //       }
  //   //   } else {
  //         // Jika tidak ada gambar yang diunggah, lakukan pembaruan data mobil tanpa memperbarui gambar
  //         $query = "UPDATE " . $this->table . " SET 
  //                   tanggal = :tanggal,
  //                   daybudget = :daybudget,
  //                   monthbudget = :monthbudget,
  //                   tanggal_event = 
  //                 WHERE id = :id";
      
  //         $this->db->query($query);
  //         $this->db->bind(":id", $data["id"]);
  //         $this->db->bind(":tanggal", $data["tanggal"]);
  //         $this->db->bind(":daybudget", $data["daybudget"]);
  //         $this->db->bind(":monthbudget", $data["monthbudget"]);
  //         $this->db->bind("", $data["tanggal_event"]);
  
  //         $this->db->execute();
  //         return $this->db->rowCount();
  //   }
  

  public function ubahDataBudgetlist($data)
  {
    $query = "UPDATE " . $this->table . " SET 
              tanggal = :tanggal,
              daybudget = :daybudget,
              monthbudget = :monthbudget,
              tanggal_event = ,
            WHERE id = :id;";
    
    $this->db->query($query);
    $this->db->bind("id", $data["id"]);
    $this->db->bind("tanggal", $data["tanggal"]);
    $this->db->bind("daybudget", $data["daybudget"]);
    $this->db->bind("monthbudget", $data["monthbudget"]);


    $this->db->execute();
    return $this->db->rowCount();

  } 

  public function hapusDataBudgetlist($id)
  {
    $query = "DELETE FROM " . $this->table . 
              " WHERE id = :id";
    $this->db->query($query);
    $this->db->bind("id", $id);
    $this->db->execute();

    return $this->db->rowCount();
  }
}


