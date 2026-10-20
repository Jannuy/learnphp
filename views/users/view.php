<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <h1>User</h1>
    <dl class="row">
        <dt class="col-sm-3">ID</dt>
        <dd class="col-sm-9"><?= htmlspecialchars($user->id) ?></dd>

        <dt class="col-sm-3">Name</dt>
        <dd class="col-sm-9"><?= htmlspecialchars($user->name) ?></dd>

        <dt class="col-sm-3">Email</dt>
        <dd class="col-sm-9"><?= htmlspecialchars($user->email) ?></dd>

        <dt class="col-sm-3">Password hash</dt>
        <dd class="col-sm-9"><code><?= htmlspecialchars($user->password) ?></code></dd>

        <dt class="col-sm-3">Created</dt>
        <dd class="col-sm-9"><?= htmlspecialchars($user->created_at) ?></dd>

        <dt class="col-sm-3">Updated</dt>
        <dd class="col-sm-9"><?= htmlspecialchars($user->updated_at) ?></dd>
    </dl>
    <a href="/admin/users" class="btn btn-secondary">Back</a>
    <a href="/admin/users/edit?id=<?= $user->id ?>" class="btn btn-warning">Edit</a>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>