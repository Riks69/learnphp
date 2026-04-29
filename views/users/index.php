<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <h1 class="my-4">Users</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user->id ?></td>
                    <td><?= $user->email ?></td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-info btn-sm" href="/users/view?id=<?=$user->id?>">View</a>
                            <a class="btn btn-warning btn-sm" href="/users/edit?id=<?=$user->id?>">Edit</a>
                            <form method="POST" action="/users/delete" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                <input type="hidden" name="id" value="<?=$user->id?>">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>