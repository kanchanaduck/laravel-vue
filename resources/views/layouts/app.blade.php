<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="shortcut icon" href="img/logo.png" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="css/app.css" rel="stylesheet">
        <style>
        body {
            padding-top: 5rem;
        }
        .float{
          position:fixed;
          width:60px;
          height:60px;
          bottom:40px;
          right:40px;
          background-color:#0C9;
          color:#FFF;
          border-radius:50px;
          text-align:center;
          box-shadow: 2px 2px 3px #999;
          font-size: 22px;
          padding-top: 20px;
        }
        </style>
    </head>
    <body>
      <div id="app">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #4fc08d;">
            <a class="navbar-brand" href="#">Money Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                {{-- <li class="nav-item active">
                  <a class="nav-link" href=".">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./show">Admin <span class="sr-only">(current)</span></a>
                </li> --}}
                <li class="nav-item">
                  <router-link to="/" class="nav-link">Product</router-link>
                </li>
                <li class="nav-item">
                  <router-link to="/Admin" class="nav-link">Admin</router-link>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> --}}
              </ul>
              
    		<ul class="navbar-nav ml-auto">
                   {{--  <li class="nav-item active">
                        <a class="nav-link" href="javascript:;">
                            <i class="fas fa-user-circle"></i> Login
                        </a>
                    </li> --}}
                    {{-- <li class="nav-item active">
                        <a class="nav-link" href="http://intranet2-hitt/intranet_program/HR/RiskAssessmentSystem/Authentication/Logout"><i
                                class="fas fa-sign-out-alt"></i> ออกจากระบบ</a>
                    </li> --}}
                </ul>
            </div>
        </nav>
        <div class="float"><font-awesome-icon fas icon="cart-plus" /></div>
        <main role="main" class="container-fluid">
            <router-view></router-view>
        </main>
        </div>
        <script src="js/app.js"></script>
    </body>
</html>