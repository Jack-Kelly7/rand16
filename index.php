<?php 
    // include database and object files
    include_once 'config/database.php';
    include_once 'objects/process.php';
    $page_title = "Local Password Generator"; // PAGE TITLE
    $string = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', mt_rand(1, 8))), 1, 16);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page_title?></title>
    <link rel="icon" href="img/16-dark.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        @font-face { font-family: BebasNeue; src: url('font/BebasNeue-Regular.ttf'); }
        body { font-family: BebasNeue; font-size: 145%; }
        h2 { font-size: 250%; }
        h4 { font-size: 160%; }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h2 class="text-left mt-3">Local Random 16 Character (Password) Generator</h2>
            <h4 class="text-left">Built by Jack Kelly</h4>
        </div>
    </header>
    <section class="py-5">
        <div class="container">
            <!-- HTML form -->
            <form name="main" id="main">
                <div class="row">

                    <!-- Email Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">EMAIL: </label>
                                <select name="email" class="form-control">
                                    <option value="xj">xj</option> <!-- My Emails -->
                                    <option value="xj7">xj7</option> <!-- My Emails -->
                                    <option value="jk7x">jk7x</option> <!-- My Emails -->
                                </select>
                            <small class="form-text text-muted">Email you'll use for site, this will be saved to the database!</small>
                        </div>  
                    </div>

                    <!-- String Output & Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="site">Your String</label>
                            <!-- String is echo'd below -->
                            <input type="text" class="form-control" name="string" id="string" aria-describedby="stringHelp" value="<?php echo $string ?>" readonly>
                            <small id="stringHelp" class="form-text text-muted">Your 16 character string will be saved to the database!</small>
                        </div>  
                    </div>
                
                    <!-- Site Input -->
                    <div class="col-md-6    ">
                        <div class="form-group">
                            <label for="site">Site</label>
                                <input type="text" class="form-control" name="site" id="site" aria-describedby="siteHelp" placeholder="Site">
                                <small id="siteHelp" class="form-text text-muted">Site you'll use this password on, this will be saved to the database</small>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 float-left">Submit</button>
                    </div>
                </div>
            </form>
            <div class="alert alert-success" id="successMsg" style="display: none;">String saved successfully!</div>
            <div class="alert alert-danger" id="errorMsg" style="display: none;">Failed to save string!</div>
        </div>
    </section>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- custom script --> 
    <script src="js/process.js"></script>
</body>
</html>
