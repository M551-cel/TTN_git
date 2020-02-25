interface Car {
  function getPrice();
  function getYear();
}

class CarModelP implements Car {
  protected $year = 2004;
  protected $price = 800000;

  public function getPrice()
  {
    return $this->price;
  }
  public function getYear()
  {
    return $this->year;
  }
}

class CarModelQ implements Car {
    protected $year = 2013;
  protected $price = 1500000;

  public function getModel()
  {
    return $this->price;
  }
  public function getYear()
  {
    return $this->year;
  }
}

class CarModelR implements Car {
    protected $year = 2016;
  protected $price = 1800000;

  public function getPrice()
  {
    return $this->price;
  }
  public function getYear()
  {
    return $this->year;
  }
}

class CarModelS implements Car {
    protected $year = 2017;
  protected $price = 1900000;

  public function getPrice()
  {
    return $this->price;
  }
  public function getYear()
  {
    return $this->year;
  }
}

class CarFactory {
 
  protected $car;
  
  // Determine which model to manufacture, and instantiate 
  //  the concrete classes that make each model.
  public function make($model=null)
  {
    if(strtolower($model) == 'p')
      return $this->car = new CarModelP();
      else
      if(strtolower($model) == 'q')
      return $this->car = new CarModelQ();
      else
      if(strtolower($model) == 'r')
      return $this->car = new CarModelR();
      else
      return $this->car = new CarModelS();
  }
}
class CarOrder {
  protected $car;
  
  // First, create the carFactory object in the constructor.
  public function __construct()
  {
    $this->car = new CarFactory();
  }
    public function order($model=null)
  {
    // Use the make() method from the carFactory.
    $car = $this->car->make($model);
    echo $car->getPrice();
    echo $car->getYear();
  }
}