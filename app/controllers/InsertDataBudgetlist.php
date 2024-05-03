<?php

class InsertDataBudgetlist extends Controller {
  public function index()
  {
    $data["judul"] = "Tambah Data Event";
    $this->view("templates/header", $data);
    $this->view("InsertDataBudgetlist/index");
    $this->view("templates/footer");
  }
}