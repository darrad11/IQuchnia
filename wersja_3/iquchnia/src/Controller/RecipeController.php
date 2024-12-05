<?php

namespace App\Controller;

use App\Entity\Recipe;
use App\Form\RecipeType;
use App\Repository\RecipeRepository;
use Doctrine\ORM\EntityManagerInterface;
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

    // Trasa dla dodawania nowego przepisu
    #[Route('/recipe/new', name: 'recipe_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $recipe = new Recipe();
        $form = $this->createForm(RecipeType::class, $recipe);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Obsługa przesyłania zdjęcia
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                // Wygenerowanie unikalnej nazwy pliku
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();

                try {
                    // Przenieś zdjęcie do folderu ./images/
                    $imageFile->move(
                        $this->getParameter('images_directory'), // Pobranie ścieżki z konfiguracji
                        $newFilename
                    );

                    // Ustawienie ścieżki do obrazu w encji
                    $recipe->setImage('images/' . $newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Wystąpił błąd podczas przesyłania zdjęcia.');
                    return $this->render('recipe/new.html.twig', [
                        'form' => $form->createView(),
                    ]);
                }
            }
            $ingredients = $form->get('ingredients')->getData();
            if ($ingredients) {
                $recipe->setIngredients($ingredients);
            }

            // Dodaj użytkownika (opcjonalnie, jeśli system logowania jest używany)
            if ($this->getUser()) {
                $recipe->setUser($this->getUser());
            }

            // Zapisz przepis w bazie danych
            $entityManager->persist($recipe);
            $entityManager->flush();

            $this->addFlash('success', 'Przepis został dodany!');

            return $this->redirectToRoute('recipe_list');
        }

        return $this->render('recipe/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}