<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Speech Therapy Activity Finder | Find & Post Speech Therapy Activities</title>
    </head>
    <body>
        <nav>
            <a href="/welcome"
                >
                <!-- <img src="images/STAFlogoTopSq.png" alt=""
            /> -->
        </a>
            <ul>
                <li>
                    <a href="register"
                        >Register</a
                    >
                </li>
                <li>
                    <a href="/login" 
                        >
                        Login</a
                    >
                </li>
            </ul>
        </nav>

        <main>
            <div>
                <div>
                    <header>
                        <h2>
                            Register
                        </h2>
                        <p>Create an account to post activities</p>
                    </header>

                    <form action="">
                        <div>
                            <label for="name">
                                Name
                            </label>
                            <input
                                type="text"
                                name="name"
                            />
                        </div>

                        <div>
                            <label for="email"
                                >Email</label
                            >
                            <input
                                type="email"
                                name="email"
                            />
                            <!-- Error Example -->
                            <p>
                                Please enter a valid email
                            </p>
                        </div>

                        <div>
                            <label for="password">
                                Password
                            </label>
                            <input
                                type="password"
                                name="password"
                            />
                        </div>

                        <div>
                            <label
                                for="password2"
                                
                            >
                                Confirm Password
                            </label>
                            <input
                                type="password"
                                name="password2"
                            />
                        </div>

                        <div>
                            <button type="submit">
                                Sign Up
                            </button>
                        </div>

                        <div>
                            <p>
                                Already have an account?
                                <a href="/login"
                                    >Login</a
                                >
                            </p>
                            <a href="/welcome"> Back </a>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <footer>
            <p>Copyright &copy; 2023, All Rights reserved</p>

            <!-- <a
                href="/create">Post Activity</a
            > -->
        </footer>
    </body>
</html>