<?php

namespace App\Repository;

use App\Entity\Employee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Employee|null find($id, $lockMode = null, $lockVersion = null)
 * @method Employee|null findOneBy(array $criteria, array $orderBy = null)
 * @method Employee[]    findAll()
 * @method Employee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmployeeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Employee::class);
    }

    // /**
    //  * @return Employee[] Returns an array of Employee objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Employee
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function transform(Employee $employee)
    {
        return [
            'id'    => (int) $employee->getId(),
            'emp_first_name' => (string) $employee->getEmpFirstName(),
            'emp_last_name' => (string) $employee->getEmpLastName(),
            'emp_address' => (string) $employee->getEmpAddress()
        ];
    }

    public function transformAll()
    {
//        $employee = $this->findAll();
        $employee = ['emp_first_name'=> 'smith','emp_last_name'=>'john','emp_address'=>'4.inhj,hfhj'];
        $employeeArray = [];

        foreach ($employee as $employee) {
            $employeeArray[] = $this->transform($employee);
        }

        return $employeeArray;
    }
}
