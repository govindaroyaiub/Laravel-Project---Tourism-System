<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Places</title>
    </head>
    <style>
    @charset "utf-8";
* {
    margin: 0;
    padding: 0;
}

         ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: skyblue;
        }

        li {
            float: right;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 15px;
            text-decoration: none;
            font-family: "Arial";
            font-size: 20px;
        }

        li a:hover {
            background-color: #4A71AB;
        }
body {
    background: #f9f9f9;
    font-family: "Lato", sans-serif;
}

#header {
    width: 100%;
    height: 50px;
    background: #00a2d1;
    color: #f9f9f9;
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    font-size: 35px;
    text-align: center;
}

#header a {
    color: #fff;
    text-decoration: blink;
}

#body {
    margin-top: 50px;
}

table {
    width: 80%;
    font-family: Tahoma, Geneva, sans-serif;
    font-weight: bolder;
    color: #999;
    margin-bottom: 80px;
}

table a {
    text-decoration: none;
    color: #00a2d1;
}

table,
td,
th {
    border-collapse: collapse;
    border: solid #d0d0d0 1px;
    padding: 20px;
}

table td input {
    width: 97%;
    height: 35px;
    border: dashed #00a2d1 1px;
    padding-left: 15px;
    font-family: Verdana, Geneva, sans-serif;
    box-shadow: 0px 0px 0px rgba(1, 0, 0, 0.2);
    outline: none;
}

table td input:focus {
    box-shadow: inset 1px 1px 1px rgba(1, 0, 0, 0.2);
    outline: none;
}

table td button {
    border: solid #f9f9f9 0px;
    box-shadow: 1px 1px 1px rgba(1, 0, 0, 0.2);
    outline: none;
    background: #00a2d1;
    padding: 9px 15px 9px 15px;
    color: #f9f9f9;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;
    border-radius: 3px;
    width: 49.5%;
}

table td button:active {
    position: relative;
    top: 1px;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;

}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;

}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
    .sidenav {
        padding-top: 15px;
    }
    .sidenav a {
        font-size: 18px;
    }
}

</style>

    <body>
       <div section id="home_section">
        <ul>
            
            <li><a href="/login">Login</a></li>
            

            <!-- <li><a href="/hotel">Hotel</a></li> -->

          
            </li>
            <li><a href="/gallery1">Gallery</a></li>
            <li><a href="/home1">Home</a></li>
            


        </ul>
    </div>
    


    <h2 style="text-align: center; margin-top: 20px;">Top Visited Places</h2>
        <center>
            <form method="get">
                <div id="body">
                    <div id="content">
                        <table align="center">
                            <tr>
                            <th>Ranking</th>
                            <th>Name</th>
                            <th>Number of Visitors</th>
                            </tr>
        <?php $i=1 ?>
       @foreach($placeList as $place)
                                <tr>
                                    <td align="center">
                                        <?php echo $i; ?>
                                    </td>
                                    <td align="center">
                                        <a href="/places1/{{$place->p_id}}">{{$place->p_name}}</a>
                                        
                                    </td>
                                    <td align="center">
                                       {{$place->number_of_visitors}}
                                    </td>
                                    


                                </tr>
        <?php $i++; ?>
        @endforeach
                        </table>
                    <br>
                    
                    </div>
                </div>
        </center>
    </body>
    </form>

    </html>
