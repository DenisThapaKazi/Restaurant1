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

        <div style="position:relative; top:40px; right:-150px;">
            <table bgcolor="grey" border="4px">
                <tr>
                    <th style="padding: 30px">Id</th>
                    <th style="padding: 30px">Name</th>
                    <th style="padding: 30px">Email</th>
                    <th style="padding: 30px">action</th>
                </tr>
                @foreach ($data as $data)
                <tr align="center">
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    @if($data->usertype=='0')
                    <td> <a style="color:white; text-decoration:none;" href="{{ url('/deleteuser', $data->id) }}">delete</a></td>
                    @else
                    <td>Not allowed</td>
                    @endif

                </tr>
                @endforeach
            </table>
        </div>

    </div>

    @include("admin.adminjs")

    <!-- container-scroller -->
    <!-- plugins:js -->
