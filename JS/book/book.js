class Book {
    // ce qui caracterise ma class book
    constructor(title, author, pages, description, currentPage, read) {
        this.title = title;
        this.author = author;
        this.pages = pages;
        this.description = description;
        this.currentPage = currentPage;
        this.read = read;
    }
}

let readBook;
 do {
    readBook=prompt("Saisissez le numero de page ou vous etes arrété");
    if(readBook%1!==0 && !(isNaN(readBook))) {
        alert("ce n'est pas un numero de page correct!!!!");
    }
 } while (isNaN(readBook) || readBook%1!==0);