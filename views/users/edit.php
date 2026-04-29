<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <h1 class="my-4">Edit User</h1>
    <form action="/users/update" method="POST">
        <input type="hidden" name="id" value="<?=$user->id?>">
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input value="<?=$user->email?>" name="email" type="email" class="form-control" id="email" placeholder="Email" required>
        </div>
        
        <div class="mb-3">
            <label for="password" class="form-label">New Password (leave blank to keep current)</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="New Password">
        </div>
        
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/users/view?id=<?=$user->id?>" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>