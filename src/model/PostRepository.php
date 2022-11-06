<?php
namespace App\Model;

use PDO;


class PostRepository 
{

      public function getAllPost()
      {
      
     $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
      $test = FALSE;
      
       $request = $dbh->query('SELECT *  FROM post');

      
       $request->setFetchMode(PDO::FETCH_CLASS, 'App\Model\Post');
       $posts = $request->fetchAll();
 
  

      }

      public function getOnePost($postId)
      {
        $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
 
        $request = $dbh->prepare("SELECT *  FROM post WHERE id = :id");
       $request->bindParam('id', $postId);
       $request->execute();
      
        $request->setFetchMode(PDO::FETCH_CLASS, 'App\Model\Post');
        $post = $request->fetch();
  
        return $post;

      
      
      }

      public function CreatePost($titre, $desc)
      {

          $tt = $titre;
          $ff = $desc;


        $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
        
        $request = $dbh->prepare("INSERT INTO `post` (`titre`, `description`) VALUES( '$tt', '$ff') ");

  

        $request->execute();

      }


      public function delete(int $postId) : void
      {
  
         
        $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
        
        $request = $dbh->prepare("DELETE FROM post WHERE id=:id");

        $request->execute([
          'id' => $postId,
        ]);
      }

      public function update( int $postId, string $titre, string $description) : void
      {
  
         
        $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
        
        $request = $dbh->prepare( 'UPDATE post 
        SET titre= :titre, description=:description, created_at=:updated_at
        WHERE id=:id');

        $request->execute([
          'titre' => $titre,
          'description' => $description,
          'id' => $postId,
          'updated_at' => date('Y-m-d H:i:s')
        ]);
      }
}