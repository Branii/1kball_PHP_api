<?php
require __DIR__ . "/vendor/config.php";
class HomeController {

  public function fetch_1kball1min() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10001"
    ]);
    echo json_encode($result);
  }

  public function fetch_luckypick5() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10002"
    ]);
    echo json_encode($result);
  }

  public function fetch_speedy1min() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10003"
    ]);
    echo json_encode($result);
  }

  public function fetch_speedy5d() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10004"
    ]);
    echo json_encode($result);
  }

  public function fetch_lucky5d() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10005"
    ]);
    echo json_encode($result);
  }

  public function fetch_fsat3() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10006"
    ]);
    echo json_encode($result);
  }

  public function fetch_fast3() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10007"
    ]);
    echo json_encode($result);
  }

  public function fetch_luckyfast3() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10008"
    ]);
    echo json_encode($result);
  }

  public function fetch_1kballpc28() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10009"
    ]);
    echo json_encode($result);
  }

  public function fetch_speedypc28() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10010"
    ]);
    echo json_encode($result);
  }

  public function fetch_luckypc28() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10011"
    ]);
    echo json_encode($result);
  }

  public function fetch_lucky3d() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10012"
    ]);
    echo json_encode($result);
  }

  public function fetch_speedypk10() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10013"
    ]);
    echo json_encode($result);
  }

  public function fetch_luckypk10() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10014"
    ]);
    echo json_encode($result);
  }

  public function fetch_speedy11x5() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10015"
    ]);
    echo json_encode($result);
  }

  public function fetch_lucky11x5() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10016"
    ]);
    echo json_encode($result);
  }

  public function fetch_lucky49x7() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10017"
    ]);
    echo json_encode($result);
  }

  public function fetch_1kball5d() {
    $result = $GLOBALS['con']->select("draws_tbl", [
      "gameid"=>"10018"
    ]);
    echo json_encode($result);
  }


}