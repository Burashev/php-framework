@layout('auth')

<form action="/register" method="post">
    <h2>Registration</h2>
    <input type="text" placeholder="name" name="name">
    <input type="text" placeholder="surname" name="surname">
    <input type="text" placeholder="email" name="email">
    <input type="text" placeholder="password" name="password">
    <input type="text" placeholder="password confirmation" name="passwordConfirm">
    <button>Submit</button>
</form>
