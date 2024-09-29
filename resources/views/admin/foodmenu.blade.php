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
                <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <label>title</label>
                        <input style="color: blue;" type="text" name="title" placeholder="enter food title" required>
                    </div>
                    <div>
                        <label>Price</label>
                        <input style="color: blue;" type="text" name="price" placeholder="enter the price" required>

                    </div>
                    <div>
                        <label>image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div>
                        <label>Description</label>
                        <input style="color: blue;" type="text" name="description" placeholder="Write food Description " required >
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
                            <th style="padding: 30px">price</th>
                            <th style="padding: 30px">description</th>
                            <th style="padding: 30px">image</th>
                            <th style="padding: 30px">action</th>
                        </tr>

                        @foreach ($data as $data)
                        <tr align="center">
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->price }}</td>
                            <td>{{ $data->description }}</td>
                            <td> <img style="height: 100px" src="/foodimage/{{ $data->image }}" alt=""></td>
                            <td><a style="text-decoration: none" href="{{ url('/deletemenu', $data->id) }}">delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>








    </div>

    @include("admin.adminjs")
