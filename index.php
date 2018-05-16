<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Simple Html php Contact form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <style>
        body {
            width: 100%;
        }

        div#wrapper {
            width: 100%;
            margin: 0 auto;
            text-align: center;
        }

        div#contact-area {
            max-width: 500px;
            margin: 0 auto;
        }

        .form-element_group {
            padding: 10px;
            width: 100%;
            margin: 0 auto;
        }

        form#anr_simple_form .form-element_group label {
            display: block;
            /* float: left; */
            width: 100%;
            text-align: left;
            max-width: 400px;
        }

        form#anr_simple_form .form-element_group input, form#anr_simple_form textarea {
            width: 100%;
            max-width: 400px;
            float: left;
            padding: 12px;
            margin-top: 10px;
            margin-bottom: 5px;
            border-radius: 5px;
            display: block;
        }


        form#anr_simple_form .submit-button {
            display: block;
            float: left;
        }
        .form-element_group .submit-button {
            background: #2ea037;
            border-color: #1dbd0d;
            font-size: 20px;
        }
    </style>
</head>

<body>

<div id="wrapper">
    <div id="contact-area">
        <h1>Contact Us</h1>
<!--        error message-->
        <?php
        session_start();
        if(isset($_SESSION['errorText']) && !empty($_SESSION['errorText'])) {
            echo $_SESSION['errorText'];
        }
        if(isset($_SESSION['successText']) && !empty($_SESSION['successText'])) {
            echo $_SESSION['successText'];
        }
        if(isset($_SESSION['unknownErrorText']) && !empty($_SESSION['unknownErrorText'])) {
            echo $_SESSION['unknownErrorText'];
        }
        ?>

        <form id="anr_simple_form" method="post" action="send.php">
            <div class="form-element_group">
                <label for="Name">Name <span style="color: red">*</span>:</label>
                <input type="text" name="Name" id="Name"/ required>
            </div>
            <div class="form-element_group">
                <label for="Email">Email <span style="color: red">*</span>:</label>
                <input type="text" name="Email" id="Email"/ required>
            </div>
            <div class="form-element_group">
                <label for="Phone">Phone:</label>
                <input type="text" name="Phone" id="Phone"/ >
            </div>
            <div class="form-element_group">
                <label for="Subject">Subject <span style="color: red">*</span>:</label>
                <input type="text" name="Subject" id="Subject"/ required>
            </div>
            <div class="form-element_group">
                <label for="Message">Message <span style="color: red">*</span>:</label><br/>
                <textarea name="Message" rows="10" cols="20" id="Message" required></textarea>
            </div>
            <div class="form-element_group btn">
                <input type="submit" name="submit" value="Submit" class="submit-button"/>
            </div>
        </form>



    </div>

</div>
</body>

</html>