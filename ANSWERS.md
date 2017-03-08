## Question 2
A problem that could occur here is the N + 1 problem. This would occur if you use lazy loading. To alleviate this you would use eager loading. Eager loading is occurring because I am using the belongsTo() and hasMany() functions in the Book, Author, and Publisher models. The N + 1 problem would occur if you do one call to find get all the books, and then another call on each book to find the author for each. This problem can be alleviated by joining the the Book, Author, and Publisher models into one call, and then accessing the author name through the Book model.

To alleviate the N + 1 problem for this question, you would do the following:

$books = Book::with('author', 'publisher')->get();

foreach($books as $book) {
    //author first name would be $book->author->first_name
    //publisher name would be $book->publisher->name
}

In this situation you are only making two calls. One when you first retrieve all the books. And a second when you get the author or publisher name from the book.
