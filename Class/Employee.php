<?php

class Employee
{

  public string $lastName;
  public string $firstName;
  private string $email;
  private string $address;
  private string $phone;
  private int $secu;


  public function __construct(
    string $lastName,
    string $firstName,
    string $email,
    string $address,
    string $phone,
    int $secu
    )
  {
    $this->lastName = $lastName;
    $this->firstName = $firstName;
    $this->email = $email;
    $this->address = $address;
    $this->phone = $phone;
    $this->secu = $secu;
  }

  


  
  
  /**
   * getLastName
   *
   * @return string
   */
  public function getLastName(): string
  {
    return $this->lastName;
  }

  
  /**
   * setLastName
   *
   * @param  mixed $lastName
   * @return void
   */
  public function setLastName(string $lastName): void
  {
    $this->lastName = $lastName;

  }
  
  /**
   * getFirstName
   *
   * @return string
   */
  public function getFirstName(): string
  {
    return $this->firstName;
  }
  
  /**
   * setFirstName
   *
   * @param  string $firstName
   * @return void
   */
  public function setFirstName(string $firstName): void
  {
    $this->firstName = $firstName;

  }
  

  /**
   * getEmail
   *
   * @return string
   */
  public function getEmail(): string
  {
    return $this->email;
  }

  
  /**
   * setEmail
   *
   * @param  string $email
   * @return void
   */
  public function setEmail(string $email): void
  {
    $this->email = $email;
  }

  
  /**
   * getAddress
   *
   * @return string
   */
  public function getAddress(): string
  {
    return $this->address;
  }

  
  /**
   * setAddress
   *
   * @param  string $address
   * @return void
   */
  public function setAddress(string $address): void
  {
    $this->address = $address;
  }

  
  /**
   * getPhone
   *
   * @return string
   */
  public function getPhone(): string
  {
    return $this->phone;
  }

  
  /**
   * setPhone
   *
   * @param  mixed $phone
   * @return void
   */
  public function setPhone(string $phone): void 
  {
    $this->phone = $phone;
  }

  
  /**
   * getSecu
   *
   * @return int
   */
  public function getSecu(): int
  {
    return $this->secu;
  }
  
  /**
   * setSecu
   *
   * @param  int $secu
   * @return void
   */
  public function setSecu(int $secu): void
  {
    $this->secu = $secu;
  }

  public function displayInfosWorker(): void
  {

    echo "
      <section>
        <h2>Bienvenue " .$this->getFirstName(). " " .$this->getLastName(). "</h2>
        <h3>Vos informations personnelles:</h3>
        <ul>
          <li>Email: " .$this->getEmail(). "</li>
          <li>Adresse: " .$this->getAddress(). "</li>
          <li>Téléphone: " .$this->getPhone(). "</li>
          <li>Numéro de sécurité social: " .$this->getSecu(). "</li>
        </ul>
      </section>
    
    ";
  }
}