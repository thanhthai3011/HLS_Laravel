<!DOCTYPE html>
<html lang="en">

<head>
@include('component.head')
</head>
<body>
  @include('component.header')
  @include('component.banner')
  <div class="content">
    <div class="main-content">
      <div id="responsecontainer" class="text-center">
        @foreach ($items as $key => $item )
            @php
                $content = $item ->content;
            @endphp
            <p>{{$content}}</p>
        @endforeach
        <hr />
      </div>
      <form action="">
        <ul class="list-btn">
          <li class="list-item funny-btn">
            <input type="submit" id="display" value="This is Funny!" />
          </li>
          <li class="list-item not-fun">
            <input type="submit" id="display" value="This is not Funny!" onclick="" />
          </li>
        </ul>
      </form>
    </div>
  </div>
  @include('component.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
