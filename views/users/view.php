<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <h1 class="my-4">User Details</h1>
    <table class="table table-striped table-hover">
        <tbody>
            <tr>
                <th>ID</th>
                <td><?=$user->id?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?=$user->email?></td>
            </tr>
        </tbody>
    </table>
    <div class="mt-3">
        <a class="btn btn-secondary" href="/users">Back to List</a>
        <a class="btn btn-warning" href="/users/edit?id=<?=$user->id?>">Edit</a>
        <form method="POST" action="/users/delete" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this user?');">
            <input type="hidden" name="id" value="<?=$user->id?>">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>