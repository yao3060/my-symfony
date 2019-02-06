<?php
// create_product.php <name>
// require_once "bootstrap.php";

// $passport = new Passport();
// $passport->setName("YAOYINGYING");

// $newNameCn = $argv[1];
// $passport->setNameCn($newNameCn);
// $passport->setPassportNO("E20354xxxx");

// $entityManager->persist($passport);
// $entityManager->flush();

// echo "Created passport with ID " . $passport->getId() . "\n";

namespace App\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Model\Passport;

class PassportController {

    public function list()
    {
        # code...
        $passport = new Passport();
    }

    public function save(Request $request)
    {
        # code...
        $passport = new Passport();

        $passport->setName("YAOYINGYING");
        $passport->setNameCn($newNameCn);
        $passport->setPassportNO("E20354xxxx");

        $entityManager->persist($passport);
        $entityManager->flush();

        echo "Created passport with ID " . $passport->getId() . "\n";
    }
}