var currentIndex = 0;
var books = [
    {title: "<?php echo json_encode($Livre1); ?>", author: "Auteur 1", description: "Description 1", image: "<?php echo $Livre1[0]; ?>"},
    {title: "Livre 2", author: "Auteur 2", description: "Description 2", image: "https://m.media-amazon.com/images/I/81szraMID2L.jpg"},
    {title: "Livre 3", author: "Auteur 3", description: "Description 3", image: "https://www.babelio.com/couv/CVT_9976_752115.jpg"},
    // Ajoutez autant d'entrée que nécessaire
];

function displayBook() {
    var book = books[currentIndex];
    document.getElementById("book-image").src = book.image;
    document.getElementById("book-title").innerHTML = book.title;
    document.getElementById("book-author").innerHTML = book.author;
    document.getElementById("book-description").innerHTML = book.description;
}

document.getElementById("prev-button").addEventListener("click", function() {
    if (currentIndex > 0) {
        currentIndex--;
        displayBook();
    }
});

document.getElementById("next-button").addEventListener("click", function() {
    if (currentIndex < books.length - 1) {
        currentIndex++;
        displayBook();
    }
});

displayBook();