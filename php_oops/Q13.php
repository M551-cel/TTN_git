 <?php
trait trait1 {
  public function msg1() {
    echo "trait1 is running\n";
  }
}

trait trait2 {
  public function msg2() {
    echo "trait2 is running\n";
  }
}
trait trait3 {
  public function msg3() {
    echo "trait3 is running\n";
  }
}


class Welcome {
  use trait1, trait2, trait3;
  public function msg1(){
      echo "welcome is running\n";
  }

}

$obj = new Welcome();
$obj->msg1();
$obj->msg2();
$obj->msg3();
?> 