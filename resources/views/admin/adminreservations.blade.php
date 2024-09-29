<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">

     @include("admin.navbar")
     <div style="position:relative; top:40px; ">
        <table bgcolor="grey" border="4px">
            <tr>
                <th style="padding: 30px">Id</th>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">phone</th>
                <th style="padding: 30px">guest</th>
                <th style="padding: 30px">date</th>

                <th style="padding: 30px">time</th>
                <th style="padding: 30px">message</th>
            </tr>
            @foreach ($data as $data)
            <tr align="center">
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phoneno}}</td>
                <td>{{$data->guest}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->time}}</td>
                <td>{{$data->message}}</td>



            </tr>
            @endforeach
        </table>
    </div>


    </div>

    @include("admin.adminjs")

    <!-- container-scroller -->
    <!-- plugins:js -->
