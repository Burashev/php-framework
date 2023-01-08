@layout('auth')

<form action="/login" method="post">
    <h2>Login</h2>
    <input type="text" placeholder="email" name="email">
    <input type="text" placeholder="password" name="password">
    <button>Submit</button>
</form>
