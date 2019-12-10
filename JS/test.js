// const binarySearch = (array, thingToFind, start, end) => {

//     if (start > end) {
//         return false;
//     }

//     let mid = Math.floor((start + end) / 2);

//     if (array[mid] === thingToFind) {
//         return true;
//     }

//     if (thingToFind < array[mid]) {
//         return binarySearch(array, thingToFind, start, mid - 1);
//     } else {
//         return binarySearch(array, thingToFind, mid + 1, end);
//     }
// }

class Book {
    constructor(title, author, pages, description, currentPage, read) {
        this.title = title;
        this.author = author;
        this.pages = pages;
        this.description = description;
        this.currentPage = currentPage;
        this.read = read;
    }



readBook(pages) {
    if (pages > this.currentPage) {
        console.log('numero de page incohérent !');
    }
    else {
        console.log('Vous vous etes arreté à la pages : ' + pages );
        this.currentPage = pages;
        
    }
}
}
const readBook = new book('livre1', 'auteurlivre1', 250 , "vdsvsdvdv", 35,);

readBook.showBalance();
newAccount.deposit(250);
newAccount.withdraw(450);
newAccount.deposit(90);
newAccount.withdraw(600);
