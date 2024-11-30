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
    public function list(Request $request, RecipeRepository $recipeRepository): Response
    {
        // Pobranie frazy wyszukiwania z zapytania GET
        $search = $request->query->get('search');

        // Jeśli fraza wyszukiwania jest obecna, przeszukaj przepisy
        if ($search) {
            $recipes = $recipeRepository->findBySearch($search);
        } else {
            // Jeśli brak frazy, pobierz wszystkie przepisy
            $recipes = $recipeRepository->findAll();
        }

        // Przekazujemy przepisy oraz frazę wyszukiwania do widoku
        return $this->render('recipe/index.html.twig', [
            'recipes' => $recipes,
            'search' => $search,  // Wartość frazy wyszukiwania
        ]);
    }

    #[Route('/filter', name: 'recipe_filter')]
    public function filter(Request $request, RecipeRepository $recipeRepository): Response
    {
        // Odczytanie parametrów z zapytania GET
        $criteria = [
            'cuisine' => $request->query->get('cuisine') ?: null,
            'difficulty' => $request->query->get('difficulty') ?: null,
            'is_vegetarian' => $request->query->get('is_vegetarian') ?: null,
        ];

        // Pobranie frazy wyszukiwania
        $search = $request->query->get('search');

        // Znalezienie przepisów na podstawie filtrów i wyszukiwania
        $recipes = $recipeRepository->findByFiltersAndSearch($criteria, $search);

        // Renderowanie szablonu z przepisami i frazą wyszukiwania
        return $this->render('recipe/filter.html.twig', [
            'recipes' => $recipes,
            'search' => $search,  // Wartość wyszukiwania
        ]);
    }

}