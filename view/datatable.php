<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <?php require("link_header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php require("manu.php") ?>
    <!-- เนื้อหา -->
    <table id="table" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ชื่อเรื่อง</th>
                <th>ชื่อเรื่อง</th>
                <th>ชื่อเรื่อง</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>
    <!-- เนื้อหา -->
    <?php require("footer.php") ?>
    <?php require("link_footer.php") ?>
    <script>
        $(function() {
            $('#table').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>