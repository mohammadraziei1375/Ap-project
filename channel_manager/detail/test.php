<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="author" content="Mohammad Raziei" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <!--<script src="jquery-3.3.1.js"></script>-->
    <script src="../assets/jquery.min.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <!--<script src="assets/bootstrapt/js/bootstrap.js"></script>-->
    <script src="../assets/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"/>
    <link rel="stylesheet" href="../assets/bootstrap.min.css"/>
    <!--<link rel="stylesheet" href="assets/bootstrapt/css/bootstrap.min.css"/>-->
    <script src="../clipboard.js/dist/clipboard.js"></script>

    <link rel='stylesheet' href="../assets/style.css" type='text/css' />
    <script type='text/javascript' src='../assets/index.js'></script>


    <style>
        /* Note: Try to remove the following lines to see the effect of CSS positioning */
        .affix {
            top: 0;
            width: 100%;
            z-index: 9999 !important;
        }

        .affix + .container-fluid {
            padding-top: 70px;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="container-fluid grad1" style="color:#fff;height:200px;direction: rtl;font-size: 150%;text-align: center;">
    <h1>Branch Manager</h1>
    <h3>ربات مدیرت کانال</h3>
    <div class="hidden-xs">
        <p>با استفاده از این ربات میتوانید به سادگی کانال خود را مدیریت کنید.</p>
    </div>
    <p>برای توضیحات بیشتر وارد بات شوید.</p>
</div>
<nav  class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
    <div >
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#section1">Section 1</a></li>
                    <li><a href="#section2">Section 2</a></li>
                    <li><a href="#section3">Section 3</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#section41">Section 4-1</a></li>
                            <li><a href="#section42">Section 4-2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <!--    <div class="row">-->
    <div class="col-md-4 hidden-sm">
        <div class="container " style="display: inline-flex;">

            <div class="row" style="margin-top:20px">
                <div class="">
                    <form role="form">
                        <fieldset>
                            <h2>Please Sign In</h2>
                            <hr class="colorgraph">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                            </div>
                            <span class="button-checkbox">
					<button type="button" class="btn" data-color="info">Remember Me</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
					<a href="" class="btn btn-link pull-right">Forgot Password?</a>
				</span>
                            <hr class="colorgraph">
                            <div class="row">
                                <div class="">
                                    <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
                                </div>
                                <div class="">
                                    <a href="" class="btn btn-lg btn-primary btn-block">Register</a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-8">
        <div class="form-group pull-right">
            <input type="text" class="search form-control" placeholder="What you looking for?">
        </div>
        <span class="counter pull-right"></span>
        <table class="table table-hover table-bordered results">
            <thead>
            <tr>
                <th>#</th>
                <th class="col-md-5 col-xs-5">Name</th>
                <th class="col-md-4 col-xs-4">Creator</th>
                <th class="col-md-3 col-xs-3">ID</th>
            </tr>
            <tr class="warning no-result">
                <td colspan="4"><i class="fa fa-warning"></i> No result</td>
            </tr>
            </thead>
            <tbody class="direct">
            <?php
            // Include the class:
            include("sql/db.class.php");

            // Open the base (construct the object):
            $db = new DB("telegr28_bot", "127.0.0.1", "telegr28_admin", "Pwu-Buu-2yY-b2Q");
            //   http://slaout.linux62.org/php/db.overview.html

            ?>
            <tr>
                <th scope="row">1</th>
                <td class="hover-parent" id="td_1_0001">Vatanay Özbeyli <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_1_0001" ><i class="fa fa-clipboard"></i></span> </td>
                <td class="hover-parent" id="td_2_0001">UI & UX <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_2_0001" ><i class="fa fa-clipboard"></i></span> </td>
                <td class="hover-parent" id="td_3_0001">Istanbul <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_3_0001" ><i class="fa fa-clipboard"></i></span> </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td class="hover-parent" id="td_1_0001">Vatanay Özbeyli <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_1_0001" ><i class="fa fa-clipboard"></i></span> </td>
                <td class="hover-parent" id="td_2_0001">UI & UX <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_2_0001" ><i class="fa fa-clipboard"></i></span> </td>
                <td class="hover-parent" id="td_3_0001">Istanbul <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_3_0001" ><i class="fa fa-clipboard"></i></span> </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td class="hover-parent" id="td_1_0001">Vatanay Özbeyli <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_1_0001" ><i class="fa fa-clipboard"></i></span> </td>
                <td class="hover-parent" id="td_2_0001">UI & UX <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_2_0001" ><i class="fa fa-clipboard"></i></span> </td>
                <td class="hover-parent" id="td_3_0001">Istanbul <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_3_0001" ><i class="fa fa-clipboard"></i></span> </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td class="hover-parent" id="td_1_0001">Vatanay Özbeyli <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_1_0001" ><i class="fa fa-clipboard"></i></span> </td>
                <td class="hover-parent" id="td_2_0001">UI & UX <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_2_0001" ><i class="fa fa-clipboard"></i></span> </td>
                <td class="hover-parent" id="td_3_0001">Istanbul <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_3_0001" ><i class="fa fa-clipboard"></i></span> </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td class="hover-parent" id="td_1_0001">Vatanay Özbeyli <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_1_0001" ><i class="fa fa-clipboard"></i></span> </td>
                <td class="hover-parent" id="td_2_0001">UI & UX <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_2_0001" ><i class="fa fa-clipboard"></i></span> </td>
                <td class="hover-parent" id="td_3_0001">Istanbul <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_3_0001" ><i class="fa fa-clipboard"></i></span> </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td class="hover-parent" id="td_1_0001">Vatanay Özbeyli <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_1_0001" ><i class="fa fa-clipboard"></i></span> </td>
                <td class="hover-parent" id="td_2_0001">UI & UX <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_2_0001" ><i class="fa fa-clipboard"></i></span> </td>
                <td class="hover-parent" id="td_3_0001">Istanbul <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_3_0001" ><i class="fa fa-clipboard"></i></span> </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td class="hover-parent" id="td_1_0001">Vatanay Özbeyli <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_1_0001" ><i class="fa fa-clipboard"></i></span> </td>
                <td class="hover-parent" id="td_2_0001">UI & UX <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_2_0001" ><i class="fa fa-clipboard"></i></span> </td>
                <td class="hover-parent" id="td_3_0001">Istanbul <span class="hover badge badge-secondary" data-clipboard-action="copy"  data-clipboard-target="#td_3_0001" ><i class="fa fa-clipboard"></i></span> </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Burak Özkan</td>
                <td>Software Developer</td>
                <td>Istanbul</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Egemen Özbeyli</td>
                <td>Purchasing</td>
                <td>Kocaeli</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Engin Kızıl</td>
                <td>Sales</td>
                <td>Bozuyük</td>
            </tr>
            </tbody>
        </table>

    </div>
    <!--    </div>-->

</div>


<!-- Target -->
<!--    <input id="foo" value="https://github.com/zenorocha/clipboard.js.git">-->

<!--<div class="content">-->
<!--<h1>Copy to clipboard example</h1>-->
<!--<input type="text" id="visible-input" value="JS Tips Rocks!"/>-->
<!--<input type="button" id="visible-button" value="Copy">-->
<!--</div>-->
</body>
</html>

