<?php


class Product
{
    private $productid;
    private $productName;
    private $productDescription;
    private $productPrice;
    public $productAttrib = array();

//    public function __construct($productid, $productName, $productDescription, $productPrice)
//    {
//        $this->productid=$productid;
//        $this->productName=$productName;
//        $this->productDescription=$productDescription;
//        $this->productPrice=$productPrice;
//    }

    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    public function setProductid($productid)
    {
        $this->productid = $productid;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function getProductDescription()
    {
        return $this->productDescription;
    }

    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;
    }

    public function getProductPrice()
    {
        return $this->productPrice;
    }

    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;
    }

    public function getProductAttrib()
    {
        return $this->productAttrib;
    }

    public function getProductid()
    {
        return $this->productid;
    }
    public function setProductAttribute($productAttrib)
    {
        $this->productAttrib[]=$productAttrib;
    }



}

