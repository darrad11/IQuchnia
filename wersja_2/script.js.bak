document.addEventListener('DOMContentLoaded', function() {
    const filtersForm = document.getElementById('filters-form');
    const recipesList = document.getElementById('recipes-list');
    const savedRecipesContainer = document.getElementById('saved-recipes');

    // Ładowanie przepisów z pliku JSON
    const recipesData = fetch('recipes.json')
        .then(response => response.json())
        .catch(error => console.error('Błąd podczas ładowania przepisów:', error));

    filtersForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const filters = {
            cuisine: document.getElementById('cuisine').value,
            diet: document.getElementById('diet').value,
            difficulty: document.getElementById('difficulty').value,
            people: document.getElementById('people').value
        };

        searchRecipes(filters);
    });

    // Wyszukiwanie przepisów na podstawie filtrów
    function searchRecipes(filters) {
        recipesData.then(data => {
            const filteredRecipes = data.filter(recipe => {
                return (!filters.cuisine || recipe.cuisine === filters.cuisine) &&
                    (!filters.diet || recipe.diet === filters.diet) &&
                    (!filters.difficulty || recipe.difficulty === filters.difficulty) &&
                    (!filters.people || recipe.people === filters.people);
            });
            displayRecipes(filteredRecipes);
        });
    }

    // Wyświetlanie przepisów
    function displayRecipes(recipes) {
        recipesList.innerHTML = '';
        recipes.forEach(recipe => {
            const recipeCard = document.createElement('div');
            recipeCard.className = 'recipe-card';
            recipeCard.innerHTML = `
                <h3>${recipe.name}</h3>
                <p>${recipe.description}</p>
                <button onclick="saveRecipe('${recipe.id}')">Zapisz</button>
            `;
            recipesList.appendChild(recipeCard);
        });
    }

    // Funkcja zapisująca przepis
    window.saveRecipe = function(recipeId) {
        const recipeToSave = recipesData.then(data => data.find(recipe => recipe.id === recipeId));
        // Zapisz przepis w lokalnym storage (tutaj za pomocą localStorage)
        recipeToSave.then(recipe => {
            let savedRecipes = JSON.parse(localStorage.getItem('savedRecipes')) || [];
            savedRecipes.push(recipe);
            localStorage.setItem('savedRecipes', JSON.stringify(savedRecipes));
            alert('Przepis zapisany!');
        });
    }

    // Ładowanie zapisanych przepisów w profilu
    function loadSavedRecipes() {
        let savedRecipes = JSON.parse(localStorage.getItem('savedRecipes')) || [];
        savedRecipes.forEach(recipe => {
            const recipeElement = document.createElement('div');
            recipeElement.className = 'recipe-card';
            recipeElement.innerHTML = `<h3>${recipe.name}</h3><p>${recipe.description}</p>`;
            savedRecipesContainer.appendChild(recipeElement);
        });
    }

    loadSavedRecipes();
});
