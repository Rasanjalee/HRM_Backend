<?php

namespace App\Entity;

use App\Repository\EmployeeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmployeeRepository::class)
 */
class Employee
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emp_first_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emp_last_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emp_address;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmpFirstName(): ?string
    {
        return $this->emp_first_name;
    }

    public function setEmpFirstName(string $emp_first_name): self
    {
        $this->emp_first_name = $emp_first_name;

        return $this;
    }

    public function getEmpLastName(): ?string
    {
        return $this->emp_last_name;
    }

    public function setEmpLastName(string $emp_last_name): self
    {
        $this->emp_last_name = $emp_last_name;

        return $this;
    }

    public function getEmpAddress(): ?string
    {
        return $this->emp_address;
    }

    public function setEmpAddress(string $emp_address): self
    {
        $this->emp_address = $emp_address;

        return $this;
    }
}
