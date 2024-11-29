<?php

namespace App\Repository;

use App\Entity\Recipe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Recipe>
 */
class RecipeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Recipe::class);
    }

    public function findByFilters(array $criteria): array
    {
        $qb = $this->createQueryBuilder('r');

        if (isset($criteria['cuisine'])) {
            $qb->andWhere('r.cuisine = :cuisine')
                ->setParameter('cuisine', $criteria['cuisine']);
        }

        if (isset($criteria['difficulty'])) {
            $qb->andWhere('r.difficulty = :difficulty')
                ->setParameter('difficulty', $criteria['difficulty']);
        }

        if (isset($criteria['isVegetarian'])) {
            $qb->andWhere('r.is_vegetarian = :is_vegetarian')
                ->setParameter('is_vegetarian', (bool) $criteria['is_vegetarian']);
        }

        return $qb->getQuery()->getResult();
    }
}