<?php
namespace App\Controller;

use App\Repository\EmployeeRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class Controller
{
    /**
     * @Route("/details" ,methods="GET")
     * @param EmployeeRepository $employeeRepository
     * @return JsonResponse
     */
    public function moviesAction(EmployeeRepository $employeeRepository)
    {
//        $employee=$employeeRepository->findAll();
//        return new JsonResponse($employee);
        return new JsonResponse([
                'emp_first_name' => 'The Princess Bride',
                'emp_last_name' => 'Smith',
                'emp_address'=> '78/35, adrem Lane , Srilanaka'
        ]);
    }
}
