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
        <div style="position: relative; top:60px; right:-150px">
            <form action="{{ url('/uploadchef') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div>
                    <label>Name</label>
                    <input style="color: blue;" type="text" name="name" placeholder="enter chef name" required>
                </div>
                <div>
                    <label>Speciality</label>
                    <input style="color: blue;" type="text" name="speciality" placeholder="enter his speciality" required>

                </div>
                <div>
                    <label>image</label>
                    <input type="file" name="image" required>
                </div>

                <div>
                    <input style="background-color: red;padding:5px" type="submit" value="save">
                </div>
            </form>
            <div >
                <table >
                    <tr>
                        <th style="padding: 30px">id</th>
                        <th style="padding: 30px">name</th>
                        <th style="padding: 30px">speciality</th>
                        <th style="padding: 30px">image</th>

                    </tr>

                    @foreach ($data as $data)
                    <tr align="center">
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->speciality}}</td>

                        <td> <img style="height: 100px" src="/chefimage/{{ $data->image }}" alt=""></td>

                    </tr>
                    @endforeach
                </table>

        </div>



    </div>

    @include("admin.adminjs")
