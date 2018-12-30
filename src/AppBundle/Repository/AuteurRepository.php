<?php

namespace AppBundle\Repository;

class AuteurRepository extends \Doctrine\ORM\EntityRepository
{

	/*public function AuteurBooks($id)
	{
	    $rawSql = "SELECT * from auteurs where auteurs. = $id";

	    $stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
	    $stmt->execute([]);

	    return $stmt->fetchAll();
}
*/
}
