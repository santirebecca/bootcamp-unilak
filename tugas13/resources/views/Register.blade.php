@extends('layouts.master')

@section('title')
    Buat Account Baru
    @endsection

    @section('content')

    <h1>Buat Account Baru!</h1>
    <h2> Sign Up Form</h2>
<form action="/welcome" method="POST">
    @csrf
    <label>First name:</label><br>
    <input type="text"  name="fname"><br>
    <label>Last name:</label><br>
    <input type="text"  name="lname"> <br>
    <label for="other">Other</label>

    <label for="other">Gender :</label> <br><br>
    <input type="radio" id="male" name="fav_language" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="famele" name="fav_language" value="Famele">
    <label for="famele">Famele</label><br>
    <input type="radio" id="other" name="fav_language" value="other">
    <label for="other">Other</label>

    <p>Nationality:</p>

    <select>
      <option> Belanda </option>
      <option> Hungaria</option>
      <option>  Rusia</option>
  </select>

  <p>Languenge Spoken:</p>

      <input type="checkbox" name="Belanda" value="Belanda">
      <label for="vehicle1"> Belanda </label><br>
      <input type="checkbox" name="Hungaria" value="Hungaria">
      <label for="vehicle2"> Hungaria </label><br>
      <input type="checkbox"  name="Other" value="Other">
      <label for="vehicle3"> Other </label> 

      <p>Bio:</p>
      <textarea name="message" rows="10" cols="30"></textarea> <br>
    <input type="submit" value="Sign Up">
  </form>
  @endsection