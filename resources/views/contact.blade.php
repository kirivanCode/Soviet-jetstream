@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<style>
    .contact-form {
        max-width: 500px;
        margin: auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .contact-form input,
    .contact-form textarea,
    .contact-form button {
        width: 100%;
        padding: 12px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
        border-color: #007bff;
        outline: none;
    }

    .contact-form button {
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 18px;
    }

    .contact-form button:hover {
        background-color: #0056b3;
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }
</style>

<form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
    @csrf
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <input type="text" name="name" placeholder="Tu nombre" required>
    <input type="email" name="email" placeholder="Tu correo" required>
    <textarea name="message" placeholder="Tu mensaje" required></textarea>
    <button type="submit">Enviar</button>
</form>
