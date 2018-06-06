<style>

    body{
             font-weight:bold;
             color:#384047;
         }

         button{
             padding:7px;
             font-size:20px
         }
         table{
             max-width:960px;
             margin:10px auto;

         }
         caption{
             font-size:1.6em;
             font-weight:400;
             padding:10px 0;
         }
         thead th{
             font-weight:400;
             background:#8a97a0;
         }
         tr{
             background:#f4f7f8;
             border-bottom:1px solid #fff;
             margin-bottom:5px;
         }
         tr:nth-child(even){
             background:#e8eeef;

         }
         th, td{
             text-align:left;
             padding:20px;
             font-weight:bold;
         }
         tfoot, td{
             background:none;
         }
         table{
             float:left
         }
         .content {
          text-align: center;
           }

       </style>
       

</head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            
                

                    @yield('content')
                


            
        </div>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script type="text/script" src="js/ajax.js"></script>
    </body>
</html>
