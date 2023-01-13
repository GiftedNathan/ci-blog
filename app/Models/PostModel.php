<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{

  protected $table = 'posts';
  protected $prmaryKey = 'id';
  protected $useAutoIncrement = true;
  protected $returnType     = 'array';
  protected $allowedFields = ['slug', 'title', 'body', ];
  protected $createdField  = 'created_at';

  public function fetchAllPosts()
  {
    $db = \Config\Database::connect();
    $query = $db->table('posts')->get();
    $posts = $query->getResultArray();
    return $posts;
  }

  public function fetchRandomPost()
  {
    
    $db = \Config\Database::connect();
    $query = $db->table('posts')->getWhere(['id' => rand(1,5)]);
    $randomPost = $query->getResultArray();
    return $randomPost;

  }

  // public function insert($data = null)
  // {
  //   $db  = \Config\Database::connect();
  //   $builder = $db->table('posts');

  //   $query = $builder->save($data);

  //   return $query;

  // }

}