<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <h1>Edit user</h1>
    <form action="/admin/users/edit?id=<?= $user->id ?>" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="name"
                value="<?= htmlspecialchars($user->name) ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email"
                value="<?= htmlspecialchars($user->email) ?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">New password</label>
            <input name="password" type="password" class="form-control" id="password">
            <div class="form-text">Leave blank to keep the current password.</div>
        </div>
        <button class="btn btn-primary">Save</button>
        <a href="/admin/users" class="btn btn-secondary">Cancel</a>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>