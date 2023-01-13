
<main class="form-signin w-100 m-auto">
  <h1 class="text-center my-5">Edit blog post</h1>

   
  <form method="post" class="w-50 m-auto mb-5" <?php echo base_url('/blog/insert'); ?> > 

    <h1 class="h3 mb-3 fw-normal">Please file the details below</h1>
    <h3 class="mb-3 fw-normal bg-info"><?php echo $title ?></h3>

    <div class="form-floating my-3">
      <input type="text" class="form-control" name="title" id="title" placeholder="Some title">
      <label for="title">Post title</label>
    </div>
    <div class="form-floating my-3">
      <input type="text" class="form-control" name="slug" id="slug" placeholder="some-slug">
      <label for="slug">Post slug</label>
    </div>
    <div class="form-floating my-3">
      <textarea name="body" id="body" cols="30" rows="10"class="form-control" id="" placeholder="Body"></textarea>
      <label for="body">Post body</label>
    </div>

    
    <button class="w-100 btn btn-lg btn-success" type="submit">Create Post!</button>
    
  </form>
</main>