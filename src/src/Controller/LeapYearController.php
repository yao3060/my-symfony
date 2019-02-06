<?php
// src/Controller/LeapYearController.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class LeapYearController
{
    public function index($year = 2012)
    {
        if ($this->isLeapYear($year)) {
            return new JsonResponse(['Yep, this is a leap year!']);
        }

        return new JsonResponse(['Nope, this is not a leap year.']);
    }

    public function isLeapYear($year = null)
{
    if (null === $year || !is_int($year)) {
        $year = date('Y');
    }
    // var_dump($year);die;
    return 0 === $year % 400 || 0 === $year % 4 && 0 !== $year % 100;
}
}