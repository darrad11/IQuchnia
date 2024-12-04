<?php

namespace App\Controller;

use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecipeController extends AbstractController
{
    // Trasa dla listy przepisów
    #[Route('/recipes', name: 'recipe_list')]
    public function list(Request $request, RecipeRepository $recipeRepository): Response
    {
        $search = $request->query->get('search');

        if ($search) {
            $recipes = $recipeRepository->findBySearch($search);
        } else {
            $recipes = $recipeRepository->findAll();
        }

        return $this->render('recipe/index.html.twig', [
            'recipes' => $recipes,
            'search' => $search,
        ]);
    }

    // Trasa dla filtracji przepisów
    #[Route('/filter', name: 'recipe_filter')]
    public function filter(Request $request, RecipeRepository $recipeRepository): Response
    {
        $criteria = [
            'cuisine' => $request->query->get('cuisine') ?: null,
            'difficulty' => $request->query->get('difficulty') ?: null,
            'is_vegetarian' => $request->query->get('is_vegetarian') ?: null,
        ];

        // Dodanie składników do kryteriów
        $criteria['ingredients'] = [
            $request->query->get('ingredient1'),
            $request->query->get('ingredient2'),
            $request->query->get('ingredient3'),
        ];

        $search = $request->query->get('search');

        $ingredients = $request->query->get('ingredients'); // Dodanie składników do filtrów
        // Znalezienie przepisów na podstawie filtrów i wyszukiwania
        $recipes = $recipeRepository->findByFiltersAndSearch($criteria, $search, $ingredients);

        return $this->render('recipe/filter.html.twig', [
            'recipes' => $recipes,
            'search' => $search,
        ]);
    }

    // Trasa dla szczegółów przepisu
    #[Route('/recipes/{id}', name: 'recipe_detail')]
    public function detail(int $id, RecipeRepository $recipeRepository): Response
    {
        // Pobierz przepis z bazy danych na podstawie ID
        $recipe = $recipeRepository->find($id);

        // Jeśli przepis nie istnieje, wyświetl błąd
        if (!$recipe) {
            throw $this->createNotFoundException('Recipe not found');
        }

        // Renderowanie widoku z detalami przepisu
        return $this->render('recipe/detail.html.twig', [
            'recipe' => $recipe,
        ]);
    } 
}