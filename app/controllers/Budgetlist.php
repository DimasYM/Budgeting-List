<?php

class Budgetlist extends Controller {
  public function index()
  {
    $data["judul"] = "Data Budgetlist";
    $data["Budgetlist"] = $this->model("BudgetlistModel")->getAllBudgetlist();
    $this->view("templates/header", $data);
    $this->view("Budgetlist/index", $data);
    $this->view("templates/footer");
  }

  public function tambahBudgetlist()
  {
    if ($this->model("BudgetlistModel")->tambahDataBudgetlist($_POST) > 0){
      Flasher::setFlash('Data Budgetlist', 'berhasil', 'ditambahkan', 'success');
      header("Location:" . BASEURL . "/Budgetlist");
      exit;
    } else{
      Flasher::setFlash('Data Budgetlist', 'gagal', 'ditambahkan', 'danger');
      header("Location:" . BASEURL . "/Budgetlist");
      exit;
    }
  }

  public function getUbahBudgetlist()
  {
    echo json_encode($this->model("BudgetlistModel")->getBudgetlistById($_POST["id"]));
  }

  public function editBudgetlist()
  {
    if ($this->model("BudgetlistModel")->ubahDataBudgetlist($_POST) > 0){
      Flasher::setFlash('Data Budgetlist', 'berhasil', 'diubah', 'success');
      header("Location:" . BASEURL . "/Budgetlist");
      exit;
    } else{
      Flasher::setFlash('Data Budgetlist', 'gagal', 'diubah', 'danger');
      header("Location:" . BASEURL . "/Budgetlist");
      exit;
    }
  }

  public function hapusBudgetlist($id)
  {
    if ($this->model("BudgetlistModel")->hapusDataBudgetlist($id) > 0){
      Flasher::setFlash('Data Budgetlist', 'berhasil', 'dihapus', 'success');
      header("Location:" . BASEURL . "/Budgetlist");
      exit;
    } else{
      Flasher::setFlash('Data Budgetlist', 'gagal', 'dihapus', 'danger');
      header("Location:" . BASEURL . "/Budgetlist");
      exit;
    }
  }

}