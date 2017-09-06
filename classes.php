<?php

class Car
{
	public $color;
	private $make;
	private $year;
	private $price;

	public function __construct($color, $make, $year, $price)
	{
		$this->color = $color;
		$this->make = $make;
		$this->year = $year;
		$this->price = $price;
	}

	public function getPrice()
	{
		if ($this->year > 2011) {
			return ($this->price - 2000);
		} else
		{
			return $this->price;
		}
	}

}

$car1 = new Car ('white', 'BMW', 2013, 35000);
echo $car1->getPrice()."<br>";
echo $car1->color."<br>";

$car2 = new Car ('red', 'Opel', 2010, 12000);
echo $car2->getPrice()."<br>";

//exit();

class Television
{
	private $screen_size = 32;
	private $brand;
	private $price;
	
	
	public function __construct($brand, $screen_size, $price)
	{
		$this->brand = $brand;
		$this->$screen_size = $screen_size;
		$this->price = $price;
	}

	public function getScreenSize($screen_size)
	{
		return $this->screen_size = $screen_size;
	}

	public function getPrice()
	{
		return $this->price;
	}

}

$television1 = new Television('LG', 43, 5000);
echo $television1->getScreenSize(43)."<br>";
echo $television1->getPrice()."<br>";

$television2 = new Television('Samsung', 32, 3500);
echo $television2->getScreenSize(32)."<br>";


class Pen
{
	private $color;
	private $inkColor;
	public static $total_pens = 0;

	public function __construct ($color)
	{
		$this->color = $color;
		Pen::$total_pens++;
	}
	
	public function getInkColor()
	{
		if ($this->color === 'red') 
		{
			return $this->inkColor = 'black';
		}
		else 
		{
			return $this->inkColor = 'blue';
		}
	}
	
	public function getColor()
	{
		return $this->color;
	}
}

$pen1 = new Pen('red');
echo $pen1->getColor().": ";
echo $pen1->getInkColor()."<br>";

$pen2 = new Pen('pink');
echo $pen2->getColor().": ";
echo $pen2->getInkColor()."<br>";

echo Pen::$total_pens ."<br>";


class Duck
{
	private $color;
	private $gender;
	private $age;
	
	public function __construct($color, $gender, $age)
	{
		$this->color = $color;
		$this->gender = $gender;
		$this->age = $age;
	}

	public function abilityToFly()
	{
		if ($this->age >= 1 && $this->age <= 7) {
			echo "Duck can fly.";
		}
		else 
		{
			echo "Duck can't fly.";
		}
	}

	public function getAge()
	{
		return $this->age;
	}

	public function abilityToLayEggs()
	{
		if($this->gender === "female")
		{
			echo "Duck is able to lay eggs.";
		} 
		else
		{
			echo "Duck is a male and can't lay eggs.";
		} 
		
	}
}

$duck1 = new Duck('white', 'male', 5);
echo $duck1->getAge()."<br>";
echo $duck1->abilityToFly()."<br>";
echo $duck1->abilityToLayEggs()."<br>";

$duck2 = new Duck('black', 'female', 8);
echo $duck2->getAge()."<br>";
echo $duck2->abilityToFly()."<br>";
echo $duck2->abilityToLayEggs()."<br>";


class Product
{
	private $category;
	private $views;
	private $price;
	private $discount = 0;
	private $shipping;
	
	public function __construct($category, $views, $price, $discount)
	{
		$this->category = $category;
		$this->views = $views;
		$this->price = $price;
		$this->discount = $discount;
	}

	public function mostPopular()
	{
		if ($this->views >= 100) {
			echo "Most popular in ", $this->category;
		}
		else
		{
			return $this->views;
		}
	}

	public function getPrice()
	{
		return $this->price = round($this->price - ($this->price * $this->discount) / 100);
	}

	public function getFreeShipping()
	{
		$shipping = 5.99;
		if($this->price >= 2000 || $this->views >= 200)
		{
			$shipping = 0;
			echo "Your order is eligable for a Free Shipping";
		} 
		else 
		{
			echo "Shipping is ", $shipping;
		}
	}
}

$product1 = new Product('Dresses', 150, 1000, 15);
echo "Price: ", $product1->getPrice()."<br>";
echo $product1->mostPopular()."<br>";
echo $product1->getFreeShipping()."<br>";

$product2 = new Product('Antiques', 250, 20000, 10);
echo "Price: ", $product2->getPrice()."<br>";
echo $product2->mostPopular()."<br>";
echo $product2->getFreeShipping()."<br>";





?>