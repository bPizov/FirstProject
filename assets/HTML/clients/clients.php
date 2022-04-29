<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
        <meta charset="utf-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />

        <!-- Latest compiled and minified Bootstrap 4.4.1 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <!-- Latest Font-Awesome CDN -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    </head>
    <body>
    <table class="table table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Name of Company</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Type Module</th>
            </tr>
        </thead>
        <?php
            include '../../PHP/connect.php';


            $sql = "SELECT employments_info.id, employments_info.full_name, employments_info.name_company, employments_info.e_mail, employments_info.phone_number, type_students.type 
            from employments_info LEFT JOIN type_students ON employments_info.type_students_id = type_students.id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result-> fetch_assoc()){
                    echo "  <tr scope=row>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["full_name"] . "</td>
                                <td>" . $row["name_company"] . "</td>
                                <td>" . $row["e_mail"] . "</td>
                                <td>" . $row["phone_number"] . "</td>
                                <td>" . $row["type"] . "</td>
                            </tr>";
                }
            } else {
                echo "No Results";
            }
            $conn->close();
        ?>
    </table>
        
        
        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <!-- Latest Compiled Bootstrap 4.4.1 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    </body>
</html>