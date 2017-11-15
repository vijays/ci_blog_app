<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/ci_blog_app/application/views/include/admin_header.php';
include_once($path);

?>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-lg-offset-6">
      <!-- a href="<?php echo base_url('Admin/add_article')?>" class="btn btn-primary">Add Article</a -->
      <?= anchor('Admin/add_article', 'Add Article', ['class'=>'btn btn-lg btn-primary pull-right']); ?>
  </div>
  <table class="table">
    <thead>
      <th Sr. No. />
      <th Title />
      <th Action />
    </thead>
    <tbody>
      <?php
        if ( count($articleslist) ) {
          foreach ($articleslist as $article) { ?>
            <tr>
              <td><?= $article->id ?></td>
              <td><?= $article->title ?></td>
              <td>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            <?php
           }
        }
        else {
          echo "No articles found!";
        }
      ?>
    </tbody>
  </table>
</div>
