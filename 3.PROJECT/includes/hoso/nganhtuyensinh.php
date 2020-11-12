<!doctype html>
<html lang="en">

<head>
    <title>Ngành tuyển sinh</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include "../Config.php";
    ?>
    <div class="container" style="margin-top: 40px;">
        <div>
            <h4>Nhóm ngành</h4>
            <select id="sel_depart">
                <option value="0">- Select -</option>
            <?php        // Fetch Department

            $sql_department = "SELECT * FROM major";
            $department_data = mysqli_query($conn, $sql_department);
            while ($row = mysqli_fetch_assoc($department_data)) {
                $departid = $row['id'];
                $depart_name = $row['major_name'];
                // Option
                echo "<option value='" . $departid . "' >" . $depart_name . "</option>";
            }
            ?>
        </select>
    </div>
    <div class="clear"></div>
    <div style="margin-top: 20px;"> <h4>Tên Ngành</h4>
    <table class="table">
        <thead >
            <tr" style="text-align: center;">
                <th  class="btn-success ">Mã ngành</th>
                <th  class="btn-success ">Tên ngành</th>
            </tr>
        </thead>
        <tbody id="sel_user">

        </tbody>
    </table>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#sel_depart").change(function() {
            var majorid = $(this).val();
            $.ajax({
                url: 'getUsers.php',
                type: 'post',
                data: {
                    depart: majorid
                },
                dataType: 'json',
                success: function(response) { 
                    $("#sel_user").empty(); 
                    for (var i = 0; i < response.length; i++) {
                        var Manganh = response[i]['Manganh']; 
                        var Tennganh = response[i]['Tennganh']; 
                        $("#sel_user").append(
                            ` <tr>
                            <td>${Manganh}</td>
                            <td>${Tennganh}</td>
                            </tr>`);
                    }
                } 
            });
        });
    });
</script>
</body>

</html>