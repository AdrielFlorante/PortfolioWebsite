<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        section{
        width: 100vw;
        height: 100vw;
        padding: 50px
        }

        .cl_white
        {
            color: white;
        }

        img
        {
            width: 300px;
            transition: opacity 1s ease-in-out;
        }

        img:hover
        {
            opacity: .10;
        }

        .col-text
        {
            -webkit-column-count: 3;
        }

    </style>
    
</head>

<body data-spy="scroll" data-target=".navbar">
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
        <ul class="nav navbar-nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#work">What I Do</a></li>
            <li><a href="#about">What about Me</a></li>
            <li><a href="#contact">Contact Me</a></li>
        </ul>
    </nav>

    <section id="home" style="background: url(img/header.png); background-size: 100% 100%;" class="cl_white text-center">
        <h1> My Portfolio </h1>
        <p class="lead"> Welcome to my world, The life of a Programmer </p>
        <button class="btn btn-default"><a href="#contact"> Contact Me </a></button>
    </section>

    <section id="work" class="container">
        <div class="page-header">
            <h1 class="text-center">My Work</h1>
        </div>

        <div class="text-center">
            <img src="img/work/java.png" class="img-thumbnail"/>
            <img src="img/work/javascript.png" class="img-thumbnail"/>
            <img src="img/work/nodejs.png" class="img-thumbnail"/>
            <img src="img/work/py.png" class="img-thumbnail"/>
            <img src="img/work/php.png" class="img-thumbnail"/>
            <img src="img/work/lua.png" class="img-thumbnail"/>
        </div>
    </section>

    <section id="about" class="container">
        <h2 class="text-center">My Skills </h2>
        <div class="col-text">
			I am a student from NEU studying Computer Science, I am experienced in working with node.js frameworks
			like react or next.js for backend development. I also have 3 years of experience with Java object oriented programming
			and are familiar with concepts like design patterns.
		</div><br/>
    
             <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4> PHP Programmer </h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/work/php.png" class="img-circle center-block">
                            <p class="lead text-center">I Do PHP Scripting</p>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4> Backend Developer </h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/work/nodejs.png" class="img-circle center-block">
                            <p class="lead text-center">I Do Node JS Backend Development</p>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
             </div>
    </section>

    <section id="contact" style="background: silver;">
        <div class="page-header">
            <h2 class="text-center"> Contact Me</h2>
        </div>
        <form class="col-md-5 col-md-offset-4">
            <div class="form-group">
                <input class="form-control" placeholder="Enter Your Name" type="text"/>
            </div>

            <div class="form-group">
                <input class="form-control" placeholder="Enter Your E-mail" type="email"/>
            </div>

            <div class="form-group">
                <input class="form-control" placeholder="Subject" type="text"/>
            </div>

            <div class="form-group">
                <textarea class="form-control rows-"10"> Comments</textarea>
            </div>

            <div class="form-group">
                <input class="btn btn-success btn-block"  type="submit"/>
            </div>

        </form>
    </section>
    

</body>
</html>