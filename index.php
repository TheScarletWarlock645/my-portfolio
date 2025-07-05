<!DOCTYPE html>
<html>
    <head>
        <?php include('head.html'); ?>
        <title>Angelo S | Portfolio</title>
    </head>
    <body>
        <header>
            <?php include('nav.php'); ?>
            <h1>Angelo</h1>
            <br>
            <h1>Semertsidis</h1>
        </header>
        <div class="about">
            <img src="recources/headshot.jpg" style="transform:scale(0.05);">
            <h2>About Me</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse neque
                officia vero maiores reprehenderit sit quod et, reiciendis dolor libero
                provident delectus distinctio nemo recusandae rerum quisquam fuga 
                deleniti ex!</p>
        </div>
        <div class="resume">
            <h2>My Resume</h2>
            <img src="recources/resume.png" class="resume"> <!--INCOMPLETE: CREATE AND ADD RESUME.PNG and RESUME.PDF-->
            <p>Download my resume:><a href="resume.pdf" style="text-decoration:none;" download><i>here</i></a></p> <!--INCOMPLETE: CREATE AND ADD RESUME.PDF-->
        </div>
        <div class="contact">
            <h2>Send Me A Message!</h2>
            <form action="contact.php" method="POST">
                <input type="text"name="name" placeholder="Name" required>
                <input type="email"name="email" placeholder="Email" required>
                <input type="text" name="subject" placeholder="Subject" required>
                <textarea id="message" name="message" rows="4" cols="50" placeholder="Message" required></textarea>
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>