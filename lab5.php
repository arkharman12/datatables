<!-- TITLE: Ajax and Datatables
AUTHOR: Harmanjot Singh
PURPOSE: Use of Ajax and Datatables
ORIGINALLY CREATED ON: 23 Oct 2019
LAST MODIFIED ON: 25 Oct 2019
LAST MODIFIED BY: Harmanjot Singh
MODIFICATION HISTORY: Original Build -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap, datatables and ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

    

    <title>Ajax and Data Tables</title>
</head>
<body class="text-center">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
		<table id="example" class="display table table-bordered table-hover" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Department</th>
                    <th>Contact</th>
                </tr>
            </thead>
        </table>
    </div>


    <script type="text/javascript">
    $( document ).ready(function() {
    $('#example').dataTable({
				 "bProcessing": true,
                 "sAjaxSource": "data.php",
				 "aoColumns": [
                    { mData: 'FirstName' } ,
                    { mData: 'LastName' },
                    { mData: 'Email' },
                    { mData: 'Gender' },
                    { mData: 'Age' },
                    { mData: 'Department' },
                    { mData: 'Contact' }
                ]
        });   
    });
    </script>
</body>
</html>