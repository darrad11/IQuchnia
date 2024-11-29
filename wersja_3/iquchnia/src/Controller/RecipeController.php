<?php

namespace App\Controller;

use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecipeController extends AbstractController
{
    #[Route('/recipes', name: 'recipe_list')]
    public function list(RecipeRepository $recipeRepository): Response
    {
        // Pobieramy wszystkie przepisy z bazy danych
        $recipes = $recipeRepository->findAll();

        // Przekazujemy przepisy do widoku
        return $this->render('recipe/index.html.twig', [
            'recipes' => $recipes,
        ]);
    }
    #[Route('/recipes/filter', name: 'recipe_filter')]
    public function filter(Request $request, RecipeRepository $recipeRepository): Response
    {
        $criteria = [
            'cuisine' => $request->query->get('cuisine'),
            'difficulty' => $request->query->get('difficulty'),
            'is_vegetarian' => $request->query->get('is_vegetarian'),
        ];

        $recipes = $recipeRepository->findByFilters($criteria);

        return $this->render('recipe/filter.html.twig', [
            'recipes' => $recipes,
        ]);
    }
}
