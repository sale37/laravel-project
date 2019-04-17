@extends('layouts.master')

@section('title', "Hello, ${first_name}")



@section('content')
<form id='post' action='/post' method='post'>
  @csrf
  Post:<br>
  <input type="text" name="age">
  <input type="submit" value="Submit">
</form>

<form id='put' action='/put' method='post'>
  @csrf
  @method('put')
  Put:<br>
  <button type="submit" form="put" value="Submit">Submit</button>
</form>

<form id='patch' action='/patch' method='post'>
  @csrf
  @method('patch')
  Patch:<br>
  <button type="submit" form="patch" value="Submit">Submit</button>
  </form>

<form id='delete' action='/delete' method='post'>
  @csrf
  @method('delete')
  Delete:<br>
  <button type="submit" form="delete" value="Submit">Submit</button>
</form>
@stop



</body>
</html>