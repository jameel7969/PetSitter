// Your array of pet sitters
const petSitters = [
    {
        imageUrl:
            "https://images.unsplash.com/photo-1629747490241-624f07d70e1e?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        name: "John",
        hourlyRate: 20.0,
    },
    {
        imageUrl:
            "https://images.unsplash.com/photo-1525134479668-1bee5c7c6845?q=80&w=1587&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        name: "Tasha",
        hourlyRate: 25.0,
    },
    {
        imageUrl:
            "https://images.unsplash.com/photo-1572631382901-cf1a0a6087cb?q=80&w=1582&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        name: "Cummins",
        hourlyRate: 25.0,
    },
    {
        imageUrl:
            "https://images.unsplash.com/photo-1576695444267-40cdd214f06e?q=80&w=1444&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        name: "Reedy",
        hourlyRate: 25.0,
    },
    {
        imageUrl:
            "https://images.unsplash.com/photo-1605949405965-d49ada3f9189?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        name: "Jason",
        hourlyRate: 25.0,
    },
    {
        imageUrl:
            "https://images.unsplash.com/photo-1606122017369-d782bbb78f32?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        name: "Chloe",
        hourlyRate: 25.0,
    },
    {
        imageUrl:
            "https://images.unsplash.com/photo-1619300026534-8e8a76941138?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        name: "Tom",
        hourlyRate: 25.0,
    },
    {
        imageUrl:
            "https://images.unsplash.com/photo-1484517186945-df8151a1a871?q=80&w=1498&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        name: "Starc",
        hourlyRate: 25.0,
    },
    // Add more pet sitters as needed
];

// Get the section by its ID
var petSittersSection = document.getElementById("petSitters");

// Use map to create HTML for each pet sitter
var petSittersHTML = petSitters.map(function (petSitter) {
    return (
        '<div class="petSitter">' +
        '<img src="' +
        petSitter.imageUrl +
        '" alt="' +
        petSitter.name +
        '">' +
        "<h2>" +
        petSitter.name +
        "</h2>" +
        "<p>Hourly Rate: $" +
        petSitter.hourlyRate.toFixed(2) +
        ' <a href="petsitters/' + petSitter.name.replace(/\s+/g, '_') + '.php" class="arrow">&#8594;</a></p>' + 
        "</div>"
    );
});

petSittersSection.innerHTML = petSittersHTML.join("");
