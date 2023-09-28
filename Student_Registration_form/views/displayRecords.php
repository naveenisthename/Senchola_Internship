<html>

<head>
    <title>
        Display Records
    </title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>

<body>
    <a href="<?= base_url("register/student") ?>">
        <button type="button">Go to Register</button>
    </a>
    <?php
    if (isset($data)) {

    ?>
        <form action="<?= base_url("register/update") ?>" method="POST">
            <table cellspacing="20">
                <tr>
                    <td>ID</td>
                    <td><input name="student_id" value="<?= $data[0]->student_id ?>" readonly=""></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input name="student_name" value="<?= $data[0]->student_name ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input name="student_email" value="<?= $data[0]->student_email ?>"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input name="student_phone" value="<?= $data[0]->student_phone ?>"></td>
                </tr>

                <tr>
                    <td><button>Update</button></td>
                    <td></td>
                </tr>
            </table>
        </form>
    <?php
    } else {
    ?>


        <!--to view a data -->

        <table class="result">
            <tr>
                <th>Edit</th>
                <th>Delete</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Student Phone</th>
            </tr>
            <?php
            if (isset($table)) {
                foreach ($table as $row) {
            ?>
                    <tr>
                        <td>
                            <a href="<?= base_url('register/editData/' . $row->student_id) ?>">Edit</a>
                        </td>
                        <td>
                            <!-- Add a class to identify the delete links -->
                            <a class="delete-link" href="<?= base_url('register/deleteData/' . $row->student_id) ?>">Delete</a>
                        </td>
                        <td><?= $row->student_id ?></td>
                        <td><?= $row->student_name ?></td>
                        <td><?= $row->student_email ?></td>
                        <td><?= $row->student_phone ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>

        <!-- Include SweetAlert2 library -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

        <!-- JavaScript for delete confirmation -->
        <script>
            // Select all delete links with the class "delete-link"
            const deleteLinks = document.querySelectorAll('.delete-link');

            // Attach the click event listener to each delete link
            deleteLinks.forEach(deleteLink => {
                deleteLink.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent the default action of the link

                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'Cancel'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // If the user confirms, proceed with the delete action by following the link
                            window.location.href = event.target.href;
                        }
                    });
                });
            });
        </script>

    <?php
    }
    ?>

</body>



</head>

</html>