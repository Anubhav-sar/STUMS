<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <script>
        const toggleForm = () => {
  const container = document.querySelector('.container');
  container.classList.toggle('active');
};
    </script>
  <section>
    <div class="container">
      <div class="user signinBx">
        <div class="imgBx"><img src="assets/schlimg.avif" alt="" /></div>
        <div class="formBx">
          <form action="" onsubmit="return false;">
            <h2>Sign In</h2>
            <input type="text" name="" placeholder="Username" />
            <input type="password" name="" placeholder="Password" />
            <input type="submit" name="" value="Login" />
            <p class="signup">
              Don't have an account ?
              <a href="#" onclick="toggleForm();">Sign Up.</a>
            </p>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form action="" onsubmit="return false;">
            <h2>Create an account</h2>
            <input type="text" name="" placeholder="Username" />
            <input type="email" name="" placeholder="Email Address" />
            <input type="password" name="" placeholder="Create Password" />
            <input type="submit" name="" value="Sign Up" />
            <p class="signup">
              Already have an account ?
              <a href="#" onclick="toggleForm();">Sign in.</a>
            </p>
          </form>
        </div>
        <div class="imgBx"><img src="assets/schlimg.avif" alt="" /></div>
      </div>
    </div>
  </section>
</body>
</html>