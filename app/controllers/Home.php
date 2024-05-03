<?php

class Home extends Controller{
  public function index()
  {
    $data["judul"] = "Dashboard Event Management";
    $data["jumlahBudgetlist"] = $this->model("BudgetlistModel")->countBudgetlist();
    $this->view("templates/header", $data);
    $this->view("home/index", $data);
    $this->view("templates/footer");
  }
}