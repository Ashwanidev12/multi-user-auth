<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>{{ Auth::user()->name }}</td>
    <td>{{Auth::user()->email}}</td>
    <td><a href="{{ route(user.logout)}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout
    </a>
    <form action="{{ route('user.logout')}}">
    </td>
  </tr>
 
</table>

</body>
</html>
