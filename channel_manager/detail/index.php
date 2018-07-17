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
                <div class="row" style="direction: rtl;text-align: right;">
                    <h1 class="jumbotron">
                        معرفی شاخه؟؟؟؟؟
                    </h1>
                    <div class="col-sm-7 col-lg-8">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>

                    </div>
                    <div class="col-sm-5 col-lg-4">

                        <table class="table table-hover table-bordered results ">
                            <thead>
<!--                            <tr>-->
<!--                                <th class="col-md-3"></th>-->
<!--                                <th class="col-md-3"></th>-->
<!--                            </tr>-->
        <!--                    <tr class="warning no-result">-->
        <!--                        <td colspan="4"><i class="fa fa-warning"></i> No result</td>-->
        <!--                    </tr>-->
                            </thead>
                            <tbody class="direct ">
                            <tr>
                                <!--                    <th scope="row">4</th>-->
                                <th>سازنده</th>
                                <td>?????</td>
                            </tr>
                            <tr>
                                <th>تعداد اعضا</th>
                                <td>?????</td>
                            </tr>
                            <tr>
                                <th>تاریخ ایجاد</th>
                                <td>?????</td>
                            </tr>
                            <tr>
                                <th>وضعیت</th>
                                <td>?????</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
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

