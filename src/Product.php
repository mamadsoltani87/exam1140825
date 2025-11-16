<?php
declare(strict_types=1);

/**
 * Abstract base class for all products in this exam.
 *
 * NOTE TO STUDENTS:
 * - Do NOT rename this class or its methods.
 * - Complete all TODO sections as described in README.md.
 */
abstract class Product
{
    // TODO(Task 1):
    // Add protected properties:
    protected int $id ;
    protected string $title ;
    protected int $price ;

    
     // TODO(Task 1):
     // Implement a constructor with the exact signature:
     
      public function __construct(int $id, string $title, int $price)
     {
      $this->id =$id;
      $this->title =$title;
      $this->price =$price;
     }
    // It must assign the arguments to the protected properties.
     

     // TODO(Task 1):
     // Implement this method to return the product title.
     //
      public function gettitle(): string
    {
      return $this->title;
    }
    
    //TODO(Task 1):
    // Implement this method to return the product price.
    
     public function getprice(): int
     {
       return $this->price;
     }
    /**
     * Each subclass must return a human-readable type label,
     * for example "Book" or "Notebook".
     *
     * This method MUST stay abstract.
     */
    abstract public function getTypeLabel(): string;
}
