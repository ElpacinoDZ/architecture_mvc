 <?php
 class comment
 {
    public string $author;
    public string $frenchCreationDate;
    public string $comment;
 }

 $comment = new comment();
 $comment->frenchCreationDate = '10/03/2022 à 15h09';
 $comment->comment = 'commentaire';
 $comment->author ='Nouveul auteur';

var_dump($comment);


