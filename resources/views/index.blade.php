<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>
<body>


<div class="container-fluid">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top sticky-top">
        <a class="navbar-brand" href="#">Phonebook</a>
    </nav>
    <br>
    <div class="row">
        <div class="container">
            <table class="table table-bordered table-striped" id="contacts">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                </tr>
                </thead >
                <tbody >
                @foreach ($contacts as $cnt)
                    <tr>
                        <td>{{$cnt->name}}</td>
                        <td>{{$cnt->phone_number}}</td>
                        <td>{{$cnt->address}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
<script>
    $(document).ready(function(){
        $('#contacts').DataTable();
    });
</script>
</html>
