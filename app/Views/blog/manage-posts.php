<main class="container my-5">
  
  <div class="row mb-2">

    <div class="col-md-12">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">

        <table>
          <thead>
            <tr>
              <th>Id</th>
              <th>Title</th>
              <th>Slug</th>
              <th>Body</th>
              <th>Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php if($posts): ?>
            <?php foreach($posts as $post): ?>
            <tr>
              <td><?php echo $post['id']; ?></td>
              <td><?php echo $post['title']; ?></td>
              <td><?php echo $post['slug']; ?></td>
              <td ><?php echo $post['body']; ?></td>
              <td><?php echo $post['created_at']; ?></td>
              <td>
                <a href="<?php echo base_url('edit-view/'.$post['id']);?>" class="btn btn-primary btn-sm">Edit</a>
                <a href="<?php echo base_url('delete/'.$post['id']);?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
     </table>


  </div>


</main>