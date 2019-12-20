<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>List Candidates</title>
</head>
<body>

    <h1>LIST OF CANDIDATES</h1>
    <p>Click on the candidate who has your vote.</p>
    <table>
    <tr>NUMBER LIST</tr>
    <tr>POSITION</tr>
    <tr>VOTE</tr>
    
    @foreach($Candidates as $cand)
        <th>{{$cand->number_list}}</th>
        <th>{{$cand->position}}</th>
        <th><input type="radio" name="result" value={{$cand->id}}></th>
    @endforach
    </table>
    

</body>
</html>