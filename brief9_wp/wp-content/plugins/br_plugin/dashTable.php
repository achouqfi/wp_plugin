<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        .custab{
            border: 1px solid #ccc;
            padding: 5px;
            margin: 5% 0;
            box-shadow: 3px 3px 2px #ccc;
            transition: 0.5s;
            }
        .custab:hover{
            box-shadow: 3px 3px 0px transparent;
            transition: 0.5s;
            }
        .container{
            width: 90%;
        }
        .col-md-offset-2 {
            margin-left: -4.333333%;
        }
        h1{
            text-align: center;
        }
    </style>
    <title>Contact Page</title>
</head>
<body>
    <div class="container">
        <div class="row col-md-20 col-md-offset-2 custyle">
        <h1>Messages</h1>

        <table class="table table-striped custab">
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>phone</th>
                <th>email</th>
                <th>messges</th>
                <th class="text-center">Action</th>
            </tr>
        </thead><?php

            // $connection = mysqli_connect('localhost','user','user');
            // mysqli_select_db($connection,"wp_brief9");
        global $wpdb;
        $table_name=$wpdb->prefix."contactUs";


            if(isset($_POST['Deleterow'])){
                $id=$_POST['id'];
                $queryD="DELETE FROM `$table_name` WHERE id=$id";
                $wpdb->query($queryD);
                // mysqli_query($connection, $queryD);
            }

            $query = "SELECT * FROM $table_name";
            $result = $wpdb->get_results($query);
            
            foreach($result as $row ){
                echo '<tr>
                        <td>' . $row->id .
                        '</td><td>' . $row->names .
                        '</td><td>' . $row->phone.
                        '</td><td>' . $row->email.
                        '</td><td>' . $row->messages .
                    '<td>
                    <form action="" method="post">
                        <input type="text" value="'.$row->id.'" name="id" hidden>
                        <button type="submit" class="btn btn-danger" name="Deleterow">Delete</button>
                    </form> 
                    </td>
                    <td>

                        
                        <form action="" method="post">
                            <button type="submit" class="btn btn-success"  data-toggle="modal" onclick="popup" >Reponse</button>
                        </form> 
                            </td>
                    </tr>';
        }

        ?>
        </table>
        </div>
    </div>
        <!-- <div>
            <div class="">
            </div>
            <div>
            </div>
        </div> -->


    <script>

    </script>
</body>
</html>
