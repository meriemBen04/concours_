<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoyer un Email</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-lg" style="width: 400px;">
        <h4 class="text-center mb-3">Envoyer un Email</h4>
        <form action="{{ route('send-email') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Adresse Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Envoyer</button>
        </form>
        @if(session('message'))
            <div class="alert alert-info mt-3">
                {{ session('message') }}
            </div>
        @endif
    </div>
</body>
</html>
