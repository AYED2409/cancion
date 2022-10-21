<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        any con get
          <form action="{{ url('any') }}" method="get">
              <input type="submit" value="Submit"/>
          </form>
          <a href="{{ url('any') }}">any con get,solo con get</a>
          <hr>
          any con delete
          <form action="{{url('any')}}" method="post">
              @method('delete')
              @csrf
              <input type="submit" value="Submit"/>
          </form>
          <hr>
          any con post
          <form action="{{url('any')}}" method="post">
              @csrf
              <input type="submit" value="Submit"/>
          </form>
          <hr>
          any con put
          <formaction="{{url('any')}}" method="post">
              @method('put')
              @csrf
              <input type="submit" value="Submit"/>
          </form>
          <hr>
          get
          <form action="{{url('get')}}" method="get">
              <a href="{{url('get')}}">any con get,solo con get</a>
              <input type="submit" value="Submit"/>
          </form>
          <hr>
          delete
          <form action="{{url('delete')}}" method="post">
              @method('delete')
              @csrf
              <input type="submit" value="Submit"/>
          </form>
          <hr>
             put con metodo post
          <form action="{{url('put')}}" method="post">
              @method('put')
              @csrf
              <input type="submit" value="Submit"/>
          </form>
          post
          <form action="{{url('post')}}" method="post">
             
              <input type="submit" value="Submit"/>
          </form>
    </body>
</html>