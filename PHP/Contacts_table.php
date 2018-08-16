<html>
    <head>
        <title>Contacts</title>
        <style>
             table{
                 border-collapse: collapse;
                 width: 100%;
            }
            th{
                text-align: left;
                background-color: #3cad64;
                color: white;
            }
            th, td{
                padding: 10px;
                border-bottom: 1px solid #ddd;
            }
            tr:nth-child(even){
                background-color: #e0e0e0;
            }
            tr:nth-child(odd){
                background-color: #f4f4f4;
            }
            tr:hover{
                background-color: #c6c4c4;
            }
            a{
                text-decoration: none;
            }
            div{
                background: #dbdbdb;
                padding: 10px;
                margin: 10px;
                width: 600px;
            }
            div{
                text-align: left;
            }
            input{
                width: 600px;
                height: 25px;
                margin-bottom: 15px;
            }
            #textSearch{
                width: 100%;
                padding: 15px;
                font-size: 15px;
            }
            .btn{
                font-size: 14pt;
                font-family: tahoma;
                font-weight: bold;
                background: #3cad64;
                color: white;
                width: 100px;
                /*height: 40px;*/
                cursor: hand;
                border: 1px solid black;
                border-radius: 5px;
            }
            .btn:hover{
                background-color: #318950
            }
        </style>
        <script src="jquery-3.3.1.min.js"></script>
    </head>
    <body>

        <?php
        
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db   = "contacts_tabl";

            $conn = mysqli_connect($host, $user, $pass, $db);

            $r = mysqli_query($conn, "SELECT * FROM `emp`");

            $num = "";
            $name = "";
            $address = "";
            $url = "";
            $email = "";

            if( isset($_POST['no']) ){
                $num = $_POST['no'];
            }

            if( isset($_POST['name']) ){
                $name = $_POST['name'];
            }

            if( isset($_POST['address']) ){
                $address = $_POST['address'];
            }

            if( isset($_POST['url']) ){
                $url = $_POST['url'];
            }

            if( isset($_POST['email']) ){
                $email = $_POST['email'];
            }

            $sqls = "";

            if( isset($_POST['btnadd']) ){
                $sqls = "insert into emp values($num,'$name','$address','$url','$email')";
                mysqli_query($conn, $sqls);
                header("location: Contacts_table.php");
            }

            if( isset($_POST['btnedit']) ){
                $sqls = "update emp set empname='$name', address='$address', url='$url', email='$email' where empno=$num";
                mysqli_query($conn, $sqls);
                header("location: Contacts_table.php");
            }

            if( isset($_POST['btndel']) ){
                $sqls = "DELETE FROM `emp` WHERE `emp`.`empno` = $num";
                mysqli_query($conn, $sqls);
                header("location: Contacts_table.php");
            }
        ?>

        <form method="post">
            
            <center><div>
                <center><h1>Contacts table</h1></center>
                <label>#:</label><br>
                <input type="number" id="no" name="no">
                <br>
                <label>Name:</label><br>
                <input type="text" id="name" name="name">
                <br>
                <label>Number:</label><br>
                <input type="number" id="address" name="address">
                <br>
                <label>Account Link:</label><br>
                <input type="url" id="url" name="url">
                <br>
                <label>Email:</label><br>
                <input type="email" id="email" name="email">
                
                <center>
                    <button name="btnadd" class="btn">Add</button>
                    <button name="btnedit" class="btn">Edit</button>
                    <button name="btndel" class="btn">Delete</button>
                </center>
                <br>
            </div></center>
            
            <br><br>
            <input type="text" id="textSearch">
            <table id="emp">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Account Link</th>
                    <th>Email</th>
                </tr>
                <?php
                    while ( $row = mysqli_fetch_array($r) ){
                        echo "<tr>";
                        echo "<td>" . $row[0] . "</td>";
                        echo "<td>" . $row[1] . "</td>";
                        echo "<td>" . $row[2] . "</td>";
                        echo "<td>" . $row[3] . "</td>";
                        echo "<td>" . $row[4] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </form>
        
        <script>
        
        $(document).ready(function(){
            $("#textSearch").on("keyup", function(){
                var value = $(this).val().toLocaleLowerCase();
                $("#emp tr").filter(function(){
                    $(this).toggle($(this).text().toLocaleLowerCase().indexOf(value) > -1)
                });
                $("#emp tr:first").show();
            });
        });
        
        var tbl = document.getElementById("emp");
        
        for(var x = 1 ; x < tbl.rows.length ; x++){
            
            tbl.rows[x].onclick = function(){
                
                document.getElementById("no").value = this.cells[0].innerHTML;
                document.getElementById("name").value = this.cells[1].innerHTML;
                document.getElementById("address").value = this.cells[2].innerHTML;
                document.getElementById("url").value = this.cells[3].innerHTML;
                document.getElementById("email").value = this.cells[4].innerHTML;
                
            }
            
        }
        
        </script>
        
    </body>
</html>