<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="navbar">
    <nav class="navbar navbar-default navbar-sticky-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#myPage"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/5/5391d86e5f4c5e92de04ef4461a09259.svg" class="traveloka">
                    <img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/9/97f3e7a54e9c6987283b78e016664776.svg" class="traveloka">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/8/82695fa100b9f65aaf9fd90eb217a8af.svg">&nbsp;Download App 
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">hai</a></li>
                        </ul>
                    </li>
                    <li><a href="#patner with us"><img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/a/a5b77c2fab5e454e3271588503cd94d9.svg">&nbsp;Partner With Us</a></li>
                    <li><a href="#saved"><img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/6/687f7095ed36a75c21cc52726d55b2c5.svg">&nbsp;Saved</a></li>
                    <li><a href="#my booking"><img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/8/8c9954122d8006592fbcbd4a82ac994c.svg">&nbsp;My Booking</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/2/225a4c290e89ee22a80b21c45e12dd1e.svg">&nbsp;IDR
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">Country & Language</a></li>
                        <li><a href="#">Currency</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/6/6c5690b014faad362b0d07ebe1e24fdf.svg">&nbsp;Pay
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">hai</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="navbar1">
    <nav class="navbar navbar-default navbar-sticky-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Transports
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="#">Merchandise</a></li>
                    <li><a href="#">Extras</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Accommodations
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="#">Merchandise</a></li>
                    <li><a href="#">Extras</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Things to Do
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="#">Merchandise</a></li>
                    <li><a href="#">Extras</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Travel Add-ons
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="#">Merchandise</a></li>
                    <li><a href="#">Extras</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-1"></div>
        <div class="col-sm-3">
            <div class="panel panel-default text-left">
            <div class="panel-body">
            <h4><img src="https://ik.imagekit.io/tvlk/image/imageResource/2020/11/26/1606358981383-acbc6f04b67787a034b22e5b36510fca.png?tr=q-75,w-88">&nbsp<?php echo $_SERVER['username']; ?></h4>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="#section1"><img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/8/825f4dbdd091e72c803ff3a24ca58c26.svg">&nbsp;&nbsp;My Points</a></li>
                <li><a href="#section2"><img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/f/f883d30731f5559aadffe0c6060fdded.svg">&nbsp;&nbsp;My Cards</a></li>
                <hr>
                <li class="active"><a href="#section3"><img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/8/8c9954122d8006592fbcbd4a82ac994c.svg">&nbsp;&nbsp;My Booking</a></li>
                <li><a href="#section4"><img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/f/fc823715dd8dd7b269a5526f8651d058.svg">&nbsp;&nbsp;Purchase List</a></li>
                <li><a href="#section5"><img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/09/25/1506337292999-06629f21799df855a2f41b3d82bb32b8.svg?tr=q-75">&nbsp;&nbsp;Flight Price Alerts</a></li>
                <li><a href="#section6"><img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/09/25/1506337305794-3dd7650e41feb67c75ade207c01461ed.svg?tr=q-75">&nbsp;&nbsp;Passenger Quick Pick</a></li>
                <li><a href="#section7"><img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/4/4d108ad9e4bee4cd7115f9fc3de4f657.svg">&nbsp;&nbsp;Promo Info</a></li>
                <hr>
                <li><a href="#section8"><img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/f/f1e5ba7cea40df07a49fbd2cadb81dd0.svg">&nbsp;&nbsp;My Account</a></li>
                <li><a href="#section9"><img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/3/336593031502efcd0f97e6b35e7703a1.svg">&nbsp;&nbsp;Logging Out</a></li>
            </ul><br>
            </div>
            </div>
        </div>
        <div class="col-sm-6 text-left">
            <div class="panel panel-primary">
                <div class="panel-heading"><br><br>
                    <table>
                        <tr>
                            <th rowspan="8">
                                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2018/04/17/1523941664489-1f98d3a1485460f5a9ba7ced54fa97ac.png?tr=q-75,w-160">
                            </th>
                        </tr>
                        <tr>
                            <th>&nbsp&nbsp&nbsp</th>
                            <th><h4><b>Traveloka Easy Reschedule</b><br></h4></th>
                        </tr>
                        <tr>
                            <td>&nbsp&nbsp&nbsp</td>
                            <td><p>Changes are unavoidable. <br> Make this one easy.</p></td>
                        </tr>
                        <tr>
                            <th>&nbsp&nbsp&nbsp</th>
                            <th><span class="bolder" style="font-weight: bold;">Learn More</span></th>
                        </tr>
                    </table>
                    <br><br>
                </div>
            </div>
            <h2><b>Active E-tickets & Vouchers</b></h2>
            <div class="panel panel-default text-left"><br>
            <div class="panel-body">
                <table>
                    <tr>
                        <th rowspan="8">
                            <img src="https://ik.imagekit.io/tvlk/image/imageResource/2020/07/10/1594367281441-5ec1b573d106b7aec243b19efa02ac56.svg?tr=h-96,q-75,w-96">
                        </th>
                    </tr>
                    <tr>
                        <th>&nbsp&nbsp</th>
                        <th><h4>No Active Bookings Found</h4></th>
                    </tr>
                    <tr>
                        <td>&nbsp&nbsp</td>
                        <td><p>Anything you booked shows up here, but it seems like you haven’t made <br> any. Let’s create one via homepage!</p></td>
                    </tr>
                </table>
                <br>
            </div>
            </div>
            <h2><b>Purchase List</b></h2>
            <div class="panel panel-default text-left">
            <div class="panel-body">
                <p>View your &nbsp;<span style="color: blue;">Purchase History</span></p>
            </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>


<footer class="text-center">
    <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br><br>

<div class="container">
  <footer class="row">
    <div class="col-lg-2">
      <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      </a>
      <p class="text-body-secondary"><img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/9/97f3e7a54e9c6987283b78e016664776.svg"></p>
    </div>

    <div class="col-lg-2">

    </div>

    <div class="col-lg-2">
      <h5>About Traveloka</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">How To Book</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Contact Us</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Help Center</a></li>
      </ul>
    </div>

    <div class="col-lg-2">
      <h5>Product</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Flights</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Hotels</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Trains</a></li>
      </ul>
    </div>

    <div class="col-lg-2">
      <h5>Others</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Traveloka For Corporates</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Traveloka Affiliate</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Blog</a></li>
      </ul>
    </div>
  </footer>
</div>


</body>
</html>
