<style type="text/css">
	.side-nav{
		float: right;
	}

</style>
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial;
}

.atas {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 10px 10px;
}

.atas a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.atas a.logo {
  font-size: 25px;
  font-weight: bold;
}

.atas:hover {
  background-color: #ddd;
  color: black;
}

.atas.active {
  background-color: dodgerblue;
  color: white;
}

.atas-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .atas {
    float: none;
    display: block;
    text-align: left;
  }
  .atas-right {
    float: none;
  }
}
</style>

<!-- <div class="atas">
  <a href="#default" class="logo">SALES PAPERLINE</a>
  <div class="atas-right">
    <a class="active" href=""><i class="glyphicon glyphicon-user"></i> {{Auth::user()->name}} </a>

  </div>
</div> -->

<header class="header fixed-top clearfix">
<!--logo start-->
<div class="atas">
    <a href="index.html" class="logo">
        VISITORS
    </a>
    <div class=" atas-right">
      <a href="" class="active"><i class="glyphicon glyphicon-user"></i> {{Auth::user()->name}} </a>
    </div>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
</header>

<!-- <div style="padding-left:20px">
  <h1>Responsive Header</h1>
  <p>Resize the browser window to see the effect.</p>
  <p>Some content..</p>
</div>
<nav class="pink accent-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">SSSSS</a>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="">{{Auth::user()->name}}</a>
        	<ul class="" role="menu">
        		 <li>
        			<a href="{{url('/logout')}}"></a>
        			<i class="glyphicon glyphicon-triangle-bottom">LogOut</i>
        		</li>
        	</ul>
        </li>
      </ul>
    </div>
  </nav>  -->