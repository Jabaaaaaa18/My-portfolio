<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="style.css" />
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
    </head>
    <body>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalsss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $phone = $conn->real_escape_string($phone);
    $subject = $conn->real_escape_string($subject);
    $message = $conn->real_escape_string($message);

    
    $sql = "INSERT INTO contacts (Name, Email, Phone, subject, message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

        <header class="header">
            <a href="#" class="logo"
                >My <span><strong>Portfolio</strong></span></a
            >

            <!-- <div class="home-sci about-header">
        <a href="https://www.facebook.com/john.aldrin.58910"
          ><img
            src="data:image/https://www.facebook.com/john.aldrin.58910png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAASFJREFUSEvt161KBVEUBeDvvoCCTQQFMVgUwWrwJ1isBkHEdzBabSbFbDT4BDYFsWoyWAyKaDGIyaQzcAYOA9eZC2eYy+hpZxjWYq219549PS2dXku8hop4EtOJnXjEU4xZVjyOF5I78Y0JvBbkZeJlXCZWW8Ct4KozxF84xD3egqo5HEfuJVec18QaHkoRLWXPr5skXu1TF40Sf2IkUjWPo9AVo1hoSvEtFiPw8yznzT5dkTTjG+SWFucC650jfsZOUPWBu1LGY+G+gb2UGedtM1tjuh1gvw3is6y3t1ISv+MkAOZfnNMIfBsz4b6LqZTEsct/o6r/FXd/cjWS8aDLXt12qlz2cjWDrLe/zerYmcr1tsYITvPKUP1JpJFUgfIDKWhhH+ggzngAAAAASUVORK5CYII="
        /></a>
        <a
          href="https://www.instagram.com/_johndidntfckngcare?igsh=MTdva3k3dWVxc2kyaA=="
          ><img
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAwZJREFUSEvllknojlEUxn9/YxmKIvOQDFFmNmQIO0RSlIzFws4QJWRIFGKjLMxKWRgybSgZisyJSCxkSiky7Qzn0Xn1dt37vu9n81dufb313XvPc89znjPUUU+rrp5w+eeBOwA9gYYlDH0DngJvypgs8rg9sBWYCLQuMxTsvwfOAitSj0gBC+yoATd3g1+Au4A8KlpNgCFAUz/0GZgBnAsvxYCbAc8AebzfvruB2xVAM9uNgFHAev++BnqZ91/z4DFgXVjrHs+skWIdn22gsnsIuAiM9UesKwN+CXRyj9/WCCxQAWrN9/DcA14BnYuARa8U+dg87psA1aOmACOAH8A14ITfmwMc9HsLPFSfgBZAW+BdZjOkWsJQPK96fELsRWZkG9Ay2PgILAH2AfOc6geWETddLz2A/oD++7VCYInisqfCpMD4MgcVyE7gDtAYGOCg8krg2suv+w4qhsROFHgCcN6pm5a7PdhfL6qGeszyxrv6Q8SEWHuY21SMBzqDYrIQ+JjRMj13eYOl0xpgKbAjEfuVwBZgtTGxKXdGzOjho4ErKeDxwIWIx6cBUa+fKlJsiSE9OHy0NCMWlFaXUsDaVO6dMZFNzlk/6UqWmk/VCCyBDTPtjHPbUaozYBkXSLZUUFRYlpuityeAVznF+m7Onbnluhjjwi0EDj3u4rmtsjcoIq5uXixULvsEjaGSuEZ6DiuOYTottiKwy7xW4VfKyBM1BSlWaaQav9Aq1J6AESm8n2ljuN+Jeiz1SYWpAiLDojpWQKT4vZEwqOGogOiByukosOrpC6uzz4HuiViqZE61fBc7apPXrYgcT/TdBt6V1CYVLvWBKLAmjA9eWztWmSQSj8v+lpqlaoWnVb61xtqi6FKBPwLMKjFctq3yqzKsvi6bv1cMuA3wxMcdTQ4bgRvWo7+Xofh+NgjonsKhMah3vjPpXGr0mWsxPpAD+tvRRybUKg+Hjy4a9lRbpVRVMImkliV2VAuUAaL7j1Vlrm5XMBSkHvMIKJxeqgDX4mnls/8f8E/8tqAfEQrEDwAAAABJRU5ErkJggg=="
        /></a>
        <a href="https://mail.google.com/mail/u/0/#inbox"
          ><img
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAbBJREFUSEvt1j9sTlEYx/FPg8RgKLEZTSxtF4nFZLNhIaQ2MTRNG2liwmKQaOPPICYJiQHd2sVo64BuXcTUsRWpjeA+cl45rnvf+77eW61wtnvPc37f8/w5zzlDtmgMbRHXf/Afi/y2CfUR3MZ+TGJxwBAcwzh2YQ6vO3q5x4fwCrsz2E1cwZc+N7ADNzCTrdvASLGRd/EvB09htgLwEmew2iP8AJ7iaIX9RBHNe2XwNVytEX+P81hogJ/AoyJde2vsrhf/g/OTx93AHZ07uIxPJeHI4S2ER93Gb4NDdBmnigi8TYSDeJ7y15SNgcAh/hGXEEUUOdvTREzzA4N75Pxi9neAo0rPlQqxm8df8TidgrJdpcdxlL6XemmMYhjz2NcQ43WcxIe8S2Vr+gZHJUdjCHi01aqxlKDRaGKzP9pjE7juHI/hTVq8M3W38nm9i2l8TnatgzubP42H6eMCnlWkp1WPc/3D6fJYqamLTQN3q7NNC3VTA+kLfBH3KxTz4moCdubrwMF4EEb5fRyvjic4XlJvAxxN5QXOFjfYWhncqzet2G2bx14r3vQi8u95/A2I1V0fhbK+uwAAAABJRU5ErkJggg=="
        /></a>
      </div> -->

            <div class="bx bx-menu" id="menu-icon"></div>
            <nav class="navbar">
                <a href="#home" class="active">Home</a>
                <a href="#about" class="active">About</a>
                <a href="#education" class="active">Education</a>
                <a href="#skill" class="active">Skills</a>
                <a href="#Project" class="active">Project</a>
                <a href="#contact" class="active">Contact</a>

                <span class="active-nav"></span>
            </nav>
        </header>
        <section class="home" id="home">
            <div class="home-content">
                <h1>
                    Hi, I'm
                    <span>John Aldrin<img src="checklist.png" alt="" /></span>
                </h1>
                <div class="text-animate">
                    <h3>IT Student</h3>
                </div>
                <p>
                    Hello I'm John Aldrin, a passionate and driven individual
                    with a background in Information technology. Throughout my
                    career, I have consistently demonstrated a strong work ethic
                    and a commitment to innovation. With excellent communication
                    skills and a knack for problem-solving, I thrive in
                    collaborative environments, working effectively with diverse
                    teams to achieve common objectives.
                </p>
                <div class="btn-box">
                    <a href="#" class="btn">Hire me</a>
                    <a href="#contact" class="btn">Contact me</a>
                </div>
            </div>
            <div class="home-sci">
                <a href="https://www.facebook.com/john.aldrin.58910"
                    ><img
                        src="data:image/https://www.facebook.com/john.aldrin.58910png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAASFJREFUSEvt161KBVEUBeDvvoCCTQQFMVgUwWrwJ1isBkHEdzBabSbFbDT4BDYFsWoyWAyKaDGIyaQzcAYOA9eZC2eYy+hpZxjWYq219549PS2dXku8hop4EtOJnXjEU4xZVjyOF5I78Y0JvBbkZeJlXCZWW8Ct4KozxF84xD3egqo5HEfuJVec18QaHkoRLWXPr5skXu1TF40Sf2IkUjWPo9AVo1hoSvEtFiPw8yznzT5dkTTjG+SWFucC650jfsZOUPWBu1LGY+G+gb2UGedtM1tjuh1gvw3is6y3t1ISv+MkAOZfnNMIfBsz4b6LqZTEsct/o6r/FXd/cjWS8aDLXt12qlz2cjWDrLe/zerYmcr1tsYITvPKUP1JpJFUgfIDKWhhH+ggzngAAAAASUVORK5CYII="
                /></a>
                <a
                    href="https://www.instagram.com/_johndidntfckngcare?igsh=MTdva3k3dWVxc2kyaA=="
                    ><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAwZJREFUSEvllknojlEUxn9/YxmKIvOQDFFmNmQIO0RSlIzFws4QJWRIFGKjLMxKWRgybSgZisyJSCxkSiky7Qzn0Xn1dt37vu9n81dufb313XvPc89znjPUUU+rrp5w+eeBOwA9gYYlDH0DngJvypgs8rg9sBWYCLQuMxTsvwfOAitSj0gBC+yoATd3g1+Au4A8KlpNgCFAUz/0GZgBnAsvxYCbAc8AebzfvruB2xVAM9uNgFHAev++BnqZ91/z4DFgXVjrHs+skWIdn22gsnsIuAiM9UesKwN+CXRyj9/WCCxQAWrN9/DcA14BnYuARa8U+dg87psA1aOmACOAH8A14ITfmwMc9HsLPFSfgBZAW+BdZjOkWsJQPK96fELsRWZkG9Ay2PgILAH2AfOc6geWETddLz2A/oD++7VCYInisqfCpMD4MgcVyE7gDtAYGOCg8krg2suv+w4qhsROFHgCcN6pm5a7PdhfL6qGeszyxrv6Q8SEWHuY21SMBzqDYrIQ+JjRMj13eYOl0xpgKbAjEfuVwBZgtTGxKXdGzOjho4ErKeDxwIWIx6cBUa+fKlJsiSE9OHy0NCMWlFaXUsDaVO6dMZFNzlk/6UqWmk/VCCyBDTPtjHPbUaozYBkXSLZUUFRYlpuityeAVznF+m7Onbnluhjjwi0EDj3u4rmtsjcoIq5uXixULvsEjaGSuEZ6DiuOYTottiKwy7xW4VfKyBM1BSlWaaQav9Aq1J6AESm8n2ljuN+Jeiz1SYWpAiLDojpWQKT4vZEwqOGogOiByukosOrpC6uzz4HuiViqZE61fBc7apPXrYgcT/TdBt6V1CYVLvWBKLAmjA9eWztWmSQSj8v+lpqlaoWnVb61xtqi6FKBPwLMKjFctq3yqzKsvi6bv1cMuA3wxMcdTQ4bgRvWo7+Xofh+NgjonsKhMah3vjPpXGr0mWsxPpAD+tvRRybUKg+Hjy4a9lRbpVRVMImkliV2VAuUAaL7j1Vlrm5XMBSkHvMIKJxeqgDX4mnls/8f8E/8tqAfEQrEDwAAAABJRU5ErkJggg=="
                /></a>
                <a href="https://mail.google.com/mail/u/0/#inbox"
                    ><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAbBJREFUSEvt1j9sTlEYx/FPg8RgKLEZTSxtF4nFZLNhIaQ2MTRNG2liwmKQaOPPICYJiQHd2sVo64BuXcTUsRWpjeA+cl45rnvf+77eW61wtnvPc37f8/w5zzlDtmgMbRHXf/Afi/y2CfUR3MZ+TGJxwBAcwzh2YQ6vO3q5x4fwCrsz2E1cwZc+N7ADNzCTrdvASLGRd/EvB09htgLwEmew2iP8AJ7iaIX9RBHNe2XwNVytEX+P81hogJ/AoyJde2vsrhf/g/OTx93AHZ07uIxPJeHI4S2ER93Gb4NDdBmnigi8TYSDeJ7y15SNgcAh/hGXEEUUOdvTREzzA4N75Pxi9neAo0rPlQqxm8df8TidgrJdpcdxlL6XemmMYhjz2NcQ43WcxIe8S2Vr+gZHJUdjCHi01aqxlKDRaGKzP9pjE7juHI/hTVq8M3W38nm9i2l8TnatgzubP42H6eMCnlWkp1WPc/3D6fJYqamLTQN3q7NNC3VTA+kLfBH3KxTz4moCdubrwMF4EEb5fRyvjic4XlJvAxxN5QXOFjfYWhncqzet2G2bx14r3vQi8u95/A2I1V0fhbK+uwAAAABJRU5ErkJggg=="
                /></a>
            </div>
            <div class="home-imgHover"></div>
        </section>

        <section class="about" id="about">
            <h2 class="heading">About <span>Me</span></h2>
            <div class="about-img">
                <img src="images/me.jpg" alt="" />
                <span class="circle-spin"></span>
            </div>
            <div class="about-content">
                <h3>Full stack Developer</h3>
                <p>
                    Hey there, I'm John Aldrin, a passionate and driven
                    individual with a deep love for technology and creativity.
                    From a young age, I've been fascinated by the ever-evolving
                    world of technology and its power to transform lives. I
                    thrive on challenges and constantly seek opportunities to
                    expand my knowledge and skills. Whether it's coding, design,
                    or problem-solving, I'm always eager to dive in and learn
                    something new. I believe that continuous learning is key to
                    staying relevant in today's fast-paced world. In addition to
                    my technical skills, I bring a creative touch to everything
                    I do. I enjoy exploring different perspectives and finding
                    innovative solutions to complex problems. Whether it's
                    writing code or crafting a compelling design, I strive to
                    infuse each project with my unique blend of creativity and
                    precision. When I'm not immersed in the digital world, you
                    can find me exploring the great outdoors or indulging in my
                    love for photography. Nature has always been a source of
                    inspiration for me, and I find solace in capturing its
                    beauty through my lens. Above all, I'm driven by a desire to
                    make a positive impact on the world around me. Whether it's
                    through my work, my passions, or my interactions with
                    others, I strive to leave a lasting impression and
                    contribute to a brighter future. I'm excited to continue my
                    journey of growth and exploration, and I look forward to
                    connecting with like-minded individuals who share my passion
                    for technology and creativity. Let's build something amazing
                    together!
                </p>
                <div class="btn-box btns">
                    <a href="#education" class="btn">Read more</a>
                </div>
            </div>
        </section>
        <section class="education" id="education">
            <h2 class="heading">My <span>Journey</span></h2>
            <div class="education-row">
                <div class="education-column">
                    <h3 class="title">Education</h3>

                    <div class="education-box">

                        <div class="education-content">
                            <div class="content">
                                <div class="year">
                                    <h4>
                                        <i class="bx bxs-calendar">
                                            2nd Year College</i
                                        >
                                    </h4>
                                </div>
                                <h1>Bachelor of Science in Information technology  - Laguna State Polytechnic University</h1>
                                <p>
                                   Hello, I'm 2nd year college student and still studying at LSPU Siniloan campus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="education-column">
                    <h3 class="title">Experience</h3>

                    <div class="education-box">

                        
                        <div class="education-content">
                            <div class="content">
                                <div class="year">
                                    <h4>
                                        <i class="bx bxs-calendar">
                                            current time and date</i
                                        >
                                    </h4>
                                </div>
                                <h1>I don't have any experience</h1>
                                <p>
                                    I'm still studying and still exploring in Information technology
                                    field. And I want to learn more about coding.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="skill" id="skill">
            <h1>My <span>skill</span></h1>
            <div class="skills-row">
                <div class="skills-column">
                    <h3 class="title">Coding skills</h3>

                    <div class="skill-box">
                        <div class="skill-content">
                            <div class="progress">
                                <h3>HTML-CSS-JScript <span>30%</span></h3>
                                <div class="bar"><span></span></div>
                            </div>

                            <div class="progress">
                                <h3>C# <span>40%</span></h3>
                                <div class="bar"><span></span></div>
                            </div>

                            <div class="progress">
                                <h3>Java <span>35%</span></h3>
                                <div class="bar"><span></span></div>
                            </div>

                            <div class="progress">
                                <h3>Python <span>40%</span></h3>
                                <div class="bar"><span></span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skills-column">
                    <h3 class="title">Professional skills</h3>
                    <div class="skill-box">
                        <div class="skill-content">
                            <div class="progress">
                                <h3>Web Developing <span>50%</span></h3>
                                <div class="bar"><span></span></div>
                            </div>
                            <div class="progress">
                                <h3>Web-Design <span>40%</span></h3>
                                <div class="bar"><span></span></div>
                            </div>
                            <div class="progress">
                                <h3>App-Developing <span>60%</span></h3>
                                <div class="bar"><span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="Project" id="Project">
            <h2 class="heading">My <span>Project</span></h2>

        
        </section>

        <section class="contact" id="contact">
            <h2 class="heading">Contact <span>me!</span></h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="input-box">
                    <div class="input-field">
                        <input
                            type="text"
                            placeholder="Full name"
                            id="fNAME"
                            name="Name"
                            required
                        />
                        <span class="focus"> </span>
                    </div>
                    <div class="input-field">
                        <input
                            type="text"
                            placeholder="Email Address"
                            id="Email"
                            name="Email"
                            required
                        />
                        <span class="focus"> </span>
                    </div>
                </div>
                <div class="input-box">
                    <div class="input-field">
                        <input
                            type="number"
                            placeholder="Phone no."
                            id="cp"
                            name="Phone"
                            required
                        />
                        <span class="focus"> </span>
                    </div>
                    <div class="input-field">
                        <input
                            type="text"
                            placeholder="Email Subject"
                            id="Subject"
                            name="subject"
                            required
                        />
                        <span class="focus"> </span>
                    </div>
                </div>

                <div class="textarea-field">
                    <textarea
                        name="message"
                        id=""
                        cols="30"
                        rows="10"
                        placeholder="Your Message"
                        id="Message"
                        
                        required
                    ></textarea>
                    <span class="focus"></span>
                </div>
                <div class="btn-box btns">
                    <button type="submit" class="btn">Submit</button>
                </div>
            </form>
        </section>
    

        <footer class="footer">
            <div class="footer-text">
                <p>
                    Copyright &copy; 2024 by John Aldrin | All Rights Reserved.
                </p>
            </div>
            <div class="btn-box btns">
                <a href="#"
                    ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="48"
                        height="48"
                        viewBox="0 0 24 24"
                        style="fill: rgba(0, 0, 0, 1); transform: msFilter"
                    >
                        <path
                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.293 12.707L12 10.414l-4.293 4.293-1.414-1.414L12 7.586l5.707 5.707-1.414 1.414z"
                        ></path></svg
                ></a>
            </div>
        </footer>

        <script src="js/script.js"></script>
    </body>
</html>
