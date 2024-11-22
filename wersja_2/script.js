// Fetch recipes from recipes.json (simulate this by reading the JSON file)
let recipes = [];

fetch('./recipes.json')
    .then(response => response.json())
    .then(data => {
        recipes = data;
        // After fetching, we can display all recipes or perform a search
        displayRecipes(recipes);
    })
    .catch(error => console.error('Error loading recipes:', error));

// Function to display recipes
function displayRecipes(filteredRecipes) {
    const recipesList = document.getElementById('recipes-list');
    recipesList.innerHTML = ''; // Clear current display
    
    if (filteredRecipes.length === 0) {
        recipesList.innerHTML = '<p>No recipes found.</p>';
        return;
    }
    
    filteredRecipes.forEach(recipe => {
        const recipeCard = document.createElement('div');
        recipeCard.classList.add('col-md-4');
        recipeCard.classList.add('recipe-card');
        
        recipeCard.innerHTML = `
            <div class="card">
                <img src="${recipe.image}" class="card-img-top" alt="${recipe.name}">
                <div class="card-body">
                    <h5 class="card-title">${recipe.name}</h5>
                    <p class="card-text">${recipe.description}</p>
                    <button class="btn btn-primary" onclick="saveToFavorites(${recipe.id})">Save to Favorites</button>
                </div>
            </div>
        `;
        
        recipesList.appendChild(recipeCard);
    });
}

// Function to search recipes by keyword
document.getElementById('search-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const searchQuery = document.getElementById('search-input').value.toLowerCase();
    
    const filteredRecipes = recipes.filter(recipe =>
        recipe.name.toLowerCase().includes(searchQuery)
    );
    
    displayRecipes(filteredRecipes);
});

// Function to filter recipes based on selected filters
document.getElementById('search-button').addEventListener('click', function () {
    const cuisine = document.getElementById('cuisine').value;
    const diet = document.getElementById('diet').value;
    const difficulty = document.getElementById('difficulty').value;
    const people = document.getElementById('people').value;

    const filteredRecipes = recipes.filter(recipe => {
        return (cuisine === "all" || recipe.cuisine === cuisine) &&
               (diet === "all" || recipe.diet === diet) &&
               (difficulty === "all" || recipe.difficulty === difficulty) &&
               (people === "all" || recipe.people === people);
    });
    
    displayRecipes(filteredRecipes);
});

// Function to save a recipe to localStorage (favorites)
function saveToFavorites(recipeId) {
    let savedRecipes = JSON.parse(localStorage.getItem('savedRecipes')) || [];
    
    const recipeToSave = recipes.find(recipe => recipe.id === recipeId);
    
    // Check if the recipe is already saved
    if (!savedRecipes.some(r => r.id === recipeToSave.id)) {
        savedRecipes.push(recipeToSave);
        localStorage.setItem('savedRecipes', JSON.stringify(savedRecipes));
        alert('Recipe saved to favorites!');
    } else {
        alert('This recipe is already in your favorites.');
    }
}

// Function to display saved recipes on the profile page
function displaySavedRecipes() {
    const savedRecipes = JSON.parse(localStorage.getItem('savedRecipes')) || [];
    const savedRecipesContainer = document.getElementById('saved-recipes');
    savedRecipesContainer.innerHTML = ''; // Clear current display
    
    if (savedRecipes.length === 0) {
        savedRecipesContainer.innerHTML = '<p>No saved recipes yet.</p>';
        return;
    }
    
    savedRecipes.forEach(recipe => {
        const recipeCard = document.createElement('div');
        recipeCard.classList.add('col-md-4', 'recipe-card');
        
        recipeCard.innerHTML = `
            <div class="card">
                <img src="${recipe.image}" class="card-img-top" alt="${recipe.name}">
                <div class="card-body">
                    <h5 class="card-title">${recipe.name}</h5>
                    <p class="card-text">${recipe.description}</p>
                    <button class="btn btn-danger remove-btn" data-id="${recipe.id}">Remove</button>
                </div>
            </div>
        `;
        
        savedRecipesContainer.appendChild(recipeCard);
    });

    // Attach event listeners for Remove buttons
    document.querySelectorAll('.remove-btn').forEach(button => {
        button.addEventListener('click', function () {
            const recipeId = parseInt(this.getAttribute('data-id'));
            removeFromSavedRecipes(recipeId);
        });
    });
}

// Function to remove a recipe from saved
function removeFromSavedRecipes(recipeId) {
    let savedRecipes = JSON.parse(localStorage.getItem('savedRecipes')) || [];
    savedRecipes = savedRecipes.filter(recipe => recipe.id !== recipeId);
    localStorage.setItem('savedRecipes', JSON.stringify(savedRecipes));
    displaySavedRecipes(); // Refresh the saved recipes display
}

// Call displaySavedRecipes when the profile page is loaded
if (window.location.pathname.includes("./profile.html")) {
    displaySavedRecipes();
}
