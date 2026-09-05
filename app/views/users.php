<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', serif;
            background: #f5eee8;
            color: #4b3621;
            min-height: 100vh;
            padding: 50px 30px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
        }

        .page-header {
            margin-bottom: 30px;
        }

        .page-header h1 {
            font-size: 34px;
            color: #4a2f20;
            margin-bottom: 8px;
        }

        .page-header p {
            color: #8b6f5a;
            font-size: 16px;
        }

        .users-card {
            background: #fffaf6;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(75, 54, 33, 0.12);
            border: 1px solid #e3d2c3;
        }

        .table-header {
            background: #6f4e37;
            color: white;
            padding: 22px 28px;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-header h2 {
            font-size: 20px;
            font-weight: 600;
        }

        .total-users {
            background: #d9b99b;
            color: #4a2f20;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 16px;
            font-weight: bold;
        }

        .table-container {
            overflow-x: auto;
        }

        .users-table {
            width: 100%;
            border-collapse: collapse;
        }

        .users-table th {
            background: #eee1d5;
            color: #5d4037;
            padding: 16px 20px;
            text-align: left;

            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .users-table td {
            padding: 17px 20px;
            border-bottom: 1px solid #eaded5;
            color: #5d4037;
            font-size: 16px;
        }

        .user-id {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            background: #d9b99b;
            color: #4a2f20;
            border-radius: 50%;
            font-weight: bold;
        }

        .username {
            color: #6f4e37;
        }

        .email {
            color: #8b6f5a;
        }

        /* Mobile */
        @media (max-width: 700px) {

            body {
                padding: 30px 15px;
            }

            .page-header h1 {
                font-size: 27px;
            }

            .table-header {
                padding: 18px;
            }

            .table-header h2 {
                font-size: 17px;
            }

            .users-table th,
            .users-table td {
                padding: 13px 14px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- Page Header -->
    <div class="page-header">
        <h1>Users Management</h1>
        <p>View all the users in the database.</p>
    </div>

    <!-- Users Card -->
    <div class="users-card">

        <!-- Card Header -->
        <div class="table-header">
            <h2>Users List</h2>

            <span class="total-users">
                Total Users: <?php echo count($users); ?>
            </span>
        </div>

        <!-- Table -->
        <div class="table-container">

            <table class="users-table">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Username</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($users as $user): ?>

                        <tr>

                            <td>
                                <span class="user-id">
                                    <?php echo $user['id']; ?>
                                </span>
                            </td>

                            <td>
                                <?php echo $user['firstname']; ?>
                            </td>

                            <td>
                                <?php echo $user['lastname']; ?>
                            </td>

                            <td class="email">
                                <?php echo $user['email']; ?>
                            </td>

                            <td class="username">
                                <?php echo $user['username']; ?>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>  

</div>

</body>
</html>