<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600;700&display=swap');

      body {
        font-family: 'Source Sans Pro', sans-serif;
        background: rgb(238,70,140);
        background: linear-gradient(90deg, rgba(238,70,140,1) 0%, rgba(240,68,125,1) 50%, rgba(241,66,116,1) 100%);
        font-size: 18px;
      }

      .container {
        height: 65px;
        margin-top: 25px;
        border-radius: 10px;
        background-color: white;
        -webkit-box-shadow: 4px 4px 22px -3px rgba(0,0,0,0.56); 
        box-shadow: 4px 4px 22px -3px rgba(0,0,0,0.56);
      }

      .side-panel {
        margin-top: 25px;
        margin-left: -12px;
        border-radius: 10px;
        background-color: white;
        -webkit-box-shadow: 4px 4px 22px -3px rgba(0,0,0,0.56); 
        box-shadow: 4px 4px 22px -3px rgba(0,0,0,0.56);
      }

      .main-panel {
        margin-top: 25px;
        margin-right: -12px;
        border-radius: 10px;
        background-color: white;
        -webkit-box-shadow: 4px 4px 22px -3px rgba(0,0,0,0.56); 
        box-shadow: 4px 4px 22px -3px rgba(0,0,0,0.56);
      }

      .padder {
        list-style-type: none;
      }

      li {
        color: #f0447d;
        padding-top: 20px;
        padding-bottom: 20px;
      }

      ul {
        padding-top: 15px;
        padding-bottom: 15px;
      }

      .footer-panel {
        height: 55px;
        margin-top: 25px;
        margin-left: -15px;
        margin-right: -12px;
        border-radius: 10px;
        background-color: white;
        -webkit-box-shadow: 4px 4px 22px -3px rgba(0,0,0,0.56); 
        box-shadow: 4px 4px 22px -3px rgba(0,0,0,0.56);
        margin-bottom: 25px;
      }

      .footer-panel-content {
        padding-top: 12px;
        margin-left: 33px;
      }

      .main-panel-content {
        padding: 25px 45px 25px 45px;
        width: 100%;
        word-wrap: break-word;
      }

      .button-logout {
        width: 125px;
        height: 35px;
        border-radius: 12px;
        background: rgb(238,70,140);
        background: linear-gradient(90deg, rgba(238,70,140,1) 0%, rgba(240,68,125,1) 50%, rgba(241,66,116,1) 100%);
        font-size: 16px;
        color: white;
        border: 0;
      } 

      a {
        text-decoration: none; 
      }
    </style>
  </head>
  <body>

    <div class="container">

        <div class="row">
            <div class="col-sm text-left">
              <p style='float: left; margin-top: 12px; margin-left: 25px; font-size: 28px; color: #f0447d;'>
                  ProtonCMS
                </p>
            </div>
            <div class="col-sm ">
                <p style='float: right; margin-top: 12px; margin-right: 25px;'>
                  user : admin
                  <button type="button" class="button-logout" style='margin-left: 25px; margin-bottom: 7px;'>Logout</button>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
              <div class='side-panel'>
                <p style='float: left; margin-top: 15px; margin-left: 25px; font-size: 28px; color: #f0447d;'>
                   <ul class='padder'>
                     <a href='#'><li>Admin Dashboard</li></a>
                     <a href='#'><li>Posts</li></a>
                     <a href='#'><li>Pages</li></a>
                     <a href='#'><li>Plugins</li></a>
                     <a href='#'><li>Themes</li></a>
                     <a href='#'><li>Categories</li></a>
                     <a href='#'><li>Tags</li></a>
                     <a href='#'><li>Media Library</li></a>
                     <a href='#'><li>Menus</li></a>
                     <a href='#'><li>Widgets</li></a>
                     <a href='#'><li>Database</li></a>
                     <a href='#'><li>Users</li></a>
                     <a href='#'><li>Comments</li></a>
                     <a href='#'><li>Tools</li></a>
                     <a href='#'><li>Settings</li></a>
                   </ul>
                </p>
              </div>
            </div>
            <div class="col-sm-9">
              <div class='main-panel'>
                <p style='float: right; margin-top: 7px; margin-right: 25px;'>
                  <div class='main-panel-content'>
                    <h1> Tab name </h1>
                    asdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnaj
                    nsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnaj
                    asdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnaj
                    nsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnaj
                    asdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnaj
                    nsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnaj
                    asdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnaj
                    nsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                    dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                    dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                    dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                    asdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnaj
                    nsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnaj
                    asdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnaj
                    nsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnaj
                    asdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnaj
                    nsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnaj
                    asdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnaj
                    nsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                    dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                    dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                    dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                    asdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnaj
                    nsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnaj
                    asdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnaj
                    nsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnaj
                    asdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnaj
                    nsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnaj
                    asdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajasdasdasdasdnjdanjsndjansjdnjasdnaj
                    nsdjnajasdasdasdasdnjdanjsndjansjdnjasdnajnsdjnajddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                    dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                    dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                    dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                  </div>
                </p>
              </div>
            </div>
        </div>
        <div class='footer-panel'>
          <div class="row">
            <div class="col-sm">   
                  <p style='float: left;  margin-top: 15px; margin-left: 25px; font-size: 14px; color: #f0447d;'>
                  &copy; {{ now()->year }} Faculty of Physics - Adam Mickiewicz University in Poznań
                  </p>          
                  
            </div>
            <div class="col-sm">
                  <p style='float: right; margin-top: 15px; margin-right: 25px; font-size: 14px;'>
                  Made with <span style="color: #e25555;">&#9829;</span> by Bartosz Rogowski</p>
                </p>
              </div>
            </div>
          </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
